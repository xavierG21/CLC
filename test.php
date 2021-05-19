<?php
sleep(2); //To load the page after 2 seconds.

//if($_POST['username'] == ""){
//	echo "<h1>NO NAME GIVEN</h1>";
//}else{
//	echo "<p><em>Hello {$_POST['username']}, nice to meet you!";
//}
require("db_connect.php");


$query = "SELECT * FROM products WHERE product_name LIKE '%{$_POST['term']}%'";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
echo "<table border='1' width ='100%'>";
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	//echo "<td>{$row['product_code']}</td>";
	//echo "<td>{$row['product_name']}</td>";
	//echo "<td>{$row['price']}</td>";
	$msgid = $row['id'];
	echo "</tr>";
	echo "<meta http-equiv='refresh' content='0; url=product_detail.php?id=$msgid'>";
}
echo "</table>";

}else{
	echo "Sorry no product found";
}
?>

<!--<html>
<body>
<h1>Hello World!</h1>
</body>
</html>-->