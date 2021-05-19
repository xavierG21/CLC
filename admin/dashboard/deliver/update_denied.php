<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();
//$id = ($_POST['name']);
$ordNum = ($_POST['name']);
$comment = "Denied";
if (isset($_POST['name'])) 
	 {
    //$submit =($_POST['submit']);
    //if($submit == 'Yes'){
	//echo "Nice ka!";
       
           //$date      = $_POST['date'];
            
            $update = "Denied";
            $day = date("Y-m-d");
    
            mysqli_query($con, "UPDATE orders SET shippedDate='$day',status='$update',admin_comment='$comment' WHERE orderNumber='$ordNum'");
            echo "<head><script>alert('Successfully Denied.');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=view_delivery.php'>"; 
         
		//}else if($submit == 'No'){
		//echo "AYAW!";
			//$update2 = "Denied";
//$day2 = date("Y-m-d");
			//mysqli_query($con, "UPDATE orders SET shippedDate='$day2',status='$update2' WHERE orderNumber='$id'");
            //echo "<head><script>alert('Successfully Delivered. Please contact delivery personnel.');</script></head></html>";
            //echo "<meta http-equiv='refresh' content='0; url=view_delivery.php'>"; 
			
      //echo "<head><script>alert('Product not Denied');</script></head></html>";
      //echo "<meta http-equiv='refresh' content='0; url=view_delivery.php'>";
       
    
}


?>
