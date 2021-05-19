<?php
session_start();
require 'db_conn.php';
require 'config.php';

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
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
			
			
						<!--PHP -->
<!--content-->
<div class='page_content_offset'>
	<div class='container'>	
		<h3>Home 》 User profile 》 Order 》 Order Details</h3><br><br>
			<div class='col-md-3 table-responsive'>
				<figure class='widget shadow r_corners wrapper m_bottom_30'>
								<figcaption>
									<h3 class='color_light'>ORDER DETAILS</h3>
								</figcaption>
					<div class='widget_content'>
									<!--Categories list-->
									<ul class='categories_list'>
										
										<li  class='btn-info' style='padding-left:10px'>
											<a href='myOrder.php'  class='f_size_large color_dark d_block relative'>
												<b>My Orders</b>
												
											</a>
										</li>
										<li>
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
	<h3>My Orders 》View Products</h3>

		<hr />
		
		<table class="table_type_3 responsive_table full_width r_corners wrapper shadow bg_light_color_1 m_bottom_30 t_align_l" id="table-1" style="padding:20px;background-color: white;">
			<thead class='f_size_large btn-primary'>
				<tr>
					
					<th>Product Image</th>
					
					<th>Product Name</th>
					
				
					
					

					<th style="width: 140px !important">Product Color</th>
					<th style="width: 20px !important">Quantity Ordered</th>

					<th>Price</th>
					
					
				</tr>
			</thead>
				<tbody>

						<?php
							
							$cID = $_SESSION['sess_id'];
							
							$query2 = "SELECT SUM(priceEach) FROM orderdetails WHERE orderNumber = '$memid'";
								$result2 = mysqli_query($con, $query2);
								if (mysqli_affected_rows($con) != 0) {
									while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
										$grand_total = $row['SUM(priceEach)'];
										
									}
								}else{
									//echo "0";
								}
							
							
							$query  = "SELECT * FROM `orders` o INNER JOIN orderdetails od ON o.orderNumber = od.orderNumber INNER JOIN customers c ON o.customerID = c.user_id INNER JOIN products p ON od.product_code = p.product_code WHERE o.orderNumber = '$memid'";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                

											
											echo "<td align='center'><img src='photo/" . $row['product_img_name'] . "' width='50px' height='50px' > </td>";
											
											echo "<td>" . $row['product_name'] . " </td>";

											

											

											echo "<td>" . $row['color'] . " </td>";

											echo "<td align='right'>" . $row['quantityOrdered'] . " </td>";

											echo "<td align='right'>Php " . $row['priceEach'] . "</td>";

											
											//echo "<td>" . $row['Mode'] . " </td>";

											
											
							                
											
											
											
							               	 	$msgid = $row['orderNumber'];
												
							                
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "</tr>";
							                
							            //}
							       
							    
							
						?>
						
						<tr>
        <td colspan="7">
            <span style="float:right;text-align: right;">
            <b>Amount Payable: 
		  	<?php
			if(isset($grand_total)){
		   
			echo "<span class='f_size_large fw_medium scheme_color'>".sprintf("Php %01.2f", $grand_total)."</span>";
			$_SESSION['grand_total']=$grand_total;
			$_SESSION['orderNumber']=$msgid;
			
			}else{
				//echo $_SESSION['orderNumber'];
			}	
		   	?>
			</b>
            </span>
        </td>
    </tr>
   		 </tbody>
	</table>

	<h2 class='tt_uppercase color_dark m_bottom_25'>Order Information</h2>
    <table class='table_type_6 responsive_table full_width r_corners shadow m_bottom_45 t_align_l'>
    <tr>
    	
    </tr>
    <tr>

    	<td>Order Number: <?php  echo $row['orderNumber']; ?> </td>
    </tr>
    <tr>
    	<td>Order Date:  <?php  echo $row['orderDate']; ?></td>

    </tr>
    <tr>
    	<td>Shipment:  <?php  echo $row['address']; ?></td>

    </tr>
</table>
<?php
}

?>
					

			</div>

		</div>
	</div>

			<br><br><br><br><br>
			<!--markup footer-->
			<?php include('footer.php'); ?>	
			
		</div>
		<!--social widgets-->
		<?php include('social_widgets.php'); ?>	
		
		<!--custom popup-->
		<?php include('custom_popup.php'); ?>	

<!-- Modal for Image -->
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Change Image</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action="insert_image.php" method="POST" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
      	
       
			<input type="file" name="file_img" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Image"  maxlength="1000">

		

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <input type="submit" class="btn btn-primary" name="btn_upload" value="Save">

    </form>
      </div>
    </div>
  </div>
</div>


	
</div>

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
		<script src='js/subtwo.js'></script>
		<!--<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>-->
	</body>
</html>
<?php
} else {
    
}
?>