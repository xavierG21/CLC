<?php
session_start();
include_once("../config.php");
include_once("paypal.class.php");
include_once("../pres.php");
//require("../db_conn.php");

$paypalmode = ($PayPalMode=='sandbox') ? '.sandbox' : '';
$ftempo=[];
if(isset($_SESSION["prod_purch"]))$ftempo=$_SESSION["prod_purch"];
if(isset($_SESSION["cart_products"])) //Post Data received from product list page.
{
	//Other important variables like tax, shipping cost

	//we need 4 variables from product page Item Name, Item Price, Item Number and Item Quantity.
	//Please Note : People can manipulate hidden field amounts in form,
	//In practical world you must fetch actual price from database using item id. 
	//eg : $ItemPrice = $mysqli->query("SELECT item_price FROM products WHERE id = Product_Number");
	$paypal_data ='';
	$ItemTotalPrice = 0;
	
	$i = 0;
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
        $product_code 	= filter_var($cart_itm["product_code"], FILTER_SANITIZE_STRING); 
		
		$results = $mysqli->query("SELECT product_name, product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		$obj = $results->fetch_object();
		
        $paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$i.'='.urldecode($obj->product_name);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$i.'='.urlencode($cart_itm["product_code"]);
        $paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$i.'='.urlencode($obj->price);		
		$paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$i.'='. urlencode($cart_itm["product_qty"]);
       	
		// item price X quantity
        $subtotal = ($obj->price*$cart_itm["product_qty"]);
		
        //total price
        $ItemTotalPrice = $ItemTotalPrice + $subtotal;
		
		//create items for session
		$paypal_product['items'][] = array('itm_name'=>$obj->product_name,
											'itm_price'=>$obj->price,
											'itm_code'=>$cart_itm["product_code"], 
											'itm_qty'=>$cart_itm["product_qty"],
											'itm_clr'=>$cart_itm["product_color"]
											);
		$i++;
    }
	
	$total_tax = 0;	
	foreach($taxes as $key => $value){ //list and calculate all taxes in array
			$tax_amount     = round($ItemTotalPrice * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$total_tax = $total_tax + $tax_amount; //total tax amount
	}
				
	//Grand total including all tax, insurance, shipping cost and discount
	$GrandTotal = ($ItemTotalPrice + $total_tax + $HandalingCost + $InsuranceCost + $shipping_cost + $ShippinDiscount);
	
								
	$paypal_product['assets'] = array('tax_total'=>$total_tax, 
								'handaling_cost'=>$HandalingCost, 
								'insurance_cost'=>$InsuranceCost,
								'shippin_discount'=>$ShippinDiscount,
								'shippin_cost'=>$shipping_cost,
								'grand_total'=>$GrandTotal);
	
	//create session array for later use
	$_SESSION["paypal_products"] = $paypal_product;
	
	//Parameters for SetExpressCheckout, which will be sent to PayPal
	$padata = 	'&METHOD=SetExpressCheckout'.
				'&RETURNURL='.urlencode($PayPalReturnURL ).
				'&CANCELURL='.urlencode($PayPalCancelURL).
				'&PAYMENTREQUEST_0_PAYMENTACTION='.urlencode("SALE").
				$paypal_data.				
				'&NOSHIPPING=0'. //set 1 to hide buyer's shipping address, in-case products that does not require shipping
				'&PAYMENTREQUEST_0_ITEMAMT='.urlencode($ItemTotalPrice).
				'&PAYMENTREQUEST_0_TAXAMT='.urlencode($total_tax).
				'&PAYMENTREQUEST_0_SHIPPINGAMT='.urlencode($shipping_cost).
				'&PAYMENTREQUEST_0_HANDLINGAMT='.urlencode($HandalingCost).
				'&PAYMENTREQUEST_0_SHIPDISCAMT='.urlencode($ShippinDiscount).
				'&PAYMENTREQUEST_0_INSURANCEAMT='.urlencode($InsuranceCost).
				'&PAYMENTREQUEST_0_AMT='.urlencode($GrandTotal).
				'&PAYMENTREQUEST_0_CURRENCYCODE='.urlencode($PayPalCurrencyCode).
				'&LOCALECODE=GB'. //PayPal pages to match the language on your website.
				'&LOGOIMG=http://www.sanwebe.com/wp-content/themes/sanwebe/img/logo.png'. //site logo
				'&CARTBORDERCOLOR=FFFFFF'. //border color of cart
				'&ALLOWNOTE=1';
		
		//We need to execute the "SetExpressCheckOut" method to obtain paypal token
		$paypal= new MyPayPal();
		$httpParsedResponseAr = $paypal->PPHttpPost('SetExpressCheckout', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);
		
		//Respond according to message we receive from Paypal
		if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"]))
		{
				unset($_SESSION["cart_products"]); //session no longer needed
				//Redirect user to PayPal store with Token received.
			 	$paypalurl ='https://www'.$paypalmode.'.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token='.$httpParsedResponseAr["TOKEN"].'';
				header('Location: '.$paypalurl);
		}
		else
		{
			//Show error message
			echo '<div style="color:red"><b>Error : </b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';
			echo '<pre>';
			print_r($httpParsedResponseAr);
			echo '</pre>';
		}

}

//Paypal redirects back to this page using ReturnURL, We should receive TOKEN and Payer ID
if(isset($_GET["token"]) && isset($_GET["PayerID"]))
{
	//we will be using these two variables to execute the "DoExpressCheckoutPayment"
	//Note: we haven't received any payment yet.
	
	$token = $_GET["token"];
	$payer_id = $_GET["PayerID"];
	
	//get session variables
	$paypal_product = $_SESSION["paypal_products"];
	$paypal_data = '';
	$ItemTotalPrice = 0;
    foreach($paypal_product['items'] as $key=>$p_item)
    {		
		$paypal_data .= '&L_PAYMENTREQUEST_0_QTY'.$key.'='. urlencode($p_item['itm_qty']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_AMT'.$key.'='.urlencode($p_item['itm_price']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NAME'.$key.'='.urldecode($p_item['itm_name']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER'.$key.'='.urlencode($p_item['itm_code']);
        $paypal_data .= '&L_PAYMENTREQUEST_0_CLR'.$key.'='.urlencode($p_item['itm_clr']);
		// item price X quantity
        $subtotal = ($p_item['itm_price']*$p_item['itm_qty']);
        //total price
        $ItemTotalPrice = ($ItemTotalPrice + $subtotal);
    }

	$padata = 	'&TOKEN='.urlencode($token).
				'&PAYERID='.urlencode($payer_id).
				'&PAYMENTREQUEST_0_PAYMENTACTION='.urlencode("SALE").
				$paypal_data.
				'&PAYMENTREQUEST_0_ITEMAMT='.urlencode($ItemTotalPrice).
				'&PAYMENTREQUEST_0_TAXAMT='.urlencode($paypal_product['assets']['tax_total']).
				'&PAYMENTREQUEST_0_SHIPPINGAMT='.urlencode($paypal_product['assets']['shippin_cost']).
				'&PAYMENTREQUEST_0_HANDLINGAMT='.urlencode($paypal_product['assets']['handaling_cost']).
				'&PAYMENTREQUEST_0_SHIPDISCAMT='.urlencode($paypal_product['assets']['shippin_discount']).
				'&PAYMENTREQUEST_0_INSURANCEAMT='.urlencode($paypal_product['assets']['insurance_cost']).
				'&PAYMENTREQUEST_0_AMT='.urlencode($paypal_product['assets']['grand_total']).
				'&PAYMENTREQUEST_0_CURRENCYCODE='.urlencode($PayPalCurrencyCode);

	//We need to execute the "DoExpressCheckoutPayment" at this point to Receive payment from user.
	$paypal= new MyPayPal();
	$httpParsedResponseAr = $paypal->PPHttpPost('DoExpressCheckoutPayment', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);
	
	//Check if everything went ok..
	if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) 
	{

			echo '<h2>Success</h2>';
			echo 'Your Transaction ID : '.urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
			
			
			/************************order Insert database**********************************/
				$null = "Null";
				$oN   = urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
				
				date_default_timezone_set("Asia/Manila");
				//$time = date("h:i a");
				
				$day = date("Y-m-d");
				$s   = "In Process";
				$cID = $_SESSION['sess_id'];   /* Session ID customer YAN!! !!! */
				$total_amt = $ItemTotalPrice ;
				$method = "Paypal";
				$fordNm2=$_SESSION['order_numberf'];	

			
				$query2="INSERT INTO payments (user_id,paymentDate,amount,code,orderNumber)
											VALUES ('$cID','$day','$ItemTotalPrice','$method','$fordNm2')";
				$result2 = mysqli_query($con, $query2);
				
			
			
				/*
				//Sometimes Payment are kept pending even when transaction is complete. 
				//hence we need to notify user about it and ask him manually approve the transiction
				*/
				
				if('Completed' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"])
				{
					echo '<div style="color:green">Payment Received! Your product will be sent to you very soon! </div>
							<a href="http://localhost/clc/"> Return of the Comeback </a> 
						';
						echo "<meta http-equiv='refresh' content='0; url=paypal_success.php?id=".$fordNm2."'>";
				}
				elseif('Pending' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"])
				{
					echo '<div style="color:red">Transaction Complete, but payment is still pending! '.
					'You need to manually authorize this payment in your <a target="_new" href="http://www.paypal.com">Paypal Account</a></div>';
				}

				// we can retrive transection details using either GetTransactionDetails or GetExpressCheckoutDetails
				// GetTransactionDetails requires a Transaction ID, and GetExpressCheckoutDetails requires Token returned by SetExpressCheckOut
				$padata = 	'&TOKEN='.urlencode($token);
				$paypal= new MyPayPal();
				$httpParsedResponseAr = $paypal->PPHttpPost('GetExpressCheckoutDetails', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

				if("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) 
				{
					
					echo '<br /><b>Stuff to store in database :</b><br />';
					
					echo '<pre>';
					/*
					#### SAVE BUYER INFORMATION IN DATABASE ###
					//see (http://www.sanwebe.com/2013/03/basic-php-mysqli-usage) for mysqli usage
					//use urldecode() to decode url encoded strings.
					
					$buyerName = urldecode($httpParsedResponseAr["FIRSTNAME"]).' '.urldecode($httpParsedResponseAr["LASTNAME"]);
					$buyerEmail = urldecode($httpParsedResponseAr["EMAIL"]);
					
					//Open a new connection to the MySQL server
					$mysqli = new mysqli('host','username','password','database_name');
					
					//Output any connection error
					if ($mysqli->connect_error) {
						die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
					}		
					
					$insert_row = $mysqli->query("INSERT INTO BuyerTable 
					(BuyerName,BuyerEmail,TransactionID,ItemName,ItemNumber, ItemAmount,ItemQTY)
					VALUES ('$buyerName','$buyerEmail','$transactionID','$ItemName',$ItemNumber, $ItemTotalPrice,$ItemQTY)");
					
					if($insert_row){
						print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />'; 
					}else{
						die('Error : ('. $mysqli->errno .') '. $mysqli->error);
					}
					
					*/
					// prod_name [L_PAYMENTREQUEST_0_NAME
					// quantity L_PAYMENTREQUEST_0_QTY
					// amount L_PAYMENTREQUEST_0_AMT
					// L_PAYMENTREQUEST_0_NUMBER


					$loop=0;
					$sampledata=[];
					while($httpParsedResponseAr["L_PAYMENTREQUEST_0_NUMBER"."$loop"]!=NULL){

						if($httpParsedResponseAr["L_PAYMENTREQUEST_0_NUMBER"."$loop"]==NULL)break;
						$sampledata[$loop][0]= $httpParsedResponseAr["L_PAYMENTREQUEST_0_NUMBER"."$loop"];
						$sampledata[$loop][1]= $httpParsedResponseAr["L_PAYMENTREQUEST_0_NAME"."$loop"];	
						$sampledata[$loop][2]= $httpParsedResponseAr["L_PAYMENTREQUEST_0_AMT"."$loop"];
						$sampledata[$loop][3]= $httpParsedResponseAr["L_PAYMENTREQUEST_0_QTY"."$loop"]; 
						$sampledata[$loop][4]= $httpParsedResponseAr["L_PAYMENTREQUEST_0_CLR"."$loop"]; 
						$loop++;
					}


					$length=sizeof($sampledata);
					
					for($zloop=0;$zloop<$length;$zloop++){
						$initamt = $sampledata[$zloop][2];
						$zzloop=0;
						$finamt=' ';
						while($initamt[$zzloop]!='%'){
							$finamt[$zzloop]=$initamt[$zzloop];
							$zzloop++;
						}	
						$sampledata[$zloop][2]=$finamt;
					}
					$iloop=0;
					$mode= "Paypal";

					$fordNm=$_SESSION['order_numberf'];
					while($iloop<$length){
							$prodcodef = $sampledata[$iloop][0];
							$prodenamef= urldecode($sampledata[$iloop][1]);
							$quantityf = $sampledata[$iloop][3];
							$pricef    = $sampledata[$iloop][2];
							$colorf    = $ftempo[$iloop][4];
							$query3= "INSERT INTO orderdetails (orderNumber,product_code,product_name,quantityOrdered,priceEach,customer_id,color)
								VALUES ('$fordNm','$prodcodef','$prodenamef','$quantityf ','$pricef','$cID','$colorf')";
							if(mysqli_query($con,$query3))echo $length . '<br>';
							else echo "Insert failed: (" . $con->errno . ") " . $con->error . '<br>';



							$sql_t3 = "SELECT * FROM products WHERE product_code='$prodcodef' ";
							$result = mysqli_query($con,$sql_t3);
							$array  = mysqli_fetch_row($result);


							$foriginalVal = $array[9];
							$foriginalVal -= $quantityf;

							$sql_temp3 = "UPDATE products SET quantity='$foriginalVal' WHERE product_code='$prodcodef'";
							if(mysqli_query($con,$sql_temp3));
							$iloop++;
					}

					
					/* echo "<meta http-equiv='refresh' content='0; url=../invoice/index.php'>";
					 print_r($sampledata);
					echo '<br>';
					echo '<pre>';
					print_r($httpParsedResponseAr);
					echo '</pre>';
					print_r($ftempo); */
				} else  {
					/* echo '<div style="color:red"><b>GetTransactionDetails failed:</b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';
					echo '<pre>';
					print_r($httpParsedResponseAr);
					echo '</pre>';
					echo "<meta http-equiv='refresh' content='0; url=../invoice/index.php'>";  */
				}
	
	}else{
			/*
			echo '<div style="color:red"><b>Error : </b>'.urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]).'</div>';
			echo '<pre>';
			print_r($httpParsedResponseAr);
			echo '</pre>'; 
			echo "<meta http-equiv='refresh' content='0; url=../invoice/index.php'>"; */
			
	} 
}

?>
