<?php
include_once("config.php");
?>





<form method="post" action="cart_update.php">

<div class="page_content_offset">
   <div class="container">
      <div class="row clearfix">
         <!--left content column-->
         <section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
            <h2 class="tt_uppercase color_dark m_bottom_25">Cart</h2>
            <!--cart table-->
            <table class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30" id="cart_table">
               <thead>
                  <tr class="f_size_mediumize_large">
                     <!--titles for td-->

                     
                     <th>Product Image &amp; Name</th>
                     <th>SKU</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Subtotal</th>
                  </tr>
               </thead>

                  <?php
   if(isset($_SESSION["cart_products"])) //check session var
    {
      $total = 0; //set initial total value
      $b = 0; //var for zebra stripe table 
      foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$product_color = $cart_itm["product_color"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even';
			
           echo <<<EOT

               <tbody>
                  <tr>
                     <!--Product name and image-->
                     <td data-title="Product Image &amp; name" class="t_md_align_c">
                        <img src="images/quick_view_img_10.jpg" alt="" class="m_md_bottom_5 d_xs_block d_xs_centered">
                        <a href="#" class="d_inline_b m_left_5 color_dark">{$product_name}</a>
                     </td>
                     <!--product key-->
                     <td data-title="SKU">PS01</td>
                     <!--product price-->
                     <td data-title="Price">
                       
                        <p class="f_size_large color_dark">{$currency}{$product_price}</p>
						
                     </td>
                     <!--quanity-->
                     <td data-title="Quantity">
                        <div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark m_bottom_10">
                           <button class="bg_tr d_block f_left" data-direction="down">-</button>
                           <input type="text" name="" readonly value="1" class="f_left">
                           <button class="bg_tr d_block f_left" data-direction="up">+</button>
                        </div>
                        <div>
                           <a href="#" class="color_dark"><i class="fa fa-check f_size_medium m_right_5"></i>Update</a><br>
                           <a href="#" class="color_dark"><i class="fa fa-times f_size_medium m_right_5"></i>Remove</a><br>
                        </div>
                     </td>
                     <!--subtotal-->
                     <td data-title="Subtotal">
                        <p class="f_size_large fw_medium scheme_color">$102.00</p>
                     </td>
                  </tr>
                  <tr>
                     
               </tbody>
            </table>
            <p align="right">
			<a href="delivery_info.php" class="btn btn-info btn-lg">
			<span class="glyphicon glyphicon-chevron-right"> </span> Next
			</a>

		</p>
         </section>
      </div>
   </div>

</div>
EOT;
		}
	}
?>


</form>



<h2 class="color_dark tt_uppercase m_bottom_25">Shipment Information</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<div class="row clearfix">
							
									<div class="col-lg-6 col-md-6 col-sm-6">
										<h5 class="fw_medium m_bottom_15">Ship To</h5>
										<form>
											<ul>
												<li class="m_bottom_5">
													<input type="checkbox" checked class="d_none" name="checkbox_6" id="checkbox_6"><label for="checkbox_6">Add/Edit shipment address</label>
												</li>
												<li class="m_bottom_15">
													<label for="a_name_1" class="d_inline_b m_bottom_5">Address Nickname</label>
													<input type="text" id="a_name_1" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="c_name_2" class="d_inline_b m_bottom_5">Company Name</label>
													<input type="text" id="c_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="f_name_2" class="d_inline_b m_bottom_5">First Name</label>
													<input type="text" id="f_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_name_2" class="d_inline_b m_bottom_5">Middle Name</label>
													<input type="text" id="m_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="l_name_2" class="d_inline_b m_bottom_5">Last Name</label>
													<input type="text" id="l_name_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_2" class="d_inline_b m_bottom_5">Address 1</label>
													<input type="text" id="address_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="address_1_2" class="d_inline_b m_bottom_5">Address 2</label>
													<input type="text" id="address_1_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="code_2" class="d_inline_b m_bottom_5">Zip / Postal Code</label>
													<input type="text" id="code_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="city_2" class="d_inline_b m_bottom_5">City</label>
													<input type="text" id="city_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5">Country</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="England">England</option>
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label class="d_inline_b m_bottom_5">State / Province / Region</label>
													<!--product name select-->
													<div class="custom_select relative">
														<div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
														<ul class="select_list d_none"></ul>
														<select name="product_name">
															<option value="1">1</option>
															<option value="2">2</option>
														</select>
													</div>
												</li>
												<li class="m_bottom_15">
													<label for="phone_2" class="d_inline_b m_bottom_5">Phone</label>
													<input type="text" id="phone_2" name="" class="r_corners full_width">
												</li>
												<li class="m_bottom_15">
													<label for="m_phone_2" class="d_inline_b m_bottom_5">Mobile Phone</label>
													<input type="text" id="m_phone_2" name="" class="r_corners full_width">
												</li>
												<li>
													<label for="fax_2" class="d_inline_b m_bottom_5">Fax</label>
													<input type="text" id="fax_2" name="" class="r_corners full_width">
												</li>
											</ul>
										</form>
									</div>
								</div>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Shipment Method</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<figure class="block_select clearfix relative m_bottom_15">
									<input type="radio" checked name="radio_1" class="d_none">
									<img src="images/logo/delivery.png" width="165" height="80" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Deliver</h5>
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer. </p>
									</figcaption>
								</figure>
								<hr class="m_bottom_20">
								<figure class="block_select clearfix relative">
									<input type="radio" name="radio_1" class="d_none">
									<img src="images/logo/pickup.png" alt="" width="165" height="130" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Pick Up</h5>
										<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</p>
									</figcaption>
								</figure>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<figure class="block_select clearfix relative m_bottom_15">
									<input type="radio" checked name="radio_2" class="d_none">
									<img src="images/logo/paypal.png" alt="" width="165" height="80" width="165" height="80" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption class="d_table d_sm_block">
										<div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
											<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Paypal</h5>
											<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
										</div>
										<div class="d_table_cell d_sm_block discount">
											<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_0">Discount/Fee</h5>
											<p class="color_dark">$8.48</p>
										</div>
									</figcaption>
								</figure>
								<hr class="m_bottom_20">
								<figure class="block_select clearfix relative">
									<input type="radio" name="radio_2" class="d_none">
									<img src="images/logo/remitance.jpg" alt="" width="165" height="80" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
									<figcaption>
										<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Remittance</h5>
										<p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
										Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
									</figcaption>
								</figure>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Terms of service</h2>
							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
								<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </p>
								<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. </p>
							</div>
							<h2 class="tt_uppercase color_dark m_bottom_30">Notes and special requests</h2>
							<!--requests table-->
							<table class="table_type_5 full_width r_corners wraper shadow t_align_l">
								<tr>
									<td colspan="2">
										<label for="notes" class="d_inline_b m_bottom_5">Notes and special requests:</label>
										<textarea id="notes" class="r_corners notes full_width"></textarea>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Coupon Discount:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$-74.96</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Subtotal:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$95.00</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Payment Fee:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$6.05</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Shipment Fee:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$0.00</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium">Tax Total:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium color_dark">$17.54</p>
									</td>
								</tr>
								<tr>
									<td class="t_align_r">
										<p class="f_size_large fw_medium scheme_color">Total:</p>
									</td>
									<td>
										<p class="f_size_large fw_medium scheme_color">$101.05</p>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="checkbox" name="checkbox_8" id="checkbox_8" class="d_none"><label for="checkbox_8">I agree to the Terms of Service (Terms of service)</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Confirm Purchase</button>
									</td>
								</tr>
							</table>
						</section>



