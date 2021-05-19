<?php
require("db_conn.php");
//var_dump($_POST);

//product_cat
$p_code = ($_POST['p_code']);
//$b_name = ($_POST['b_name']);

//products
//$c_code = ($_POST['c_code']);
//$c_name = ($_POST['c_name']);

//pro_data
//$p_id= ($_POST['p_id']);

$p_name= ($_POST['p_name']);
$desc = ($_POST['p_desc']);
//$s = ($_POST['size']);
$p= ($_POST['p_price']);
$q= ($_POST['p_quan']);




$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="../../../photo/".$filename;

		move_uploaded_file($filetmp, $filepath);

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
								

	if (isset($_POST['btn_upload'])) 
	 {

	 	

$query4="INSERT INTO products(product_code,product_name,product_desc,product_img_name,color_one,color_two,color_three,price,quantity)
VALUES ('$p_code','$p_name','$desc','$filename','$filename2','$filename3','$filename4','$p','$q')";
$result4 = mysqli_query($con, $query4);


		
		

		
	//$dir="upload/";
	//$target = "image/".basename($_FILES['image']['name']);

	//if(!is_dir($dir)) {
	//echo "Create Done";
	//mkdir($dir,"0777",true);

	//$image = $_FILES['image']['image'];

	//$query3="INSERT INTO product_details(product_id, description, size, srp,img)
	//VALUES ('$p_id','$desc','$s','$p','$filename')";

	//$result3 = mysqli_query($con, $query3);
	echo "<html><head><script>alert('Product Added');</script></head></html>";
	echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";

	}
?>