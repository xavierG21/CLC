<?php
session_start();
require('db_connect.php');


if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['email'])){
		$username =$_POST['username'];
		$email =$_POST['email'];

		$query = mysqli_query($conn, "SELECT * FROM customers WHERE username='".$username."' AND email='".$email."'");
		$sql = "SELECT * FROM customers WHERE username='".$username."' AND email='".$email."'";
	    $res = mysqli_query($conn, $sql);
	    $userinfo = $res->fetch_assoc();
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
	 $val=0; #conditionbinary
		$numrows = mysqli_num_rows($query);
		if($numrows !=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
					$dbusername=$row['username'];
					$dbemail=$row['email'];
					$dbpass=$row['password'];
			}
		
				if($dbusername == $username && $dbemail == $email)
				{
					/*session_start();
					$_SESSION['sess_user']=$username;
					$_SESSION['sess_id']=$UserID;
					//Redirect Browser
					header("Location:index.php");*/
					//echo $username;
					
									//if "email" variable is filled out, send email
				  if (isset($_REQUEST['email']))  {
				  
				  $myEmail = $_POST['email'];
				  //Email information
				  $admin_email = $myEmail;
				  $email = $_REQUEST['email'];
				  $subject = "Forgot Password";
				  $comment = "Change Password HERE!!! ---> http://localhost/clc/forget_pass_do.php 
							  Heres Your Username : 	
								"." ".$dbusername;
				  
				  //send email
				  mail($admin_email, "$subject", $comment, "From:" , $email);
				  
				  //Email response
				  	echo "<script language=\"JavaScript\">\n";
  					echo "alert('Password was successfully sent to your email');\n";
  					echo "window.location='./forget_pass.php'";
  					echo "</script>";



				  }
				  
				  //if "email" variable is not filled out, display the form
				 
					
					echo "<script language=\"JavaScript\">\n";
  					echo "alert('Please fill the required fields');\n";
  					echo "window.location='./forget_pass.php'";
  					echo "</script>";
					$val=1;
				}
			
		
		
	}
	
	}
	}
		if ($val==0){#else condition for wrong credentials
				echo "SORRY WLA SA DATA BASE";
			}
		

?>

