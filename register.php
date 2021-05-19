<?php
session_start();
if(isset($_SESSION['username'])) {
   header("Location:index.php");
   exit;
}

?>

<!doctype html>
<!--[if IE 9 ]><html class='ie9' lang='en'><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang='en'><!--<![endif]-->
	<head>
		<title>Buhat An Online Ordering System</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
		<!--meta info-->
		<meta name='author' content=''>
		<meta name='keywords' content=''>
		<meta name='description' content=''>
		<link rel='icon' type='image/ico' href='images/clc_logo.png'>
		<!--stylesheet include-->
		<link rel='stylesheet' type='text/css' media='all' href='css/bootstrap.min.css'>
			<link rel='stylesheet' type='text/css' media='all' href='css/bootstrap2.min.css'>
		<link rel='stylesheet' type='text/css' media='all' href='css/camera.css'>
		<link rel='stylesheet' type='text/css' media='all' href='css/owl.carousel.css'>
		<link rel='stylesheet' type='text/css' media='all' href='css/owl.transitions.css'>
		<link rel='stylesheet' type='text/css' media='all' href='css/jquery.custom-scrollbar.css'>
		<link rel='stylesheet' type='text/css' media='all' href='css/style.css'>
		<!--font include-->
		<link href='css/font-awesome.min.css' rel='stylesheet'>
	</head>
	<body>
	<div class='wide_layout relative'>
		<!--boxed layout-->
			<?php include('header.php'); ?>	
				<!--main menu container-->
				<!--main menu container-->
				<section class='menu_wrap relative'>
					<div class='container clearfix'>
						<!--button for responsive menu-->
						<button id='menu_button' class='r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10'>
							<span class='centered_db r_corners'></span>
							<span class='centered_db r_corners'></span>
							<span class='centered_db r_corners'></span>
						</button>
						<!--main menu-->
						<nav role='navigation' class='f_left f_xs_none d_xs_none'>	
							<ul class='horizontal_list main_menu clearfix'>
									
								
								<?php include('menu.php'); ?>
			<!--slider-->
			
		<!--content-->
			<div class='row'> <br>
				<div class='col-md-6 col-md-offset-3' style='border:1px solid darkgrey;border-radius: 15px;box-shadow:6px 6px 5px'>
					<br>
					<h2 class='tt_uppercase m_bottom_20 color_dark heading1' align='center'>Register</h2>
					<section>
					
				<form method='POST' action='insert_user.php'>
					<div class='col-md-10 col-md-offset-1'>

												
						<div class='control-group'>
					      <!-- First Name -->
					      <label class='control-label'  for='firstname'>First Name</label>
					      <div class='controls'>
					        <input type='text' name='fname' id='fname' class='form-control' >
					      </div>
					    </div>

					    <br>

					    <div class='control-group'>
					      <!-- Last Name -->
					      <label class='control-label'  for='lastname'>Last Name</label>
					      <div class='controls'>
					        <input type='text' name='lname' id='lname' class='form-control'>
					      </div>
					    </div>

					    <br>

					    <div class='control-group'>
					      <!-- User Name -->
					      <label class='control-label'  for='username'>User Name</label>
					      <div class='controls'>
					        <input type='text' name='username' id='username' class='form-control' pattern="[^'^$& @#*=.,/:;!?\x22]+" title="Must not contain a space or special characters" >
					        <p class='help-block scheme_color'><em>Username can contain any letters or numbers, without spaces</em></p>
					      </div>
					    </div>



					    <div class='control-group'>
					      <!-- Password -->
					      <label class='control-label'  for='password'>Password</label>
					      <div class='controls'>
					        <input type='password' name='password' id='password' class='form-control' pattern=".{6,}"   required title="6 characters minimum">
					        <p class='help-block scheme_color'><em>Password should be at least 6 characters</em></p>
					      </div>
					    </div>

					     <div class='control-group'>
					      <!-- Confirm Password -->
					      <label class='control-label'  for='Confirmpassword'>Confirm Password</label>
					      <div class='controls'>
					        <input type='password' name='confirmPassword' id='confirmPassword' class='form-control' pattern=".{6,}"   required title="6 characters minimum">
					      </div>
					    </div>

					    <br>
					     <div class='control-group'>
					      <!-- Email -->
					      <label class='control-label'  for='email'>Email Address</label>
					      <div class='controls'>
					        	<input type='email' name='email' id='email' class='form-control'>
					      </div>
					    </div>
					    <br>
					    <div class='control-group'>
					      <!-- Address -->
					      <label class='control-label'  for='address'>Current Address</label>
					      <div class='controls'>
					        	<input type='text' name='address' id='address' class='form-control' placeholder="Ex: #123 - Magallanes Street, Cebu City">
					        	<p class='help-block scheme_color'><em>Please state your current address including street number.</em></p>
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Contact -->
					      <label class='control-label'  for='contact'>Contact Number</label>
					      <div class='controls'>
					        	<input type='text' name='contact_no' id='username' placeholder='Ex: 0912345678 or 2374312' class='form-control' maxlength="11" pattern="(?=.*\d).{8,}" title='Must enter a number'>
					        	<p class='help-block scheme_color'>Cellphone/Telephone</p>
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Terms and Condition -->
					     
					      <div class='controls'>
							<input type='checkbox' class='d_none' id='checkbox_10'><label for='checkbox_10'>Accept <a href='terms_conditions.php'>Terms & Conditions</a></label>
					        	
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Button -->
					      <div class='controls'>
					        <button class='button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15' name='submit'>Register</button>
					        <br><br><br>
					      </div>
					    </div>




					</div>
					
					
				</form>
				</section>

					
				</div> 
			</div>
			<br>
					
					
							<!--testimonials carousel-->
							 
							
			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
		</div>
		<!--social widgets-->
	
		
		<!--custom popup-->
		



		
		<!--scripts include-->
		<script src='js/jquery-2.1.0.min.js'></script>
		<script src='js/jquery-migrate-1.2.1.min.js'></script>
		<script src='js/retina.js'></script>
		<script src='js/camera.min.js'></script>
		<script src='js/jquery.easing.1.3.js'></script>
		<script src='js/waypoints.min.js'></script>
		<script src='js/jquery.isotope.min.js'></script>
		<script src='js/owl.carousel.min.js'></script>
		<script src='js/jquery.tweet.min.js'></script>
		<script src='js/jquery.custom-scrollbar.js'></script>
		<script src='js/scripts.js'></script>
			<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c'></script>
	</body>
</html>

