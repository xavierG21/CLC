<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();
if (isset($_POST['submit'])) {
   
    $id       = ($_POST['id']);
	$memid2      = ($_POST['memid2']);
	
	$s_name = ($_POST['s_name']);
    $s_desc       = ($_POST['s_desc']);
	
	$filetmp = $_FILES["file_img"]["tmp_name"];
			$filename= $_FILES["file_img"]["name"];
			$filetype=$_FILES["file_img"]["type"];
			$filepath="../../../photo/".$filename;
			move_uploaded_file($filetmp, $filepath);

	
	
		//STORE SUGGESTION DETAILS, IMAGE 1-4 NOT AFFECTED
		if(!empty($_FILES["file_img"]["name"])) {  
			//echo "0";
			mysqli_query($con, "UPDATE suggestion_details SET name='$s_name',image='$filename',description='$s_desc' WHERE id='$id'");
					echo "<head><script>alert('Product Edited');</script></head></html>";
					echo "<meta http-equiv='refresh' content='0; url=view_suggestion.php?id=".$memid2."'>";
		}else{
			//echo "hi";
			
			mysqli_query($con, "UPDATE suggestion_details SET name='$s_name',description='$s_desc' WHERE id='$id'");
					echo "<head><script>alert('Product Edited');</script></head></html>";
					echo "<meta http-equiv='refresh' content='0; url=view_products.php'>";
			
		} 
		
		
		
	}else{
    echo "<head><script>alert('Profile NOT Updated, Check Again');</script></head></html>";
    //echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";*/
    
		}

	
?>
