	<h2 class="tt_uppercase color_dark m_bottom_25">Related Suggestion Features</h2>
<?php


$query="SELECT * from suggestion where product_id = $id ";							
							$result = mysqli_query($con, $query);
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$s_id = $row['id'] ;
							}
if(isset($s_id)){
	$query2="SELECT * from suggestion_details where suggestion_id = '$s_id'";							
										$result2 = mysqli_query($con, $query2);
							            while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
										{
											echo '
											<form action="suggestion_content.php" method="post" class="col-lg-3 col-md-3 col-sm-3">
											<input type="hidden" name="name" value="' . $row2['name']  . '" />
											<input type="hidden" name="name2" value="' . $row2['description']  . '" />
											<input type="hidden" name="name3" value="' .$row2['image']  . '" />
											<input type="image" src="photo/' . $row2['image']  . '" style="width:200px;height:200px" class="btn"/>
											<p>'. $row2['name']  .'</p>
		</form>
											';
										}	
	
//fetch results set as object and output HTML
			

}else{
	echo "<div>
	
		<div>
		<h2>Have a question? Click <a href='contactus.php'>here</a></h2>
		";
}
?>

	</div>
</div>
