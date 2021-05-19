<?php
 	session_start();
	require("db_conn.php");
	require("config.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Buhat An Online Ordering System</title>
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
			
				
										<div class='container'>
										<div class='row'>

								<div class='col-md-10 col-md-offset-1' style='padding:0;margin:0;width:100%'>
											<!--slider-->
										
								<div class='camera_wrap m_bottom_10 '  style='box-shadow: 10px 10px 5px;'>
									<div data-src='images/Slide1.jpg' data-custom-thumb='images/Slide1.jpg'>
										<div class='camera_caption_1 fadeFromTop t_align_c d_xs_none'>
											<div class='f_size_large color_light tt_uppercase slider_title_3 m_bottom_5'>Introducing</div>
											<hr class='slider_divider d_inline_b m_bottom_5'>
											<div class='color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20'><b>Attractive &amp; Elegant<br>Raw Material Products</b></div>
											<div class='color_light slider_title_2 m_bottom_45'>$<b>15.00</b></div>
											<a href='#' role='button' class='tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase'>Buy Now</a>
										</div>
									</div>
					    			<div data-src='images/Slide2.jpg' data-custom-thumb='images/Slide2.jpg' >
					    				<div class='camera_caption_2 fadeIn t_align_c d_xs_none'>
											<div class='f_size_large tt_uppercase slider_title_3 scheme_color'>Raw Matterials</div>
											<hr class='slider_divider type_2 m_bottom_5 d_inline_b'>
											<div class='color_light slider_title tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20'><b><span class='scheme_color'>Available Here</span><br><span class='color_dark'>Ready-To-Deliver</span></b></div>
											<a href='#' role='button' class='d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover'>View </a>
										</div>
					    			</div>
					    			<div data-src='images/Slide3.png' data-custom-thumb='images/Slide3.png'>
					    				<div class='camera_caption_3 fadeFromTop t_align_c d_xs_none'>
											<img src='images/' alt='' class='m_bottom_5'>
											<div class='color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20'><b class='color_dark'></b></div>
											<a href='#' role='button' class='d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover'>Shop Now</a>
										</div>
					    			</div>
								</div>
							





								</div>
								
							</div>
						</div>
			
					<!--content-->
					

					<!--product brands-->
					<?php include('product_brands.php'); ?>

					<!--blog-->
					<?php include('blog.php'); ?>
			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
	</div>


		<!--social widgets-->
		<?php include('social_widgets.php'); ?>	
		
		<!--custom popup-->
		

	
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