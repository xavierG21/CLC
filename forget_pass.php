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
						
			<!--slider-->
			
			<!--content-->
			<!--login-->
			<br>
               <center>
               <div class='row'>
               <div class='col-md-6 col-md-offset-3' style='border:1px solid darkgrey;border-radius: 15px;box-shadow:6px 6px 5px'>
                  <section><br>
                  <h3 class="m_bottom_20 color_dark">Forget password?</h3>
                  <form  method ="POST" action="doforget.php">
                     <ul>
                        <li class="m_bottom_10">
                           <label for="username" class="m_bottom_5 d_inline_b">Username</label>
                           <input type="text" name="username" id="username" class="r_corners half_width form-control" required>
                        </li>
                        <li class="m_bottom_25">
                           <label for="password" class="m_bottom_5 d_inline_b">Email</label>
                           <input type="text" name="email" class="r_corners half_width form-control" required>
                        </li>
                       
                        <li class="clearfix m_bottom_30">

                           <div class="f_center f_size_medium f_mxs_none">
                             
                              <button class="button_type_4 tr_all_hover r_corners f_center bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" name="submit">Send</button>
                           </div>
                        </li>
                     </ul>
                  </form>
               </div>
              </div>
            </center>
            <br>
					
		

					<!--blog-->
					
			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
		</div>
		<!--social widgets-->
	
		
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
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
	</body>
</html>