<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();
if (isset($_POST['p_code'])) {
    
    
	

   // $date      = $_POST['date'];
    $p_code       = ($_POST['p_code']);

    $query = "SELECT * FROM products WHERE product_code = '".$p_code."'";
    $res = mysqli_query($con, $query);

	$row = mysqli_fetch_assoc($res);

	
	if(isset($_POST['submit']))
 	{
 		$p_name = ($_POST['p_name']);
   		$p_desc       = ($_POST['p_desc']);
		$p_price	   = $_POST['p_price'];
		$quan	   = $_POST['p_quan']; 

		$filetmp = $_FILES["file_img"]["tmp_name"];
		$filename= $_FILES["file_img"]["name"];
		$filetype=$_FILES["file_img"]["type"];
		$filepath="../../../photo/".$filename;

		

		if($filetmp){
			move_uploaded_file($filetmp, $filepath);

			mysqli_query($con, "UPDATE products SET product_code='$p_code',product_name='$p_name', product_desc='$p_desc',product_img_name='$filename', price='$p_price', quantity='$quan' WHERE product_code='$p_code'");
    		echo "<head><script>alert('Product Updated!');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";
	
		}else{ //IF WALAY SULOD ANG IMAGE, ANG OLD IMAGE IYA MA STORE TOGETHER WITH THE OTHER DATA!!!
			//if no image selected the old image remain it is..
			$prod_pic = $row['product_img_name']; //old image from database
			mysqli_query($con, "UPDATE products SET product_code='$p_code',product_name='$p_name', product_desc='$p_desc',product_img_name='$prod_pic', price='$p_price', quantity='$quan' WHERE product_code='$p_code'");
    		echo "<head><script>alert('Product Updated!');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";

		}

 	}
	
	
   
    
		

    
    //echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";
} else {
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";
    
}
?>
