<?php
session_start();
require('db_connect.php');


if(isset($_POST['submit'])){

		$username =$_POST['username'];
		$newPass =$_POST['password'];
		$confirm_newPass =$_POST['confirm_password'];

		if($newPass != $confirm_newPass){
			echo "<script language=\"JavaScript\">\n";
		  	echo "alert('Password did not matched!');\n";
		 	echo "window.location='./forget_pass_do.php'";
		  	echo "</script>";


		}else{

			$query = "UPDATE customers SET password='".md5($newPass)."' WHERE username='$username'";
			$res = mysqli_query($conn, $query);
			echo "<html><head><script>alert('Successfully Changed Password');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=login.php'>";
		}


	    //$UserID = $userinfo['user_id']; 
		/*$password2 =md5($_POST['password']);
		$password=substr($password2,0,20);

		if($username == 'admin' && $password == 'admin'){
			session_start();
			$_SESSION['sess_user']='admin';
		
			//Redirect Browser
			header("Location:index.php");
		}
		else
		{
		$query = mysqli_query($conn, "SELECT * FROM customers WHERE username='".$username."' AND password='".$password."'");
		
		/* USER ID */
		//$sql = "SELECT * FROM customers WHERE username='".$username."' AND password='".$password."'";
	    //$res = mysqli_query($conn, $sql);
	    //$userinfo = $res->fetch_assoc();
	    //$UserID = $userinfo['user_id']; */
	 
	
	}
		
		

?>

