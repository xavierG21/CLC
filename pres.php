<?php
	session_start();
	include_once("config.php");
	include_once("db_conn.php");
	$tempo = [];
	$counter=0;
	$orderNumber='';
	$customerID='';
	$mode= 'Palawan';
	$fordNum= 'Not applicable'; 
	if(isset($_SESSION["cart_products"])){
		foreach ($_SESSION["cart_products"] as $cart_itm)
		{
			$tempo[$counter][0] = $cart_itm["product_name"];
			$tempo[$counter][1] = $cart_itm["product_qty"];
			$tempo[$counter][2] = $cart_itm["product_price"];
			$tempo[$counter][3] = $cart_itm["product_code"];	
			$tempo[$counter][4] = $cart_itm["product_color"];
			$counter++;
		}
		$_SESSION["prod_purch"]=$tempo;
	} 
	$icounter=0;
	$sql = "SELECT * FROM products";
	$result = mysqli_query($con,$sql);
	while($array =mysqli_fetch_row($result)){
		$tempoo[$icounter]=$array;
		$icounter++;
	}
	$_SESSION["allproducts"]=$tempoo;

		
?>
