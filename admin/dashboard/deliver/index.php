<?php
require 'db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>Admin</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content=''>
		<meta name="keywords" content=''>
		<meta name="description" content=''>
		<link rel="icon" type="image/icon" href="../../../images/clc_logo.png">
	
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../../css/style.css">
		<!--font include-->
		<link href="../../../css/font-awesome.min.css" rel="stylesheet">
	

    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">

    <script src="../../neon/js/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- TS1387507135: Neon - Responsive Admin Template created by Laborator -->
</head>
    <body class="page-body  page-fade">
		
		
		
    	<div class="page-container">	
		
			
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../img/Central.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-12">
					
						
		
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>					
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

			<h2> </h2>

			<hr><br>

			
				
				
				

				<div class="col-sm-3">			
					<div class="tile-stats tile-purple">
						<div class="icon" style='position: absolute;top:135px'><i class="entypo-check"></i></div>
							<div class="num" data-postfix="" data-duration="1500" data-delay="0">
							<h2>Approve Orders </h2><br>	
								<?php
								$query = "select COUNT(*) from orders WHERE status = 'Approve' AND method = 'delivery'";
								$result = mysqli_query($con, $query);

								
								if (mysqli_affected_rows($con) != 0) {
									while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
										echo $row['COUNT(*)'];
										
									}

								}else{
									echo "0";
								}
							
								?>
							</div>
					</div>
				</div>

					


				<div class="col-sm-3">			
					<div class="tile-stats tile-aqua">
						<div class="icon" style='position: absolute;top:135px'><i class="entypo-basket"></i></div>
							<div class="num" data-postfix="" data-duration="1500" data-delay="0">
							<h2>Total Delivered </h2><br>	
								<?php
								$query = "select COUNT(*) from orders WHERE status = 'Delivered' ";
								$result = mysqli_query($con, $query);
								if (mysqli_affected_rows($con) != 0) {
									while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
										echo $row['COUNT(*)'];
									}
								}else{
									echo "0";
								}
							
								?>
							</div>
					</div>
				</div>	

				<div class="col-md-12">
				
				</div>	
			
			</div>
			

			
   
    	
</div>
		
		<script src="../../../js/jquery-2.1.0.min.js"></script>
		<script src="../../../js/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../../js/retina.js"></script>
		<script src="../../../js/camera.min.js"></script>
		<script src="../../../js/jquery.easing.1.3.js"></script>
		<script src="../../../js/waypoints.min.js"></script>
		<script src="../../../js/jquery.isotope.min.js"></script>
		<script src="../../../js/owl.carousel.min.js"></script>
		<script src="../../../js/jquery.tweet.min.js"></script>
		<script src="../../../js/jquery.custom-scrollbar.js"></script>
		<script src="../../../js/scripts.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>

	    <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
	    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
	    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
	    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
	    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
	    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
	    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
	    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
	    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
	    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>
    </body>
</html>
