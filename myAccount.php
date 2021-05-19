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
			
			
						<!--PHP -->
<!--content-->
						<!--PHP -->
	<?php
			

				//IF USER
					$query="SELECT * FROM customers WHERE username='".$_SESSION['sess_user']."'";
					$res = mysqli_query($con, $query);
                    
                        
                    while($row = mysqli_fetch_array($res)){
					echo "
					<div class='page_content_offset'>
					<div class='container'>	

					
					<h3>Home 》 User profile</h3><br><br>

					<div class='col-md-3 table-responsive r_corners'>
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
									<li class='btn-info' style='padding-left:10px'>
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

					<div class='col-md-9 r_corners shadow wrapper' style='padding:20px;background-color: white'>
						<div class='col-md-2 ' style='height:147px;padding:10px;'>
						";
						if ($row['image']!= NULL){
							echo "<img src='photo/".$row['image']."' id='userImage' style='width:90px;position:absolute;left:20px;border-radius:5px'>";
						}else{
							echo "<img src='images/user.png' id='userImage' style='width:90px;position:absolute;left:20px'>";
						}
						echo "
						
						<br><br><br><br><br>
						<button id='thisButton' data-toggle='modal' data-target='#exampleModal' class='btn btn-info'>Change</button>
						</div>
						<div class='col-md-10 r_corners' style='border:1px solid LightGray;padding:20px;border-radius:5px'>
						<span>Hello <font color='red'>".$row['username']."</font>, Welcome to <font color='green'>Central Lumber Corporation!</font></span>
						<br><br><span>Here lies your account information where you can edit and browse through your orders.</span><br><br>
						<span>Have a question? Let us know through <a href='contactus.php'>here!</a></span>
						</div>
						
						
						
						<table class='table_type_1 col-md-12' style='border:1px solid LightGray;margin:10px;margin-left:1px;'>
						<tr>
							<td align='right'><button id='thisButton'  data-toggle='modal' data-target='#changeProf' class='btn btn-info'>Edit Profile</button></td>
						</tr>
						<tr>
							<td>Name: ".$row['fname']." ".$row['lname']."</td>
						</tr>
						<tr>
							<td>Email: ".$row['email']."</td>
						</tr>
						<tr>
							<td>Contact No: ".$row['contact_no']."</td>
						</tr>
						<tr>
							<td>Address: ".$row['address']."</td>
						</tr>
						<tr>
							<td>Username: ".$row['username']."</td>
						</tr>
						<tr>
							<td>Password: Change Password?  <button id='thisButton'  data-toggle='modal' data-target='#changePass' class='btn btn-info'>Change</button></td>
						</tr>
						
				
						</table>
						
	<!-- Modal for Edit Profile -->
<div class='modal fade' id='changeProf' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Edit Profile</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
  
      <form action='changeProf.php?pid=".$row['user_id']."' method='POST'>
      	
       <div class='form-group'>
       		<label>First Name: </label>
			<input name='fname' type='text' class='form-control' required>
		</div>
		
		<div class='form-group'>
       		<label>Last Name: </label>
			<input name='lname' type='text' class='form-control' required>
		</div>

		<div class='form-group'>
       		<label>Email: </label>
			<input name='email' type='email' class='form-control' required>
		</div>

		<div class='form-group'>
       		<label>Contact No: </label>
			<input name='contact_no' type='text' class='form-control' required>
		</div>
		
		<div class='form-group'>
       		<label>Address: </label>
			<input name='address' type='text' class='form-control' required>
		</div>
		
		

 	 </div>



      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <input type='submit' class='btn btn-primary' name='save' value='Save'>

    </form>
      </div>
    </div>
  </div>
</div>

	<!-- Modal for Change Password -->
<div class='modal fade' id='changePass' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Change Password</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
  
      <form action='changePass.php?pid=".$row['user_id']."' method='POST'>
      	
       <div class='form-group'>
       		<label>Old Password: </label>
			<input name='oldPass' type='password' class='form-control' required>
		</div>

		<div class='form-group'>
       		<label>New Password: </label>
			<input name='newPass' type='password' class='form-control' required>
		</div>

		<div class='form-group'>
       		<label>Confirm New Password: </label>
			<input name='confirmPass' type='password' class='form-control' required>
		</div>




      

 	 </div>



      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <input type='submit' class='btn btn-primary' name='save' value='Save'>

    </form>
      </div>
    </div>
  </div>
</div>
						
					</div>
						

					</div>
					

					";};
				
				
	?>

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
      	
       
			<input type="file" name="file_img" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Image"  maxlength="1000" required>

		

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
		<!--<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>-->
	</body>
</html>
