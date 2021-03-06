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
	<style>
	#thisButton{
	
		width:100px;
		height:30px; 
		border-radius:4px;
	}
	#thisButton:hover{
		 transform:scale(1.1);
	}


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
			
			

<!--content-->


<div class='page_content_offset'>
	<div class='container'>	
		<h3>Home ??? User profile ??? Order</h3><br><br>
			<div class='col-md-3 table-responsive'>
				<figure class='widget shadow r_corners wrapper m_bottom_30'>
								<figcaption>
									<h3 class='color_light'>ORDER DETAILS</h3>
								</figcaption>
					<div class='widget_content'>
									<!--Categories list-->
									<ul class='categories_list'>
										
										<li>
											<a href='myOrder.php'  class='f_size_large color_dark d_block relative'>
												<b>My Orders</b>
												
											</a>
										</li>
										<li class='btn-info' style='padding-left:10px'>
											<a href='myPayments.php'  class='f_size_large color_dark d_block relative'>
												<b>Payment History</b>
												
											</a>
										</li>
										
									</ul>

								</div>
					</figure>
					<figure class='widget shadow r_corners wrapper m_bottom_30'>
								<figcaption>
									<h3 class='color_light'>ACCOUNT SETTINGS</h3>
								</figcaption>
					<div class='widget_content'>
									<!--Categories list-->
									<ul class='categories_list'>
									<li>
											<a href='myAccount.php' class='f_size_large color_dark d_block relative'>
												<b>My Account Information</b>
												
											</a>
										</li>
										<li>
											<a href='logout.php' class='f_size_large color_dark d_block relative'>
												<b>Log out</b>
												
											</a>
										</li>
									
										
									</ul>
									
								</div>
					</figure>
			</div>

			<div class='col-md-9 r_corners shadow  wrapper' style='padding:20px;background-color: white'>
				
					<h2 class='m_bottom_20 color_dark'>Payment History</h2>
						<table class='table_type_3 responsive_table full_width r_corners wrapper shadow bg_light_color_1 m_bottom_30 t_align_l' style="padding:20px;background-color: white;width: 800px">
							<thead class='f_size_large btn-primary'>
								<th>Order Number</th>
								<th>Order Date</th>						
							
								
								<th>Total Amount Paid</th>
							</thead>
							<tbody>
								<?php
							$cID = $_SESSION['sess_id'];
							$query  = "select * from payments p inner JOIN orders o on p.orderNumber = o.orderNumber WHERE user_id = '$cID' ";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                echo "<td>" . $row['orderNumber'] . " </td>";

											echo "<td>" . $row['paymentDate'] . "</td>";
											
									
											
											//echo "<td>" . $row['status'] . " </td>";

											

									


											

											//echo "<td>" . $row['fname'] . "  </td>";


											
							                
											
											
											
							               	 	$msgid = $row['orderNumber'];
												$msgid2 = $row['status'];

												//echo "<td>" . $row['admin_comment'] . " </td>";
												echo "<td align='right'><span class='f_size_large fw_medium scheme_color'>Php " . $row['amount'] . " </span><br>
												<em class='color_green'>Method: ". $row['mode'] . "</em></td></tr>";
										/*	
											if($msgid2 == "In process"){
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "<td>
											
											<form action='myPayOrder_details.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid. "'/><input type='submit' value='View Order Details' class='btn btn-warning'/></form>
											</td></tr>";
											}else{
												echo "<td>
											
											<form action='#' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid. "'/><input type='submit' value='Delivered' class='btn btn-success'/></form>
											</td></tr>";*/
											//} 
							                
							            }
							       
							    
							
						?>	
							</tbody>
							
											
				
						</table>
	
			</div>


						
	</div>
						
</div>
					

			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
		</div>
		<!--social widgets-->
		<?php include('social_widgets.php'); ?>	
		
		<!--custom popup-->
		<?php include('custom_popup.php'); ?>	



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
		<!--<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>-->
	</body>
</html>
