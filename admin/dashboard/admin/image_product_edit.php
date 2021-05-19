<?php
require 'db_conn.php';
page_protect();

//if (isset($_POST['name'])) {
//    $memid = $_POST['name'];
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
	<style>
		.upload-image-preview img{
			 width:100px;
			 height:100px;
			 border:1px solid red;
			 display:table-cell;
		}
	</style>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
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

		<h3>Change Images</h3>

		<hr />

			<form action="image_product_update.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

				<?php
	    		$prod_id = $_GET['id'];

				    $query  = "SELECT * from products WHERE id='$prod_id'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    //if (mysqli_affected_rows($con) == 1) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				            
							$pd_id = $row['id'];
							$color_1 = $row['color_one'];
							$color_2 = $row['color_two'];
							$color_3 = $row['color_three'];
						
				            
				                      

				       // }
				    }
 

				?>
			
			<div class="form-group" hidden>
				<input type="text" name="p_id" value ='<?php echo $prod_id; ?>' class="form-control"  readonly/>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Color Image 1</label>					
					<div class="col-sm-5">
						<input type="file" name="file_img2" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Image"  maxlength="1000" value="<?php echo $color_1; ?>">
					</div>
					<div class="upload-image-preview" id='image_prev_1'><img src='../../../photo/<?php echo $color_1; ?>' >
					 </div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Color Image 2</label>					
					<div class="col-sm-5">
						<input type="file" name="file_img3" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Image"  maxlength="1000" value="<?php echo $color_2; ?>">
					</div>
					<div class="upload-image-preview" id='image_prev_2'><img src='../../../photo/<?php echo $color_2; ?>' >
					 </div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Color Image 3</label>					
					<div class="col-sm-5">
						<input type="file" name="file_img4" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Image"  maxlength="1000" value="<?php echo $color_3; ?>">
					</div>
					<div class="upload-image-preview" id='image_prev_3'><img src='../../../photo/<?php echo $color_3; ?>' >
					 </div>
			</div>	
				
				
				
				
				                    
				<div class="form-group" align="center">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary" name='submit'>Save</button>	
							<a href='view_product_image.php?id=<?php echo $prod_id; ?>' class="btn btn-danger">Cancel</a>
						</div>
				</div>		

			

			</form>



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
    <script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>

  
</body>
</html>	
<script>
$(document).ready(function() {              
	$("input[name=file_img2]").change(function () {
		if (this.files && this.files[0]) {
			var reader = new FileReader();

			 reader.onload = function (e) {
			var img = $('<img>').attr('src', e.target.result);

			$('#image_prev_1').html(img);
		};

		reader.readAsDataURL(this.files[0]);
		}
	});

	$("input[name=file_img3]").change(function () {
		if (this.files && this.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			var img = $('<img>').attr('src', e.target.result);

			$('#image_prev_2').html(img);
		};

		reader.readAsDataURL(this.files[0]);
		}
	});

	$("input[name=file_img4]").change(function () {
		if (this.files && this.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			var img = $('<img>').attr('src', e.target.result);

			$('#image_prev_3').html(img);
		};

		reader.readAsDataURL(this.files[0]);
		}
	});

 
});
</script>

<?php
//} else {
    
//}
?>