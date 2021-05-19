<?php
sleep(2);
 require_once 'db_conn.php';


  if (isset($_REQUEST['id'])) {
   
	 $code = ($_REQUEST['id']);
	 $query = "SELECT * FROM payments WHERE code='$code'";
	 $results = mysqli_query($con,$query);

	 $numrows = mysqli_num_rows($results);
	if($numrows !=0){
	 	echo "<h4>Code matched</h4>";
	 }else{
	 	echo "<h4>Code did not matched</h4>";
	 }
}





?>