<?php
require("db_conn.php");
//var_dump($_POST);		

	if (isset($_POST['btn_upload'])) 
	 {
		 $p_id = ($_POST['p_id']);
		 
	$query2="SELECT * from suggestion WHERE product_id = '$p_id'";
			$result2 = mysqli_query($con, $query2);
			while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
			$s_id = $row2['id'] ;
			}

$s_name= ($_POST['s_name']);
$desc = ($_POST['s_desc']);

$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="../../../photo/".$filename;
		move_uploaded_file($filetmp, $filepath);

		$query4="INSERT INTO suggestion_details(name,image,description,suggestion_id)
		VALUES ('$s_name','$filename','$desc','$s_id')";
		$result4 = mysqli_query($con, $query4);
		
		/*$query5="INSERT INTO suggestion(name,description,image,product_id)
		VALUES ('$s_name2','$desc2','$filename2','$p_id')";
		$result5 = mysqli_query($con, $query5);
		
		$query6="INSERT INTO suggestion(name,description,image,product_id)
		VALUES ('$s_name3','$desc4','$filename4','$p_id')";
		$result6 = mysqli_query($con, $query6);
		
		$query7="INSERT INTO suggestion(name,description,image,product_id)
		VALUES ('$s_name4','$desc4','$filename4','$p_id')";
		$result7 = mysqli_query($con, $query7);*/

		echo "<html><head><script>alert('Suggestion Added');</script></head></html>";
		echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";

	}
?>