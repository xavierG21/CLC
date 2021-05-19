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
		<link rel="icon" type="image/png" href="images/clc_logo.png">
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

		<style>



</style>


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
			
						<!--CONTENT -->
						
							<br>
							<div class='container'>
								<div class='row'>
									<div class='col-md-10 col-md-offset-1' style='padding:0;margin:0;width:100%;'>
										<h2>Palawan Express Instructions</h2><br>
										<div class="alert alert-danger">
											<strong><i>Reminder: Don't forget the Total Payment of the Products you want to buy. <button onclick="window.open('invoice/index.php', '_blank')" style="background-color: white;width: 150px">See Invoice Here</button></i></strong>
										</div>

										<div class="alert alert-warning">
  											<strong>STEP 1: </strong> Go to any Palawan Branches near you.<br><br>
  											<strong>STEP 2: </strong> Get a Palawan Express Form titled "SEND MONEY FORM".<br><br>
  											<strong>STEP 3: </strong> Fill up the required fields:		
  											<button id='thisButton'  data-toggle='modal' data-target='#seeImage' style="background-color: white;width: 150px"><strong>See Sample Form</strong></button>
											<br><br>
  											<table class="table table-bordered" style="background-color: white">
  												<tr class='active'>
  													<td colspan="2">SENDER</td>
  												</tr>
  												<tr>
  													<td>Name: </td>
  													<td><font color="red">(Insert your Name here) </font><i>Ex: Juan de la Cruz</i></td>
  												</tr>
  												<tr>
  													<td>Mobile No: </td>
  													<td><font color="red">(Insert your mobile number here) </font><i>Ex: 0912345678</i></td>
  												</tr>
  												<tr class='active'>
  													<td colspan="2">RECEIVER</td>
  												</tr>
  												<tr>
  													<td>Name: </td>
  													<td><font color="green">Jeffrey S. Sinco </font><i>(This is the name you will be sending money from)</i></td>
  												</tr>
  												<tr>
  													<td>Mobile No: </td>
  													<td><font color="green">09238629676 </font><i>(This is the mobile number that will contact our company to secure your payment)</i></td>
  												</tr>
  												<tr class='active'>
  													<td colspan="2">AMOUNT</td>
  												</tr>
  												<tr>
  													<td colspan="2"><i>(Enter the total amount of the products.) Ex: Php 13,000</i></td>
  													
  												</tr>
  												<tr class='danger'>
  													<td colspan="3" ><strong><i>NOTE: We will validate the amount, so be sure to enter the exact amount.</i></strong></td>
  												</tr>
  											</table><br>
  											<strong>STEP 4: </strong>Go back to our website and Log in. Go to "My Account > My Orders > View Order Details"<br><br>
  											<strong>STEP 5: </strong>Screenshot or Capture a Picture of your form provided by Palawan Express Form <br><br>
  											<strong>STEP 6: </strong>Wait for your orders to be proccessed. It will be delivered based on the Method you choose during your purchase. Thank you! 
										</div>
										
											 
											



											

									</div>

								</div>
								

							</div>


											
					<!--content-->
			<!-- Modal for Change Password -->
<div class='modal fade' id='seeImage' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
  
      <img src='images/palawan_form.png'>
      </div>
    </div>
  </div>
</div>
						
					</div>
						

					</div>
							


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
		<script src="js/jquery.min.js"> </script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
	</body>
</html>
<script>

</script>