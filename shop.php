<?php
 	session_start();
	require("db_conn.php");
	require("config.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Shop</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content=''>
		<meta name="keywords" content=''>
		<meta name="description" content=''>
		<link rel="icon" type="image/ico" href="images/clc_logo.png">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap2.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">


	</head>
	<body>
		<div class="wide_layout relative">
			<!--boxed layout-->
				<?php include('header.php'); ?>	
					<!--main menu container-->
					<section class="menu_wrap relative">
						<div class="container clearfix">
							<!--button for responsive menu-->
							<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none">	
							<ul class="horizontal_list main_menu clearfix">
									
								<?php include('menu.php'); ?>	
						
		<!--content-->	
		<div class="clearfix">
			<div class='row'><br><br>
				<h2 class='tt_uppercase m_bottom_20 color_dark heading1 animate_ftr' align="center" style="font-size: 3em">All Branches in Cebu</h2>
				<div class="col-md-10 col-md-offset-1" align="center">

							<h2 class="tt_uppercase color_dark m_bottom_25" align="left">268 Magallanes Street, Cebu City</h2>
							<div class="r_corners photoframe map_container shadow m_bottom_45">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15702.427768310812!2d123.8960878!3d10.2932198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x873d8992a582217!2sCentral+Lumber+Corporation!5e0!3m2!1sen!2sph!4v1517965179900" 
									width="200" height="200" frameborder="0"></iframe>
							</div>
							
				</div>
				<div class="col-md-10 col-md-offset-1" align="center">
					<h2 class="tt_uppercase color_dark m_bottom_25" align="left">Rizal Avenue Ext., Cebu City</h2>
							<div class="r_corners photoframe map_container shadow m_bottom_45">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.861887069645!2d123.86346822569116!3d10.272710340208224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99c6ac001060d%3A0x2bae66a308c4047e!2sCentral+Lumber+Corporation!5e0!3m2!1sen!2sph!4v1517613666429" 
									width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
				</div>
				<div class="col-md-10 col-md-offset-1" align="center">
					<h2 class="tt_uppercase color_dark m_bottom_25" align="left">Tipolo, Lopez Jaena Street, Mandaue City, Cebu</h2>
							<div class="r_corners photoframe map_container shadow m_bottom_45">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.189174508583!2d123.9261580141796!3d10.32674067015788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99907344d87b3%3A0xcbd34109ee096ce8!2sCentral+Lumber+Corporation!5e0!3m2!1sen!2sph!4v1517613890694" 
									width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
				</div>

			</div>
		</div>

		<!--END content-->			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
</div>
		<!--social widgets-->
		<?php include('social_widgets.php'); ?>	
		
		<!--custom popup-->
		

		<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/camera.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
</body>
</html>