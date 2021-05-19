<?php
	
	require('db_connect.php');

	if(isset($_POST['submit'])){
		$user_quantity = $_POST['user_quantity'];

		 //Search Database
		$query = "SELECT * FROM products WHERE product_name='Sample'";
		$res = mysqli_query($conn, $query);
	    $userinfo = $res->fetch_assoc();
	    $stored_quantity = $userinfo['quantity'];

	    if ($user_quantity > $stored_quantity){
	    	echo "<h1>Not enough in stock</h1>";

	    }else{
	    	$stored_quantity = $stored_quantity - $user_quantity;
	    	echo "$stored_quantity";

	    	//UPDATE QUANTITY IN PRODUCT
	    }
	}else{
		echo "Error";
	};

?>