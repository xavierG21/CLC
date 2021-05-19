<?php
include 'db_conn.php';


$msgid = $_POST['name'];
if (strlen($msgid) > 0) {
  
	mysqli_query($con, "DELETE FROM registration WHERE member_code='$msgid'");
	mysqli_query($con, "DELETE FROM subscription WHERE member_code='$msgid'");
    echo "<html><head><script>alert('Member Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
	echo "<meta http-equiv='refresh' content='0; url=view_mem.php'>";
}
mysqli_close($con);

?>