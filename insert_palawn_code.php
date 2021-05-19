<?php
	session_start();
	include_once("config.php");
	require("db_conn.php");
	//var_dump($_POST);

	//$forfinalcode = '';
	$customerID =$_SESSION['sess_id'];
	$pdate=  date("Y-m-d");
	$amt= $_SESSION['grand_total'];
	$mode = 'Palawan';
	$ordNum = '';
	
$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="photo/".$filename;

		move_uploaded_file($filetmp, $filepath);
		
		

		if (isset($_POST['btn_upload'])) 
		{
		$ordNum = $_SESSION['orderNumber'];
		$forfinalcode= ($_FILES["file_img"]["name"]);
		$sql_o = "SELECT * FROM payments WHERE orderNumber='$ordNum'";
		$res_o = mysqli_query($con, $sql_o);
		$sql_c = "SELECT * FROM payments WHERE code='$forfinalcode'";
		$res_c = mysqli_query($con, $sql_c);
			if (mysqli_num_rows($res_o) > 0) {
				echo "<html><head><script>alert('You only enter code once. Please wait for approval');</script></head></html>";
				echo "<meta http-equiv='refresh' content='0; url=myOrder.php'>";
			}else if(mysqli_num_rows($res_c) > 0){
				echo "<html><head><script>alert('Code already exist');</script></head></html>";
				echo "<meta http-equiv='refresh' content='0; url=myOrder.php'>";	 	
		//$forfinalcode=$_POST['for_code'];
		//if(isset($_SESSION['sess_id']))
		//$search_code = mysqli_query($con, "SELECT * FROM payments WHERE code= NOT NULL");
	    //$numrows = mysqli_num_rows($search_code);
		
			}else{
			$query4= "INSERT INTO payments (user_id,paymentDate,amount,code,orderNumber) VALUES
							 ('$customerID','$pdate','$amt','$filename','$ordNum')";
			$result4 = mysqli_query($con, $query4);
			echo "<html><head><script>alert('Thank You Customer! Palawan Code Added');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=myOrder.php'>";
		}
		}else{
			echo "kuwang";
			//echo "<html><head><script>alert('You already added Palawan Code. Please wait for confirmation');</script></head></html>";
			//echo "<meta http-equiv='refresh' content='0; url=myOrder.php'>";
		}

?>