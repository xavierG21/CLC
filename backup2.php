<?php
require("db_conn.php");

$id = $_GET['id'];

if(isset($_POST["submit1"]))
{
	$d=0;
		if(is_array($_COOKIE['item']))
		{
			foreach ($_COOKIE['item'] as $name => $value) 
				# code...
		{
			$d = $d + 1 ;
		}
			$d = $d + 1 ;
		}
			else
		{
			$d = $d + 1 ;
		}
		
		
		
		
		$query2  = "SELECT * FROM product WHERE id = $id";

		$result2 = mysqli_query($con, $query2);
					while ($row3 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
		{
			$img1=$row3["product_image"];
			$nm=$row3["product_name"];
			$prize=$row3["product_price"];
			$qty="1";
			$total=$prize*$qty;


		}
		
		if(is_array($_COOKIE['item']))
		{
			foreach ($_COOKIE['item'] as $name => $value) 
			{
				$values11 = explode ("_",$value);
				$found=0;
				if($img1==$value[0])
				{
						$found=$found+1;
						$qty=$values11[3]+1;
						$total=$values11[2]*$qty;
						setcookie("item[$d]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
				}
				
			}
		

				if ($found===0) 
				{
					setcookie("item[$d]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
				}
		}else{
					setcookie("item[$d]",$img1."_".$nm."_".$prize."_".$qty."_".$total,time()+1800);
				}
}


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
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
	<div class="boxed_layout relative w_xs_auto">
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
			
			
						<!--PHP -->
	<?php
			if(isset($_SESSION['sess_user']) != ""){

				if ($_SESSION['sess_user'] == 'admin'){
					echo "

					<!--content-->
			<div class='page_content_offset'>
				<div class='container'>	
				<h1>Insert Admin UI here</h1><br><br><br>";
				}else{ //IF USER
					
					echo "<!--content-->
			<div class='page_content_offset'>
				<div class='container'>	

					<h1>Hello ".$_SESSION['sess_user']."</h1><br><br><br>
					<h3>Insert something for customer</h3><br><br>";
				}
			} else { // IF WALA NKA LOG IN
					echo"	


					";

			}
				
	?>				
					<!--content-->
					<?php include('detail_content.php'); ?> 

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
		<?php include('custom_popup.php'); ?>	



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