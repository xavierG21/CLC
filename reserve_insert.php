
<?php
	
	require('db_connect.php');

	if(isset($_POST['submit'])){
		if(!empty($_POST['fname']) && !empty($_POST['lname']) && 
			!empty($_POST['username']) && !empty($_POST['password']) &&
			!empty($_POST['address']) && !empty($_POST['email']) && 
			!empty($_POST['contact_no']) && !empty($_POST['confirmPassword'])){

	$firstname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lastname = mysqli_real_escape_string($conn,  $_POST['lname']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password =md5($_POST['password']);
	$confirmPassword =md5($_POST['confirmPassword']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);

	
	//Send Data to Table
	$query = mysqli_query($conn, "SELECT * FROM customers WHERE username='".$username."'");
	$numrows = mysqli_num_rows($query);
	if($numrows == 0){

		if($password != $confirmPassword){
			echo "<script language=\"JavaScript\">\n";
		  	echo "alert('Password did not matched!');\n";
		 	echo "window.location='./register.php'";
		  	echo "</script>";

		}else{
			//Insert to Mysqli Query
			$sql = "INSERT INTO customers(fname,lname,username,password,address,email,contact_no) 
					VALUES ('$firstname','$lastname','$username','$password','$address','$email','$contact_no')";
			$result = mysqli_query($conn, $sql);
			
			if($result){
				
				//Redirect Browser
				//header("Location:index.php");
				echo "<script language=\"JavaScript\">\n";
		  		echo "alert('Registered Successfully!');\n";
		  		echo "window.location='./login.php'";
		  		echo "</script>";
						
			
				
			}else{
				echo "<script language=\"JavaScript\">\n";
		  		echo "alert('Failed!');\n";
		 		echo "window.location='./register.php'";
		  		echo "</script>";
			}
			}
		}else{
			echo "<script language=\"JavaScript\">\n";
		  	echo "alert('Username already exist!');\n";
		 	echo "window.location='./register.php'";
		  	echo "</script>";
		};
	
		
}else{
		  echo "<script language=\"JavaScript\">\n";
		  echo "alert('Required all fields!');\n";
		  echo "window.location='./register.php'";
		  echo "</script>";
}
}

?>
	
