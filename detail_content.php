<?php
		
$results = $mysqli->query("SELECT * FROM products WHERE id =$id");
if($results){ 
//$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{


//$products_item .= <<<EOT
echo "
<div class='container' >
	<form method='post' action='cart_update.php'>
		<div class='col-md-6 relative shadow r_corners wrapper m_bottom_15' align='center' style='padding:20px;background-color:white'>
			
			<div class='mySlides'>
				<div class='numbertext'>1 / 4</div>
					<img src='photo/{$obj->product_img_name}' class='tr_all_hover' alt='' width='300' height='400' id='myimage' align='center' style='border:1px solid gray;border-radius:10px;'>						
			</div>

			<div class='mySlides'>
				<div class='numbertext'>2 / 4</div>
					<img src='photo/{$obj->color_one}' class='tr_all_hover' alt='' width='300' height='400' id='myimage' align='center' style='border:1px solid gray;border-radius:10px;'>					
			</div>

			<div class='mySlides'>
				<div class='numbertext'>3 / 4</div>
					<img src='photo/{$obj->color_two}' class='tr_all_hover' alt='' width='300' height='400' id='myimage' align='center' style='border:1px solid gray;border-radius:10px'>						
			</div>

			<div class='mySlides'>
				<div class='numbertext'>4 / 4</div>
					<img src='photo/{$obj->color_three}' class='tr_all_hover' alt='' width='300' height='400' id='myimage' align='center' style='border:1px solid gray;border-radius:10px'>						
			</div>

			  <!-- Next and previous buttons -->
 			 <a class='prev' onclick='plusSlides(-1)' style='border:1px solid gray;border-radius:10px'>&#10094;</a>
  			 <a class='next' onclick='plusSlides(1)' style='border:1px solid gray;border-radius:10px'>&#10095;</a>
		

			<!--carousel-->
							<div class='row'><br>
								<div class='col-md-10 col-md-offset-1'>
								<div class='column'  style='border:1px solid gray;border-radius:10px;padding:5px'>
							      <img class='demo cursor' src='photo/{$obj->product_img_name}' style='width:50%' onclick='currentSlide(1)' width='100px' height='100px'>
							    </div>
							    <div class='column'  style='border:1px solid gray;border-radius:10px;padding:5px'> 
							      <img class='demo cursor' src='photo/{$obj->color_one}' style='width:50%' onclick='currentSlide(2)' width='100px' height='100px'>
							    </div>
							    <div class='column'  style='border:1px solid gray;border-radius:10px;padding:5px'>
							      <img class='demo cursor' src='photo/{$obj->color_two}' style='width:50%' onclick='currentSlide(3)' width='100px' height='100px'>
							    </div>
							    <div class='column'  style='border:1px solid gray;border-radius:10px;padding:5px'>
							      <img class='demo cursor' src='photo/{$obj->color_three}' style='width:50%' onclick='currentSlide(4)' width='100px' height='100px'>
							    </div>
							   </div>
								
							</div>
			<!--carousel-->
</div>

<div class='col-md-6'>
	<div class='p_top_10 t_xs_align_l r_corners' style='background-color: white;padding:30px'>
		<!--description-->
		<h2 class='color_dark fw_medium m_bottom_10'> {$obj->product_name} </h2>
		<div class='m_bottom_10'>			
		</div>

		<hr class='m_bottom_10 divider_type_3'>

		<table class='description_table m_bottom_10'>
			<tr>
				<td>Availability:</td>
				";
				if ($obj->quantity > 0){
					echo "
					<td><span class='color_green'>in stock</span> {$obj->quantity} item(s)</td>
			</tr>		
		</table>

		<h5 class='fw_medium m_bottom_10'>Description</h5>
		<pre><p class='m_bottom_10'>  	{$obj->product_desc} 	</p></pre>

		<hr class='divider_type_3 m_bottom_15'>
			
		<div class='m_bottom_15'>
			<span class='v_align_b f_size_big m_left_5 scheme_color fw_medium'>{$currency}{$obj->price}</span>
		</div>

		<table class='description_table type_2 m_bottom_15'>
			<tr>
				<td class='v_align_m'>Color:</td>
				<td class='v_align_m'>
					<div>
						
							<select name='product_color' style='border:1px solid grey;border-radius:5px;height:30px'>
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

		<div class='d_ib_offset_0 m_bottom_20 r_corners' style='background-color: white;padding:20px'>
			<input type='hidden' name='product_code' value='{$obj->product_code}' />
			<input type='hidden' name='type' value='add' />
			<input type='hidden' name='return_url' value='{$current_url}' />

			<div class='col-md-12'><button type='submit' class='add_to_cart button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0' id='add' >Add to Cart</button>
	
			<button class='button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative'><i class='fa fa-question-circle f_size_big'></i><span class='tooltip tr_all_hover r_corners color_dark f_size_small'>Ask a Question</span></button>
			</div> 
							
		</div>
</div><!-- col-md 6 ni nga div -->

	</form>
</div>



</div><br>

					";

				}else{
					echo "<td><strong><font color='red'>Out of Stock</font></strong></td>
					</tr>
					</table>
					
					</div></form></div>
					</div><br>
					";
				}
				



//EOT;
}
//$products_item .= '</ul><br><br>'; //temporary br for now

//echo $products_item;
}
?>
