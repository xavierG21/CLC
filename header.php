
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<header role="banner">
				<!--header top part-->
				<?php
						
				
				
                 
                            if(!isset($_SESSION["sess_user"])){//IF WALA NKA LOGIN
                            	echo "<section class='h_top_part'>
					<div class='container'>
						<div class='row clearfix'>
							<div class='col-lg-4 col-md-4 col-sm-5 t_xs_align_c'>
								<p class='f_size_small'>Welcome visitor can you	<a href='login.php'>Log In</a> or <a href='register.php'>Create an Account</a> </p>
							</div>
							<div class='col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c'>
								<p class='f_size_small'>Call us: <b class='color_dark'>(032) 253-2622 / (032) 418-4566</b></p>
							</div>
							<nav class='col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c'>
								<ul class='d_inline_b horizontal_list clearfix f_size_small users_nav'>
									<li><a href='#' class='default_t_color' id='loginFirst'>My Account</a></li>
									<li><a href='#' class='default_t_color' id='loginFirst2'>Orders List</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</section>";
				

                            	}else{//IF NKA LOGIN
                                
                                echo "<section class='h_top_part'>
					<div class='container'>
						<div class='row clearfix'>
							<div class='col-lg-4 col-md-4 col-sm-5 t_xs_align_c'>
								<p class='f_size_small'>Hello <b>".$_SESSION['sess_user']."</b>!<a href='logout.php'>Logout</a> </p>
							</div>
							<div class='col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c'>
								<p class='f_size_small'>Call us: <b class='color_dark'>(032) 253-2622 / (032) 418-4566</b></p>
							</div>
							<nav class='col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c'>
								<ul class='d_inline_b horizontal_list clearfix f_size_small users_nav'>
									<li><a href='myAccount.php' class='default_t_color'>My Account</a></li>
									<li><a href='myOrder.php' class='default_t_color'>Orders List</a></li>

									
								</ul>
							</nav>
						</div>
					</div>
				</section>";

                            };?>
				
				<!--header bottom part-->
				<section class="h_bot_part container">
					<div class="clearfix row">
						
						
						<div class="col-sm-1 col-sm-1 t_xs_align_c">
						
							<a href="index.php" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="images/big_clc.png" alt="">
							</a>
							

						</div>

						<div class="col-lg-12 col-lg-11 t_xs_align_c">						
						<h1>CENTRAL LUMBER CORPORATION</h1>
						</div>

					

						
						
					</div>

							  <div align='center'>
							    <?php include('ajax.php');?>
							  </div>
						
				</section>
			</header>
