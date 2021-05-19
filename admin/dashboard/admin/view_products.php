<?php
require 'db_conn.php';
page_protect();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Buhat An Online Ordering System</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content=''>
		<meta name="keywords" content=''>
		<meta name="description" content=''>
		<link rel="icon" type="image/ico" href="../../../images/clc_logo.png">
		
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">

    	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>

    <script src="../../neon/js/jquery-1.10.2.min.js"></script>

	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>


    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city").html(html);
		} 
		});

		});
		});
		    </script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		$(".country1").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city1").html(html);
		} 
		});

		});
		});
    </script>


    <SCRIPT LANGUAGE="JavaScript">
		function checkIt(evt) {
		    evt = (evt) ? evt : window.event
		    var charCode = (evt.which) ? evt.which : evt.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		        status = "This field accepts numbers only."
		        return false
		    }
		    status = ""
		    return true
		}
	</SCRIPT>

	<script type="text/javascript" src="webcam.js"></script>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../img/Central.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>All Product</h3>

		<hr />
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					
					
					<th>Primary Image</th>
					<th>Product Code</th>
					<th>Product Name</th>
					<th>Description</th>
					<th>Quantity</th>
					<th>Price</th>
				
		
					<th>Action</th>
				</tr>
			</thead>
				<tbody>

						<?php
							$query="SELECT * from products";
							//$result = mysqli_query($con, $query);
							
							//$query  = "SELECT * from products p inner join product_details pd on p.product_id = pd.product_id ";
							//echo $query;
							$result = mysqli_query($con, $query);
									
									//if (mysqli_affected_rows($con) != 0) {
							           // while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							               // $mem_code   = $row['member_code'];
											//$query1  = "select * from subscription WHERE member_code='$mem_code'";
											//$result1 = mysqli_query($con, $query1);
							        //if (mysqli_affected_rows($con) == 0) {
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
											
											echo "<td align='center'><img src='../../../photo/".$row['product_img_name']."'  alt='' height='100px' width='100px'></td>";
											echo "<td>" . $row['product_code'] .  "</td>";
											echo "<td>" . $row['product_name'] .  "</td>";
											echo "<td>" . $row['product_desc'] .  "</td>";
											
											//IF PRODUCT IS OUT OF STOCK STATEMENT//
											if ( $row['quantity'] <= 0){
												echo "<td><b>" . $row['quantity'] .  "<b>
												<br><font color='red'><em>Out of Stock</em></font></td>";
										
											}else{
												echo "<td>" . $row['quantity'] .  "</td>";
											}
											echo "<td align='right'><font color='red'>Php " . $row['price'] .  "</font></td>";
											
											$msgid = $row['id'] ;
										
											$query2="SELECT * from suggestion WHERE product_id = '$msgid'";
											$result2 = mysqli_query($con, $query2);
											 while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
												$msgid2 = $row2['product_id'] ;
											 }
											//$msgid1 = $row['product_id'] ;
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                //echo "<td>
											//<form action='edit_reg.php?pid=".$row['member_code']."' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Edit' class='btn btn-warning'/>
											//</form><form action='del_member.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete ' class='btn btn-danger'/></form></td></tr>";

											/*<form action='register_product_delete.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete ' class='btn btn-danger'/></form>*/
												
											
							                 echo "<td align='center'>
							                 <h4><em>Update</em></h4>
											 
							                 <form action='register_product_edit.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/>
											 <input type='submit' value='Edit Product' class='btn btn-success'/></form><br>";

											if($msgid == $msgid2){
											echo " <form action='register_suggestion2.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/>
											 <input type='submit' value='Add Suggestion Details' class='btn btn-success'/></form><br>  ";
											}else{
											echo "
											
											<form action='register_suggestion.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/>
											 <input type='submit' value='Add Suggestion id ' class='btn btn-success'/></form><br>";
											}

							                 
											 echo "
							                  <h4><em>View</em></h4>
							                  <div>
							                  <a href='view_suggestion.php?id=".$msgid."' class='btn btn-info' >View Suggestion</a></div>
							              	 <br>

							              	 


							              						                 
							              	 <a href='view_product_image.php?id=".$msgid."' class='btn btn-info' >View Image Product</a></div>

							               

											 </td></tr>";
							                
											}
							            //}
									//}
								//}
							
						?>									
					</tbody>
				</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$("#table-1").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>

			<?php include('footer.php'); ?>
    	</div>

     <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>

	<link rel="stylesheet" href="../../neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="../../neon/js/select2/select2.css"  id="style-resource-2">

	<script src="../../neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
	<script src="../../neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
	<script src="../../neon/js/select2/select2.min.js" id="script-resource-9"></script>

        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    </body>
</html>





