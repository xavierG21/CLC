<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();
if (isset($_POST['s_id'])) {
    
    
	
	 $prod_id       = ($_POST['prod_id']);
   
    $s_id       = ($_POST['s_id']);
	
	$s_name = ($_POST['s_name']);
    $s_desc       = ($_POST['s_desc']);
	
	$s_name2 = ($_POST['s_name2']);
    $s_desc2       = ($_POST['s_desc2']);
	
	$s_name3 = ($_POST['s_name3']);
    $s_desc3      = ($_POST['s_desc3']);
	
	$s_name4 = ($_POST['s_name4']);
    $s_desc4       = ($_POST['s_desc4']);
	
	
   
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
		

		
		if (empty($_FILES["file_img"]["name"])) {
			//echo "Insert info only";
			mysqli_query($con, "UPDATE suggestion SET name='$s_name', name2='$s_name2', name3='$s_name3', name4='$s_name4',
				description='$s_desc',description2='$s_desc2',description3='$s_desc3',description4='$s_desc4' WHERE id='$s_id'");
			echo "<head><script>alert('Product Edited');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=view_suggestion.php?id=".$prod_id."'>";
			
		}else{
			//echo "Insert all";
			mysqli_query($con, "UPDATE suggestion SET name='$s_name', name2='$s_name2', name3='$s_name3', name4='$s_name4',
				description='$s_desc',description2='$s_desc2',description3='$s_desc3',description4='$s_desc4',
				image='$filename',image2='$filename2',image3='$filename3',image4='$filename4' WHERE id='$s_id'");
			echo "<head><script>alert('Product Edited');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=view_suggestion.php?id=".$prod_id."'>";
			
		    
    	}
    
				
    /*echo "<head><script>alert('Product Edited');</script></head></html>";
	echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";
	//echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";*/
	}else{
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";
    
}
?>
