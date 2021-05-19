<?php
	session_start();
	include_once("config.php");
	require("db_conn.php");

	$forfinalcode='';
	$customerID='';
	$pdate=  date("Y-m-d");
	$amt= $_SESSION['grand_total'];
	$mode = 'Palawan';
	$ordNum = $_SESSION['orderNumber'];


	if(isset($_POST['for_code'])){
		$forfinalcode=$_POST['for_code'];
		if(isset($_SESSION['sess_id']))$customerID =$_SESSION['sess_id'];
		$fcsql= "INSERT INTO payments (user_id,paymentDate,amount,mode,code,orderNumber) VALUES
							 ('$customerID','$pdate','$amt','$mode','$forfinalcode','$ordNum')";
		if(mysqli_query($con,$fcsql));
	}







?>