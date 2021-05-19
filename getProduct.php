<?php
 
 require_once 'db_connect.php';
 require('config.php');
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 
 if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 $query = "SELECT * FROM products WHERE id='$id'";
 $results = mysqli_query($conn,$query);
//$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
//$products_item .= <<<EOT
	echo "
 <div class='clearfix'>
 <form method='post' action='cart_update.php'>
	<div class='custom_scrollbar'>
		<!--left popup column-->
		<div class='f_left half_column'>
			<div class='relative d_inline_b m_bottom_10 qv_preview'>
				
				<img src='photo/{$obj->product_img_name}' class='tr_all_hover' alt='' width='300px' height='300px'>
			</div>
		
							
	</div>
				<!--right popup column-->
				<div class='f_right half_column'>
					<!--description-->
					<h2 class='m_bottom_10 color_dark fw_medium'>{$obj->product_name}</h2>
					<div class='m_bottom_10'>
											
				</div>
					
						<table class='description_table m_bottom_5'>
							
							<tr>
								<td>Availability:</td>
								";
								if ($obj->quantity > 0 ){
									echo "<td><span class='color_green'>in stock</span> {$obj->quantity} item(s)</td>
									</tr>
						</table>
					<h5 class='fw_medium m_bottom_10'>Description</h5>
						<pre><p class='m_bottom_10'>{$obj->product_desc}</p></pre>
					<hr class='divider_type_3 m_bottom_15'>
						<div class='m_bottom_15'>
							<span class='v_align_b f_size_big m_left_5 scheme_color fw_medium'>{$currency}{$obj->price}</span>
						</div>
						<table class='description_table type_2 m_bottom_15'>
							<tr>
								<td class='v_align_m'>Color:</td>
								<td class='v_align_m'>
									<div class='custom_select f_size_medium relative d_inline_middle'>
										<select name='product_color'>
											<option value='default'>Default</option>
											<option value='color_one'>Color 1</option>
											<option value='color_two'>Color 2</option>
											<option value='color_three'>Color 3</option>
										</select>
									</div>
								</td>
							</tr>
						
							<tr>
								<td class='v_align_m'>Quantity:</td>
								<td class='v_align_m'>
									<input type='text' name='product_qty' size='2' value='1' class='f_left'>
								</td>
							</tr>
						</table>
						<div class='clearfix m_bottom_15'>
							<input type='hidden' name='product_code' value='{$obj->product_code}' />
							<input type='hidden' name='type' value='add' />
							<input type='hidden' name='return_url' value='{$current_url}' />
				
						
						<button type='submit' class='add_to_cart button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0' id='add' >Add to Cart</button>
						<button class='button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative'><i class='fa fa-question-circle f_size_big'></i><span class='tooltip tr_all_hover r_corners color_dark f_size_small'>Ask a Question</span></button>
									
						</div>

					</div>
				</div>
			</div>
		</div>
	</form>
</div>










									";

								}else{
									echo "<td><strong><font color='red'>Out of Stock</font></strong></td>";
								}


//EOT;
}
//$products_item .= '</ul>'; //temporary br for now

//echo $products_item;
}
?>