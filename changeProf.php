
<?php
//session_start();
require("db_connect.php");
$userId = $_GET['pid'];


    

	//$userRow = mysqli_fetch_array($result);

	//$oldpw = $userRow['password'];
	
	

	if(isset($_POST['save'])){
		if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && 
		!empty($_POST['contact_no']) && !empty($_POST['address'])){
			
			$firstname      = ($_POST['fname']);
	$lastname      = ($_POST['lname']);
    $email     = ($_POST['email']);
	$contact_no	 = $_POST['contact_no'];
	$address	     = $_POST['address'];  
			//$oldPass2 = md5($_POST['oldPass']);

			//$oldPass = substr($oldPass2,0,20);

			//$newPass = $_POST['newPass'];
			//$confirmPass = $_POST['confirmPass'];

				//if ($oldPass == $oldpw){
					//if($newPass == $confirmPass){
						 mysqli_query($conn, "UPDATE customers SET fname='$firstname',lname='$lastname', email='$email',contact_no='$contact_no', 
						 address='$address' WHERE user_id='$userId'");
						//$query = "UPDATE customers SET fname='".md5($newPass)."' WHERE user_id='$userId'";
						
							echo "<script>alert('Profile Successfully Edited')</script>";
							echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
				
		}else{
			echo "<script>alert('Please fill required fields')</script>";
			echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
		}
	}
?>