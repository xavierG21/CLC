<?php
session_start();
require("db_connect.php");
$userId = $_GET['pid'];

if(isset($_SESSION['sess_user'])!=""){
  $sql = "SELECT * FROM customers WHERE user_id='".$userId."'";
  $result = mysqli_query($conn, $sql);
if(!$result){
  echo "SQL Query Failed!";
  exit();
}

	$userRow = mysqli_fetch_array($result);

	$oldpw = $userRow['password'];

	if(isset($_POST['save'])){
		if(!empty($_POST['oldPass']) && !empty($_POST['newPass']) && !empty($_POST['confirmPass'])){
			$oldPass2 = md5($_POST['oldPass']);

			$oldPass = substr($oldPass2,0,20);

			$newPass = $_POST['newPass'];
			$confirmPass = $_POST['confirmPass'];

				if ($oldPass == $oldpw){
					if($newPass == $confirmPass){
						$query = "UPDATE customers SET password='".md5($newPass)."' WHERE user_id='$userId'";
						$res = mysqli_query($conn, $query);
						if($res){
							echo "<script>alert('Changed Password Successfully')</script>";
							echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
						}
					}else{
							echo "<script>alert('New Password did not match')</script>";
							echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
					}
					
				}else{
					
					echo "<script>alert('Invalid old password')</script>";
					echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
				}
		}else{
			echo "<script>alert('Please fill required fields')</script>";
			echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
		}
	





	}
};







?>