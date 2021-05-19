<!--content-->


			<div class='page_content_offset'>
				<div class='container'>	
				
					<h2 class='tt_uppercase m_bottom_20 color_dark heading1 animate_ftr'>All Products</h2>
					<!--filter navigation of products-->
					
		<?php
		require("db_conn.php");

							//$query="SELECT * from product_brands pb inner join product_category pc on pb.brand_code = pc.brand_code inner JOIN product p on p.category_code = pc.category_code inner JOIN product_details pd on pd.product_id = p.product_id ";
							//$result = mysqli_query($con, $query);
							
			$query3  = "SELECT * FROM products p inner JOIN product_details pd on p.product_id = pd.product_id";
							//echo $query;
							$result3 = mysqli_query($con, $query3);
			$z=0;

							$query  = "SELECT * FROM products p inner JOIN product_details pd on p.product_id = pd.product_id";
							//echo $query;
							$result = mysqli_query($con, $query);
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$id=$row['id'];



					?>
					<section name='sec' class='products_container clearfix m_bottom_25 m_sm_bottom_15'>
						<!--product item-->
						<div class='product_item'>
							<figure class='r_corners photoframe shadow relative hit animate_ftb long'>
								<!--product preview-->
								<a href='#' class='d_block relative pp_wrap'>
									<!--hot product-->
									<span class='hot_stripe'><img src='images/hot_product.png' alt=''></span>
									<img src='photo/<?php echo $row['img']; ?>' class='tr_all_hover' alt=''>
									<span data-popup='#quick_view_product' onclick()= "myFunction<?php echo ++$z;?>()" class='button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none'>Quick View</span>
								</a>
								<!--description and price of product-->
								<figcaption>
									<h5 class='m_bottom_10'><a href='#' class='color_dark'> "<?php echo $row['product_name']; ?>" </a></h5>
									<div class='clearfix'>
										<p class='scheme_color f_left f_size_large m_bottom_15'><?php echo $row['srp']; ?></p>
										<!--rating-->
										<ul class='horizontal_list f_right clearfix rating_list tr_all_hover'>
											<li class='active'>
												<i class='fa fa-star-o empty tr_all_hover'></i>
												<i class='fa fa-star active tr_all_hover'></i>
											</li>
											<li class='active'>
												<i class='fa fa-star-o empty tr_all_hover'></i>
												<i class='fa fa-star active tr_all_hover'></i>
											</li>
											<li class='active'>
												<i class='fa fa-star-o empty tr_all_hover'></i>
												<i class='fa fa-star active tr_all_hover'></i>
											</li>
											<li class='active'>
												<i class='fa fa-star-o empty tr_all_hover'></i>
												<i class='fa fa-star active tr_all_hover'></i>
											</li>
											<li>
												<i class='fa fa-star-o empty tr_all_hover'></i>
												<i class='fa fa-star active tr_all_hover'></i>
											</li>
										</ul>
									</div>
									<button class='button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0'>Add to Cart</button>
								</figcaption>
							</figure>
						</div>

						<!--product item-->
						
					</section> ";

					

<?php 
}
			$p=0; $query2  = "SELECT * FROM products p inner JOIN product_details pd on p.product_id = pd.product_id WHERE pd.id = '$id2'";
							//echo $query;
							$result2 = mysqli_query($con, $query2);
							while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
							//$id=$row['id'];



		?> <div class='popup_wrap d_none' id='quick_view_product'>
			<section class='popup r_corners shadow'>
				<button class='bg_tr color_dark tr_all_hover text_cs_hover close f_size_large'><i class='fa fa-times'></i></button>
				<div class='clearfix'>
					<div class='custom_scrollbar'>
						<!--left popup column-->
						<div class='f_left half_column'>
							<div class='relative d_inline_b m_bottom_10 qv_preview'>
								<span class='hot_stripe'><img src='images/sale_product.png' alt=''></span>
								<img src='images/quick_view_img_1.jpg' class='tr_all_hover' alt=''>
							</div>
							<!--carousel-->
							<div class='relative qv_carousel_wrap m_bottom_20'>
								<button class='button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev'>
									<i class='fa fa-angle-left '></i>
								</button>
								<ul class='qv_carousel d_inline_middle'>
									<li data-src='images/quick_view_img_1.jpg'><img src='images/quick_view_img_4.jpg' alt=''></li>
									<li data-src='images/quick_view_img_2.jpg'><img src='images/quick_view_img_5.jpg' alt=''></li>
									<li data-src='images/quick_view_img_3.jpg'><img src='images/quick_view_img_6.jpg' alt=''></li>
									<li data-src='images/quick_view_img_1.jpg'><img src='images/quick_view_img_4.jpg' alt=''></li>
									<li data-src='images/quick_view_img_2.jpg'><img src='images/quick_view_img_5.jpg' alt=''></li>
									<li data-src='images/quick_view_img_3.jpg'><img src='images/quick_view_img_6.jpg' alt=''></li>
								</ul>
								<button class='button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next'>
									<i class='fa fa-angle-right '></i>
								</button>
							</div>
							<div class='d_inline_middle'>Share this:</div>
							<div class='d_inline_middle m_left_5'>
								<!-- AddThis Button BEGIN -->
								<div class='addthis_toolbox addthis_default_style addthis_32x32_style'>
								<a class='addthis_button_preferred_1'></a>
								<a class='addthis_button_preferred_2'></a>
								<a class='addthis_button_preferred_3'></a>
								<a class='addthis_button_preferred_4'></a>
								<a class='addthis_button_compact'></a>
								<a class='addthis_counter addthis_bubble_style'></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class='f_right half_column'>
							<!--description-->
							<h2 class='m_bottom_10'><a href='#' class='color_dark fw_medium'><?php echo $row2['product_name']; ?></a></h2>
							<div class='m_bottom_10'>
								<!--rating-->
								<ul class='horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover'>
									<li class='active'>
										<i class='fa fa-star-o empty tr_all_hover'></i>
										<i class='fa fa-star active tr_all_hover'></i>
									</li>
									<li class='active'>
										<i class='fa fa-star-o empty tr_all_hover'></i>
										<i class='fa fa-star active tr_all_hover'></i>
									</li>
									<li class='active'>
										<i class='fa fa-star-o empty tr_all_hover'></i>
										<i class='fa fa-star active tr_all_hover'></i>
									</li>
									<li class='active'>
										<i class='fa fa-star-o empty tr_all_hover'></i>
										<i class='fa fa-star active tr_all_hover'></i>
									</li>
									<li>
										<i class='fa fa-star-o empty tr_all_hover'></i>
										<i class='fa fa-star active tr_all_hover'></i>
									</li>
								</ul>
								<a href='#' class='d_inline_middle default_t_color f_size_small m_left_5'>1 Review(s) </a>
							</div>
							<hr class='m_bottom_10 divider_type_3'>
							<table class='description_table m_bottom_10'>
								<tr>
									<td>Manufacturer:</td>
									<td><a href='#' class='color_dark'>Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class='color_green'>in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>
							<h5 class='fw_medium m_bottom_10'>Product Dimensions and Weight</h5>
							<table class='description_table m_bottom_5'>
								<tr>
									<td>Product Length:</td>
									<td><span class='color_dark'>10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>
							<hr class='divider_type_3 m_bottom_10'>
							<p class='m_bottom_10'>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
							<hr class='divider_type_3 m_bottom_15'>
							<div class='m_bottom_15'>
								<s class='v_align_b f_size_ex_large'>P1345.00</s><span class='v_align_b f_size_big m_left_5 scheme_color fw_medium'>P1100.00</span>
							</div>
							<table class='description_table type_2 m_bottom_15'>
								<tr>
									<td class='v_align_m'>Size:</td>
									<td class='v_align_m'>
										<div class='custom_select f_size_medium relative d_inline_middle'>
											<div class='select_title r_corners relative color_dark'>s</div>
											<ul class='select_list d_none'></ul>
											<select name='product_name'>
												<option value='s'>s</option>
												<option value='m'>m</option>
												<option value='l'>l</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class='v_align_m'>Quantity:</td>
									<td class='v_align_m'>
										<div class='clearfix quantity r_corners d_inline_middle f_size_medium color_dark'>
											<button class='bg_tr d_block f_left' data-direction='down'>-</button>
											<input type='text' name='' readonly value='1' class='f_left'>
											<button class='bg_tr d_block f_left' data-direction='up'>+</button>
										</div>
									</td>
								</tr>
							</table>
							<div class='clearfix m_bottom_15'>
								<button class='button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large'>Add to Cart</button>
								<button class='button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0'><i class='fa fa-heart-o f_size_big'></i><span class='tooltip tr_all_hover r_corners color_dark f_size_small'>Wishlist</span></button>
								<button class='button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0'><i class='fa fa-files-o f_size_big'></i><span class='tooltip tr_all_hover r_corners color_dark f_size_small'>Compare</span></button>
								<button class='button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative'><i class='fa fa-question-circle f_size_big'></i><span class='tooltip tr_all_hover r_corners color_dark f_size_small'>Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<?php
					}
?>						

					<script>
						<?php $i=0; while($row7 = mysqli_fetch_array($result3)){ ?>

						myFunction<?php echo ++$i; ?>(){
							<?php	$id2 = $_SESSION['userID'] = $row7['product_id']; ?>
							}
					<?php	} ?>
					</script>
					<!--banners-->
					<section class='row clearfix m_bottom_45 m_sm_bottom_35'>
						<div class='col-lg-6 col-md-6 col-sm-6 animate_half_tc'>
							<a href='#' class='d_block banner wrapper r_corners relative m_xs_bottom_30'>
								<img src='images/550/cabinet.png' alt=''>
								<span class='banner_caption d_block vc_child t_align_c w_sm_auto'>
									<span class='d_inline_middle'>
										<span class='d_block color_dark tt_uppercase m_bottom_5 let_s'>Best Furniture</span>
										<span class='d_block divider_type_2 centered_db m_bottom_5'></span>
										<span class='d_block color_dark tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title'><b>Create Now</b></span>
										<span class='button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large'>View Equipments</span>
									</span>
								</span>
							</a>
						</div>
						<div class='col-lg-6 col-md-6 col-sm-6 animate_half_tc'>
							<a href='#' class='d_block banner wrapper r_corners type_2 relative'>
								<img src='images/550/table.png' alt=''>
								<span class='banner_caption d_block vc_child t_align_c w_sm_auto'>
									<span class='d_inline_middle'>
										<span class='d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5'><b></b></span>
										<span class='d_block divider_type_2 centered_db m_bottom_5 d_sm_none'></span>
										<span class='d_block color_dark tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none'>Best Furniture<br><b>Create Now</b></span>
										<span class='button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large'>View Equipments</span>
									</span>
								</span>
							</a>
						</div>
					</section>