<?php
session_start();
include_once("../config.php");
include_once("../db_conn.php");
$sql = "SELECT * FROM customers WHERE username='".$_SESSION['sess_user']."'";
$res = mysqli_query($con, $sql);
$userinfo = $res->fetch_assoc();
$UserID = $userinfo['user_id'];
$fname= $userinfo['fname'];
$lname= $userinfo['lname'];
$day = date("Y-m-d");
//echo $UserID;

//$paypal_id = $_GET['id'];
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel='icon' href="images/clc_logo.png"  type="image/png">
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address>
				<p>268 Magallanes St,</p>
				<p>Cebu City,<br>Orange,6000 Cebu.</p>
				<p>(032) 253 2622 </p>
				
			</address>
			<span><img alt="" src="Central.png"></span>
		</header>
		<article>
			<table class="meta">
				<tr>
					<th><span  >Customer Name</span></th>
					<td><span  ><?php echo $fname." ".$lname;?></span></td>
				</tr>
				<tr>
					<th><span  >Date</span></th>
					<td><span  ><?php echo date("Y-m-d");?></span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<!-- <th><span  >Image</span></th> -->
						<th><span  >Name</span></th>
						<th><span  >Color</span></th>
						<th><span  >Price</span></th>
						<th><span  >Quantity</span></th>
						<th><span  >Total</span></th>
						<!--<th><span  >Remove</span></th>-->
					</tr>
				</thead>
				<tbody>
				
<?php

					if(isset($_SESSION["cart_products"])) //check session var
					{
					$total = 0; //set initial total value
					$b = 0; //var for zebra stripe table 
					$icounter=0;
					$sql = "SELECT * FROM products";
					$result = mysqli_query($con,$sql);
					while($array =mysqli_fetch_row($result)){
						$tempo[$icounter]=$array;
						$icounter++;
					}
					foreach ($_SESSION["cart_products"] as $cart_itm)
					{
						//set variables to use in content below
					$product_name = $cart_itm["product_name"];
					$product_qty = $cart_itm["product_qty"];
					$product_price = $cart_itm["product_price"];
					$product_code = $cart_itm["product_code"];
					$product_color = $cart_itm["product_color"];
					$length=sizeof($tempo);

					$forimage='';
					for($il=0;$il<$length;$il++){
						if($product_code==$tempo[$il][1]){
							$forimage=$tempo[$il][4];
							break;
						}
					}
					
					$subtotal = ($product_price * $product_qty); //calculate Price x Qty
					
					$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
					echo '<tr class="'.$bg_color.'">';
					//echo '<td align="center"><img src="../photo/'.$forimage.'" width="90px" /></td>';
					echo '<td style="width:200px">'.$product_name.'</td>';
					echo '<td>'.$product_color.'</td>';
					echo '<td>'.$currency.$product_price.'</td>';
					echo '<td align="center"><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /> 
						



					</td>';
					echo '<td><p class="fw_medium scheme_color">'.$currency.$subtotal.'</p></td>';
					//echo '<td><button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" name="remove_code[]" value="'.$product_code.'">Remove</button></td>';
					echo '</tr>';
					$total = ($total + $subtotal); //add subtotal to total var
					}
					$grand_total = $total + $shipping_cost; //grand total including shipping cost
						foreach($taxes as $key => $value){ //list and calculate all taxes in array
						$tax_amount     = round($total * ($value / 100));
						$tax_item[$key] = $tax_amount;
						$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
					}
		
					$list_tax       = '';
					foreach($tax_item as $key => $value){ //List all taxes
					$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
					}
					$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
					}

//include '../new_p_submit.php';
?>
				
				
					<!--<tr>
						<td><span  >Front End Consultation</span></td>
						<td><span  >Experience Review</span></td>
						<td><span data-prefix>$</span><span  >150.00</span></td>
						<td><span  >4</span></td>
						<td><span data-prefix>$</span><span>600.00</span></td>
					</tr> -->
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span  >Total Amount</span></th>
					<td><span data-prefix>P</span><span>
			<?php
			if(isset($grand_total)){
		   
			echo sprintf("%01.2f", $grand_total);
			}else{
				echo "add iteem";
			}	
		   	?>
			</span></td>
				</tr>
				
			</table>
		</article>
		<aside>
			<h1><span  >Additional Notes</span></h1>
			<div  >
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
				<br>
				<br>
			    <button onclick="printpage();" style="cursor: pointer;padding:6px 12px;border:1px solid transparent;
	border-radius:4px" id="printpagebutton" class='btn'>Print this page</button>
			</div>
		</aside>
	</body>
</html>


<script type="text/javascript">
	function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>