<?php
 	session_start();
	require("db_conn.php");
	require("config.php");

//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "jefsingco2018@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "$email" , $email);
  
  //Email response
  echo "<script language=\"JavaScript\">\n";
  echo "alert('Thank you for contacting us!');\n";
  echo "window.location='./contactus.php'";
  echo "</script>";

  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<!DOCTYPE HTML>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/clc_logo.png">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;wideth:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<header role="banner">
				<!--header top part-->
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
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_25">Contacts</h2>
							<div class="r_corners photoframe map_container shadow m_bottom_45">
								<iframe class="r_corners full_width" id="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31404.85027078655!2d123.8961208!3d10.2932727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x873d8992a582217!2sCentral+Lumber+Corporation!5e0!3m2!1sen!2sph!4v1515995665674" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="row clearfix">
								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<h2 class="tt_uppercase color_dark m_bottom_25">Contact Info</h2>
									<ul class="c_info_list">
										<li class="m_bottom_10">
											<div class="clearfix m_bottom_15">
												<i class="fa fa-map-marker f_left color_dark"></i>
												<p class="contact_e">268 Magallanes St,<br> Cebu City, 6000 Cebu.</p>
											</div>
										</li>
										<li class="m_bottom_10">
											<div class="clearfix m_bottom_10">
												<i class="fa fa-phone f_left color_dark"></i>
												<p class="contact_e">(032) 253 2622 <br> (032) 418-4566</p>
											</div>
										</li>
										<li class="m_bottom_10">
											<div class="clearfix m_bottom_10">
												<i class="fa fa-envelope f_left color_dark"></i>
												<a class="contact_e default_t_color" href="mailto:#">jefsingco2018@gmail.com</a>
											</div>
										</li>
										<li>
											<div class="clearfix">
												<i class="fa fa-clock-o f_left color_dark"></i>
												<p class="contact_e">Monday-Saturday: 08:00 AM-05:00 PM <br> Sunday: Closed</p>
											</div>
										</li>
									</ul>
								</div>
								<form method="post">
								<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
									<h2 class="tt_uppercase color_dark m_bottom_25">Contact Form</h2>
									<p class="m_bottom_10">Send an email. All fields with an <span class="scheme_color">*</span> are required.</p>
									<form id="contactform">
										<ul>
											<li class="clearfix m_bottom_15">
												
												<div class="f_left half_column">
													<label for="cf_email" class="required d_inline_b m_bottom_5">Email</label>
													<input type="email" id="cf_email" name="email" class="full_width r_corners" required>
												</div>
											</li>
											<li class="m_bottom_15">
												<label for="cf_subject" class="d_inline_b m_bottom_5">Your Name</label>
												<input type="text" id="cf_subject" name="subject" class="full_width r_corners" required>
											</li>
											<li class="m_bottom_15">
												<label for="cf_message" class="d_inline_b m_bottom_5 required">Message</label>
												<textarea id="cf_message" name="comment" class="full_width r_corners" required></textarea>
											</li>
											<li>
												<button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">Send</button>
											</li>
										</ul>
									</form>
								</div>
								</form>
							</div>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Sponsors</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="https://www.armourwood.com/" class="f_size_large color_dark d_block relative">
												<b>Armourwood</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<a href="https://www.gardner-ma.gov/" class="f_size_large color_dark d_block relative">
												<b>Gardner</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<a href="https://www.eurotiles.ph/" class="f_size_large color_dark d_block relative">
												<b>Eurotiles</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											
										</li>
									</ul>
								</div>
							</figure>
	
							<!--banner-->
							<div class="d_block r_corners m_bottom_30" style="background-color: white;padding:15px">
								<img src="images/image_map.png" alt="">
								<p align="center">Magallanes Branch</p>
							</div>
							<div class="d_block r_corners m_bottom_30" style="background-color: white;padding:15px">
								<img src="images/rizal.jpg" alt="">
								<p align="center">Rizal Branch</p>
							</div>
							<div class="d_block r_corners m_bottom_30" style="background-color: white;padding:15px">
								<img src="images/mandaue.jpg" alt="">
								<p align="center">Mandaue Branch</p>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
<?php
  }
?>