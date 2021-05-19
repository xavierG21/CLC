<?php 
require('db_conn.php');

	$query = "select COUNT(*) from orders WHERE status = 'Approve' AND method ='delivery'";
	$result = mysqli_query($con, $query);
	if (mysqli_affected_rows($con) != 0) {
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo "<span class='badge badge-secondary'>".$row['COUNT(*)']."</span>";
		}
	}else{
		echo "0";
	}

?>