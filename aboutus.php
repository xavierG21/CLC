<?php
 	session_start();
	require("db_conn.php");
	require("config.php");
?>
<!DOCTYPE HTML>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>About Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/clc_logo.png">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap2.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	<style>
	#unOrdered { 
    display: block;
    list-style-type: disc;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
	}
	</style>
	</head>
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--markup header-->
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
						<section class="col-lg-9 col-md-9 col-sm-9" style="background-color: white;padding:15px">
							
							<article class="m_bottom_25">
								
								<div class="row clearfix m_bottom_10">
									<div class="col-lg-9 col-md-9 col-sm-9">
										<h4 class="m_bottom_5 color_dark fw_medium">About Us</h4>
										<p class="f_size_medium"></p>
									</div>
								</div>
								<!--post content-->
								<h5 class="m_bottom_5 color_dark fw_medium">The Company</h5>
								<p class="m_bottom_10" style="text-align:justify">Central Lumber Corporation started out more than six decades ago as a purely lumber 
								company and is now a complete construction supply store. Cesar C. Sinco, the patriarch of CLC, laid out what would be the basic path of CLC: “If given a choice between two businesses, one passive and other one active, both earning the same profit, choose the one that creates jobs.” As such, CLC has over 400 employees working together, driven by its core values of integrity, respect, passion for work, continuous improvement, and expertise in areas where it competes.  </p>
								<p class="m_bottom_10" style="text-align:justify">Our lumber business continues to thrive as we are able to manufacture our own line of mouldings, wall panels and flooring 
								timber materials. We were one of the first few companies who imported lumber from Malaysia to ease up on logging operations in the 
								Philippines. With the need to use timber from renewable resources, we became the first to directly import, market and distribute 
								nationwide Armourwood - double vacuum, high pressure treatment Radiata Pine grown in Plantation Farms of New Zealand.</p>
								<p class="m_bottom_10" style="text-align:justify">Today, CLC conducts business via its retail branches in Cebu and its distribution network in Manila, Luzon, Visayas, and Mindanao. CLC manufactures its own line of timber products with 100% of its raw materials imported from other countries. Imported timber is sourced from renewable resources like plantation-grown timber forests. CLC markets and distributes up to 1,000 products of brands such as Armourwood, Oregon Frames, Accoya, CLC Moulding, CLC Doors, White Shield, Gardner, and VT Metals. CLC is the no. 1 treated lumber supplier, the no. 1 fiber cement wood supplier, and the no. 2 fiber cement board supplier in the country.</p>
								<p style="text-align:justify">To ensure that our complete line of construction supply products is accessible to you, our valued customers, we have three stores 
								in Cebu City and one in Malabon, Metro Manila.</p>
 
							</article>
							

							<article class="m_bottom_25">
								<h5 class="m_bottom_5 color_dark fw_medium">Mission</h5>
								<p class="m_bottom_10" style="text-align:justify">True to the company’s mission of producing high quality lumber products and making them readily available for the construction sector – makers, users and sellers, Central Lumber Corporation boasts of:
								<ul class='d_inline_b clearfix' type='circle' id='unOrdered'>
									<li>Manufacturing its own line of high quality mouldings, wall panels and timber flooring materials.</li>
									<li>Being one of the first in the country to import lumber from Malaysia in support of the government’s anti-logging campaign;</li>
									<li>Being the first and only to directly import and distribute pressure-treated New Zealand Radiata Pine “Armourwood” which comes from environment friendly plantation grown farms of New Zealand. </li>
									<li>Maintaining strong partnerships with various companies that produce high quality construction materials with leading brands such as: Boysen, Hornitex, HardiFlex, Saveflush, Eurotiles, Galvacolor, Island Paints, ABC, Firefly.</li>
								</ul><br>
								</p>
								
								<h5 class="m_bottom_5 color_dark fw_medium">Core Purpose</h5>
								<p class="m_bottom_10" style="text-align:justify">We take the lead in providing innovative products to build value-for-money homes of the future. </p>
								<h5 class="m_bottom_5 color_dark fw_medium">Core Values</h5>
								<p class="m_bottom_10" style="text-align:justify">
									<ul class='d_inline_b clearfix' type='circle' id='unOrdered'>
									<li>Integrity</li>
									<li>Respect</li>
									<li>Passion for Work</li>
									<li>Continuous Improvement</li>
									<li>Expertise in areas where we compete</li>
									</ul>
								</p>
								
 
							</article>
							
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							
							<!--banner-->
							<div class="d_block d_xs_inline_b r_corners m_bottom_30" >
								<img src="images/550/CEO.png" alt="">
								<div style="width: 220px" class="d_block d_xs_inline_b r_corners m_bottom_30">
								<h4 align="center"> Engr. Jeffrey S. Sinco</h4>
								<h5 align="center"><i>Owner</i></h5>
								</div>
							</div>
							<div class="d_block d_xs_inline_b r_corners m_bottom_30" style="background-color: white;padding:15px">
								<h4 class="m_bottom_5 color_dark fw_medium">Main Branch</h4>
								<div class="clearfix m_bottom_15">
									<i class="fa fa-map-marker f_left color_dark"> </i>
									<p class="contact_e"> 268 Magallanes St, Cebu City, 6000 Cebu.</p>
								</div>
								<div class="clearfix m_bottom_10">
									<i class="fa fa-phone f_left color_dark"></i>
									<p class="contact_e"> (032) 253 2622 / (032) 418-4566</p>
								</div>
								<div class="clearfix m_bottom_10">
									<i class="fa fa-envelope f_left color_dark"></i>
									<a class="contact_e default_t_color" href="mailto:#"> jefsingco2018@gmail.com</a>
								</div>
								<div class="clearfix">
									<i class="fa fa-clock-o f_left color_dark"></i>
									<p class="contact_e" >Monday-Saturday: 08:00 AM- 05:00 PM <br> Sunday: Closed</p>
								</div>
							</div>
							<div class="d_block d_xs_inline_b r_corners m_bottom_30" style="background-color: white;padding:15px">
								<h4 class="m_bottom_5 color_dark fw_medium">Company Snapshot</h4>
								<div class="clearfix m_bottom_15">
									<p class="contact_e">Average application processing time</p>
									<p><strong>11</strong></p>
								</div>
								<div class="clearfix m_bottom_10">
									<p class="contact_e">Industry</p>
									<p><strong>Retail/Merchandise</strong></p>
								</div>
								<div class="clearfix m_bottom_10">
									<p class="contact_e">Company Size</p>
									<p><strong>201 - 500 Employees</strong></p>
								</div>
								<div class="clearfix m_bottom_10">
									<p class="contact_e">Dress Code</p>
									<p><strong>Business (e.g. Shirts)</strong></p>
								</div>
								<div class="clearfix m_bottom_10">
									<p class="contact_e">Benefits</p>
									<p><strong>Loans, Medical, Miscellaneous allowance</strong></p>
								</div>
								<div class="clearfix m_bottom_10">
									<p class="contact_e">Spoken Language</p>
									<p><strong>English, Tagalog, Bisaya</strong></p>
								</div>
								
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
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/styleswitcher.js"></script>
		<script src="js/scripts.js"></script>
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
	</body>
</html>