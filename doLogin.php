<?php
//session_start();
require('db_connect.php');


if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username =$_POST['username'];
		$password2 =md5($_POST['password']);
		$password=substr($password2,0,20);

		if($username == 'admin' && $password == 'admin'){
			//session_start();
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
	    //$UserID = $userinfo['user_id'];
	
		$numrows = mysqli_num_rows($query);
		if($numrows !=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				$UserID=$row['user_id'];

			}
			if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['sess_user']=$username;
				$_SESSION['sess_id']=$UserID;
				//Redirect Browser
				header("Location:products.php");
			}
		}
		else
		{	
			//echo substr($password,0,5);
			
			echo "<script language=\"JavaScript\">\n";
  			echo "alert('Invalid username or password!');\n";
  			echo "window.location='./login.php'";
  			echo "</script>";
		}

		}
		

		
		
	}
	else
	{
		echo "<script language=\"JavaScript\">\n";
  		echo "alert('Required All fields!');\n";
  		echo "window.location='./login.php'";
  		echo "</script>";
	}

	
}









		

?>

