<?php
include 'db_conn.php';


$msgid = $_POST['name'];



//if (mysqli_affected_rows($con) == 1) {
	
if (strlen($msgid) > 0) {
  	
	mysqli_query($con, "DELETE FROM suggestion WHERE id='$msgid'");
	mysqli_query($con, "DELETE FROM suggestion_material WHERE suggestion_id='$msgid'");


   	echo "<html><head><script>alert('Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_suggestion.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
	echo "<meta http-equiv='refresh' content='0; url=view_suggestion.php'>";
}





mysqli_close($con);
?>
 