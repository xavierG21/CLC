<?php
require("db_conn.php");
if (isset($_POST['p_id'])) {
//product_cat
$p_id = ($_POST['p_id']);

 $query = "SELECT * FROM products WHERE id = '".$p_id."'";
 $res = mysqli_query($con, $query);

 while ($row = mysqli_fetch_assoc($res)){
 	$db_image1  = $row['color_one'];
 	$db_image2  = $row['color_two'];
 	$db_image3  = $row['color_three'];
 }

$filetmp2 = $_FILES["file_img2"]["tmp_name"];
		$filename2= $_FILES["file_img2"]["name"];
		$filetype2=$_FILES["file_img2"]["type"];
		$filepath2="../../../photo/".$filename2;
		move_uploaded_file($filetmp2, $filepath2);
		
$filetmp3 = $_FILES["file_img3"]["tmp_name"];
		$filename3= $_FILES["file_img3"]["name"];
		$filetype3=$_FILES["file_img3"]["type"];
		$filepath3="../../../photo/".$filename3;
		move_uploaded_file($filetmp3, $filepath3);
		

$filetmp4 = $_FILES["file_img4"]["tmp_name"];
		$filename4= $_FILES["file_img4"]["name"];
		$filetype4=$_FILES["file_img4"]["type"];
		$filepath4="../../../photo/".$filename4;
		move_uploaded_file($filetmp4, $filepath4);
						
								
if(empty($_FILES["file_img2"]["name"]) && empty($_FILES["file_img3"]["name"]) && empty($_FILES["file_img4"]["name"])){
	echo "wlay update";
	/*mysqli_query($con, "UPDATE products SET color_one='$filename2',color_two='$filename3', color_three='$filename4' WHERE id='$p_id'");
	echo "<head><script>alert('Image Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_product_image.php?id=".$p_id."'>";*/
	

}else if(!empty($_FILES["file_img2"]["name"]) && !empty($_FILES["file_img3"]["name"]) && !empty($_FILES["file_img4"]["name"])){
	//echo "all update";
	mysqli_query($con, "UPDATE products SET color_one='$filename2',color_two='$filename3', color_three='$filename4' WHERE id='$p_id'");
	echo "<head><script>alert('Image Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_product_image.php?id=".$p_id."'>";
}else if(!empty($_FILES["file_img2"]["name"]) && empty($_FILES["file_img3"]["name"]) && empty($_FILES["file_img4"]["name"])){
	//echo "1";
	mysqli_query($con, "UPDATE products SET color_one='$filename2' WHERE id='$p_id'");
	echo "<head><script>alert('Image Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_product_image.php?id=".$p_id."'>";
}else if(empty($_FILES["file_img2"]["name"]) && !empty($_FILES["file_img3"]["name"]) && empty($_FILES["file_img4"]["name"])){
	//echo "2";
	mysqli_query($con, "UPDATE products SET color_two='$filename3' WHERE id='$p_id'");
	echo "<head><script>alert('Image Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_product_image.php?id=".$p_id."'>";
}else if(empty($_FILES["file_img2"]["name"]) && empty($_FILES["file_img3"]["name"]) && !empty($_FILES["file_img4"]["name"])){
	//echo "3";
	mysqli_query($con, "UPDATE products SET color_three='$filename4' WHERE id='$p_id'");
	echo "<head><script>alert('Image Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_product_image.php?id=".$p_id."'>";
}

	 	

		

} else {
    //echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    //echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";
    
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
	//echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";

	
?>