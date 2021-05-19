

<li class="f_xs_none m_xs_bottom_5"><a href="index.php" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
	<!--sub menu
	<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
		<ul class="sub_menu">
		</ul>
	</div>-->
</li>

<li class="relative f_xs_none m_xs_bottom_5">
	<a href="shop.php" class="tr_delay_hover color_light tt_uppercase"><b>Branches</b></a>
		
</li>
								
<li class="relative f_xs_none m_xs_bottom_5">
	<a href="products.php" class="tr_delay_hover color_light tt_uppercase"><b>Products</b></a>
		

					
</li>

<li class="relative f_xs_none m_xs_bottom_5">
	<a href="aboutus.php" class="tr_delay_hover color_light tt_uppercase"><b>About Us</b></a>
</li>
								
<li class="relative f_xs_none m_xs_bottom_5">
	<a href="contactus.php" class="tr_delay_hover color_light tt_uppercase"><b>Contact Us</b></a>
</li>

<li class="relative f_xs_none m_xs_bottom_5">
	<!--shopping cart-->
	<li class="m_left_5 relative container3d" id="shopping_button">
		<a role="button" href="view_cart.php" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
			<span class="d_inline_middle shop_icon m_mxs_right_0">
				<i class="fa fa-shopping-cart"></i>
				<?php
				if(isset($_SESSION["cart_products"])){
				echo '<span class="count tr_delay_hover type_2 circle t_align_c">'.count($_SESSION["cart_products"]).'</span>';
				}else{
					echo '<span class="count tr_delay_hover type_2 circle t_align_c">0</span>';
				}
				?>
			</span>
				<b class="d_mxs_none">Cart</b>
		</a>
	<div class="shopping_cart top_arrow tr_all_hover r_corners">
		<div class="clear-float"></div>
			<div id="shopping-cart">
				<b><h2 align="center">Products </b></h2>
					<!-- View Cart Box Start -->
					<?php
					if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
					{
						echo '<div class="cart-view-table-front" id="view-cart">';
						echo '<h5>Your Shopping Cart</h5>';
						echo '<form method="post" action="cart_update.php">';
						echo '<table width="100%"  cellpadding="6" cellspacing="0">';
						echo '<tbody>';

						$total =0;
						$b = 0;
						foreach ($_SESSION["cart_products"] as $cart_itm)
						{
							$product_name = $cart_itm["product_name"];
							$product_qty = $cart_itm["product_qty"];
							$product_price = $cart_itm["product_price"];
							$product_code = $cart_itm["product_code"];
							$product_color = $cart_itm["product_color"];
							$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
							echo '<tr class="'.$bg_color.'">';
							echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
							echo '<td>'.$product_name.'</td>';
							echo '<td><button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" name="remove_code[]" value="'.$product_code.'">Remove</button></td>';
							echo '</tr>';
							$subtotal = ($product_price * $product_qty);
							$total = ($total + $subtotal);
						}
						echo '<td colspan="4">';
						echo '<button class="button_type_1 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_10" type="submit">Update
							  </button><a href="view_cart.php" class="tr_all_hover r_corners button_type_1 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Checkout</a>';
						echo '</td>';
						echo '</tbody>';
						echo '</table>';
						
						$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
						echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
						echo '</form>';
						echo '</div>';

					}
					?>
			<div id="cart-item"></div>
		</div>
							
</li>

						
	</ul>
</nav><!--Closing Tag in index.php-->
	<button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
		<i class="fa fa-search"></i>
	</button>
</div><!--Closing Tag in index.php-->



	</section>
</header>