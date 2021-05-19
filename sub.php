<?php
	include_once("config.php");
	require("db_conn.php");
	session_start(); 
	function getRandomWord2($len = 12)
	{
		$word = array_merge(range('A', 'Z'));
		shuffle($word);
		return substr(implode($word), 0, $len);
	}
	$method= 'sample1';
	$ordNum=getRandomWord2();
	$ordDat= date("Y-m-d");
	$shipDat= date("Y-m-d");
	$stat='In process';
	$com = 'Order In Process. Please wait for the admin to Approve.';
	
	
	$tempo =[];
	$customerID='';
	$mode= 'Palawan';
	$fordNum= $ordNum;
	$length=0;
	if(isset($_SESSION["cart_products"]))
{		$counter=0;
		foreach ($_SESSION["cart_products"] as $cart_itm)
		{
			$tempo[$counter][0] = $cart_itm["product_name"];
			$tempo[$counter][1] = $cart_itm["product_qty"];
			$tempo[$counter][2] = $cart_itm["product_price"];
			$tempo[$counter][3] = $cart_itm["product_code"];	
			$tempo[$counter][4] = $cart_itm["product_color"];
			$counter++;
		}
	}
	$length= sizeof($tempo); 
	$paymentf='';
	$_SESSION['order_numberf']=$ordNum;
	if(isset($_POST['methodVal'])){
		if(isset($_POST['fpayment']))$paymentf=($_POST['fpayment']);
		$method= $_POST['methodVal'];
		if($paymentf=="Paypal")$mode='Paypal';
		if(isset($_SESSION['sess_id']))$customerID = $_SESSION['sess_id'];


		$sql_temp = "INSERT INTO orders (orderNumber,orderDate,status,customerID,method,mode,admin_comment) VALUES ('$ordNum','$ordDat','$stat','$customerID','$method','$mode','$com')";
		if($length!=0){	
			if(mysqli_query($con,$sql_temp));
		}
		$i=0;
		if($mode=="Paypal")$i=10;
		for($i;$i<$length;$i++){
			$prodcodeff = $tempo[$i][3];
			$prodnameff= $tempo[$i][0];
			$quantityff = $tempo[$i][1];
			$priceff    = $tempo[$i][2];
			$prodcolorff = $tempo[$i][4];

			$_SESSION['colorf'] = $prodcolorff;

			$sql_temp2 = "INSERT INTO orderdetails (orderNumber,product_code,product_name,quantityOrdered,priceEach,customer_id,color) 
											VALUES ('$fordNum','$prodcodeff','$prodnameff','$quantityff','$priceff','$customerID','$prodcolorff')" ;
			if(mysqli_query($con,$sql_temp2));

			/////////////////////////
			$sql_t3 = "SELECT * FROM products WHERE product_code='$prodcodeff' ";
			$result = mysqli_query($con,$sql_t3);
			$array  = mysqli_fetch_row($result);


			$foriginalVal = $array[9];
			$foriginalVal -= $quantityff;

			$sql_temp3 = "UPDATE products SET quantity='$foriginalVal' WHERE product_code='$prodcodeff'";
			if(mysqli_query($con,$sql_temp3));
		}

	}else echo "Error ". $con->error;
	
?>