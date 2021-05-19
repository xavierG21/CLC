<?php 
session_start();
require("db_conn.php");

if(isset($_POST['name'])){

     	function getRandomWord2($len = 6)
							{
							    $word = array_merge(range('A', 'Z'));
							    shuffle($word);
							    return substr(implode($word), 0, $len);
							}
			$oN = getRandomWord2();
			$day = date("Y-m-d");
			$s   = "In Process";
			$cID = $_SESSION['sess_id'];
			$method = "Palwan";

			$query="INSERT INTO orders (orderNumber,orderDate,shippedDate,status,customerID,method)
											VALUES ('$oN','$day','$day','$s','$cID','$method')";
			$result = mysqli_query($con, $query);					
			echo "<head><script>alert('Great!');</script></head></html>";
     }else{
     	echo "<head><script>alert('NOT Great!');</script></head></html>";

     }

?> 