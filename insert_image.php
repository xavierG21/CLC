<?php
require("db_connect.php");
session_start();



	$findUser = "SELECT * FROM customers WHERE user_id='".$_SESSION['sess_id']."'";
	$found = mysqli_query($conn, $findUser);
	$userinfo = $found->fetch_assoc();

  $SESSIONID = $userinfo['user_id'];

  if ($SESSIONID == $_SESSION['sess_id']){


	if (isset($_POST['btn_upload'])) 
	 {
	 	$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="photo/".$filename;


		

		move_uploaded_file($filetmp, $filepath);
	 	//$query="INSERT INTO customers(image) VALUES ('$filename')";
	 	$query="UPDATE `customers` SET `image`=('$filename') WHERE user_id=('$SESSIONID')";
		$result = mysqli_query($conn, $query);

		if($result){
			echo "<html><head><script>alert('Image Added');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";
		}else{
			echo "<html><head><script>alert('Image Failed');</script></head></html>";
		}


	}
  }






		
		

		
	//$dir="upload/";
	//$target = "image/".basename($_FILES['image']['name']);

	//if(!is_dir($dir)) {
	//echo "Create Done";
	//mkdir($dir,"0777",true);

	//$image = $_FILES['image']['image'];

	//$query3="INSERT INTO product_details(product_id, description, size, srp,img)
	//VALUES ('$p_id','$desc','$s','$p','$filename')";

	//$result3 = mysqli_query($con, $query3);
	//echo "<html><head><script>alert('Product Added');</script></head></html>";
	//echo "<meta http-equiv='refresh' content='0; url=myAccount.php'>";


?>