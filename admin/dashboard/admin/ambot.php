<form action='register_suggestion.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Add Suggestion' class='btn btn-success'/></form><br>


$query = mysqli_query($conn, "SELECT * FROM suggestion WHERE product_id='".$pid."'");

		$numrows = mysqli_num_rows($query);
		if($numrows !=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$db_name = $row['name'];
				$db_name2 = $row['name2'];
				$db_name3 = $row['name3'];
				$db_name4 = $row['name4'];
			}

			if($db_name != NULL){
				$query1="INSERT INTO suggestion(name,description,image,product_id)
				VALUES ('$s_name','$desc','$filename','$p_id')";
				$result1 = mysqli_query($con, $query1);
			}else if($db_name2 != NULL){
				$query2="INSERT INTO suggestion(name2,description2,image2,product_id)
				VALUES ('$s_name','$desc','$filename','$p_id')";
				$result2 = mysqli_query($con, $query2);

			}else if($db_name3 != NULL){
				$query3="INSERT INTO suggestion(name3,description3,image3,product_id)
				VALUES ('$s_name','$desc','$filename','$p_id')";
				$result3 = mysqli_query($con, $query3);
			}else if($db_name4 != NULL){
				$query3="INSERT INTO suggestion(name3,description3,image3,product_id)
				VALUES ('$s_name','$desc','$filename','$p_id')";
				$result3 = mysqli_query($con, $query3);
			}
		}