<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();

if(isset($_POST['submit'])){
    $submit =($_POST['submit']);
    if($submit == 'Yes'){
	//echo "Nice ka!";
        if (isset($_POST['name']) ) {
           //$date      = $_POST['date'];
            $id       = ($_POST['name']);
            $update = "Delivered";
            $day = date("Y-m-d");
    
            mysqli_query($con, "UPDATE orders SET shippedDate='$day',status='$update' WHERE orderNumber='$id'");
            echo "<head><script>alert('Successfully Delivered. Please contact delivery personnel.');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=view_delivery.php'>"; 
        } 
    }else if($submit == 'No'){
		//echo "AYAW!";
      echo "<head><script>alert('Product not delivered');</script></head></html>";
      echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";
       
    }
}


?>
