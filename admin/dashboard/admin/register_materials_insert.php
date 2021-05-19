<?php
require("db_conn.php");
var_dump($_POST);

//product_cat
//$p_code = ($_POST['p_code']);
//$b_name = ($_POST['b_name']);

//products
//$c_code = ($_POST['c_code']);
//$c_name = ($_POST['c_name']);

//pro_data
$s_id= ($_POST['s_id']);

$m_name= ($_POST['m_name']);

//$desc = ($_POST['s_desc']);
//$s = ($_POST['size']);
//$p= ($_POST['p_price']);




$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="../../../photo/".$filename;


		

		move_uploaded_file($filetmp, $filepath);

	if (isset($_POST['btn_upload'])) 
	 {

	 	

$query4="INSERT INTO suggestion_material(name,image,suggestion_id)
VALUES ('$m_name','$filename','$s_id')";
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