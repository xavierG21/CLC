<?php
require 'db_conn.php';
var_dump($_POST);

    
	$p_id = ($_POST['p_id']);
    $name    = ($_POST['p_name']);
    $date    = ($_POST['date']);
	
	
	$i    = ($_POST['inst']);
	date_default_timezone_set("Asia/Manila");
    $time = date("h:i a");
    
	
	
    $query3="INSERT INTO login_data (customer_id,instructor_id,date,timein)
VALUES ('$p_id','$i','$date','$time')";
	$result = mysqli_query($con, $query3);
    if($result){

 	echo "<meta http-equiv='refresh' content='0; url=table_reg.php'>";
 	
 }else{
 	echo "<br/><br/>error";
 
 }
?>
