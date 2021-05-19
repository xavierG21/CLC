<?php
session_start();
include_once("config.php");
require 'db_conn.php';


?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
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
		<!--<link rel="stylesheet" type="text/css" media="all" href="css/steps_style.css">
		font includ e-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>

<style>
/*form styles*/

#msform {
	width: 700px;
	left:120px;
	margin: 20px auto;
	text-align: center;
	position: relative;

}
#msform div {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	position: relative;
	left:120px;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 12px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
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

	<!--content-->
	<div class="page_content_offset">
		<div class="container">
			<div class="row clearfix">
				<!--left content column-->
			<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
            <h2 class="tt_uppercase color_dark m_bottom_25" align="center">Cart</h2>
			
	<form method="post" action="cart_update.php">
			
			<table align="center" class="table_type_4 responsive_table full_width r_corners wraper shadow t_align_l t_xs_align_c m_bottom_30">
			<thead>
				<tr class="f_size_large">
					<th>Image</th>
					<th>Name</th>
					<th>Color </th>
					<th>Price</th>
					<th>Quantity </th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
			</thead>			
			<tbody>
				<?php
					include_once("config.php");
					include_once("db_conn.php");
					if(isset($_SESSION["cart_products"])) //check session var
					{
					$total = 0; //set initial total value
					$b = 0; //var for zebra stripe table 
					$icounter=0;
					$sql = "SELECT * FROM products";
					$result = mysqli_query($con,$sql);
					while($array =mysqli_fetch_row($result)){
						$tempo[$icounter]=$array;
						$icounter++;
					}
					foreach ($_SESSION["cart_products"] as $cart_itm)
					{
						//set variables to use in content below
					$product_name = $cart_itm["product_name"];
					$product_qty = $cart_itm["product_qty"];
					$product_price = $cart_itm["product_price"];
					$product_code = $cart_itm["product_code"];
					$product_color = $cart_itm["product_color"];
					$length=sizeof($tempo);

					$forimage='';
					for($il=0;$il<$length;$il++){
						if($product_code==$tempo[$il][1]){
							$forimage=$tempo[$il][4];
							break;
						}
					}
					
					$subtotal = ($product_price * $product_qty); //calculate Price x Qty
					
					$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
					echo '<tr class="'.$bg_color.'">';
					echo '<td align="center"><img src="photo/'.$forimage.'" width="100px" /></td>';
					echo '<td style="width:200px">'.$product_name.'</td>';
					echo '<td>'.$product_color.'</td>';
					echo '<td>'.$currency.$product_price.'</td>';

					$query2="SELECT * from products WHERE product_code = '$product_code'";
					$result2 = mysqli_query($con, $query2);
					 while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
					 	$msgid = $row2['quantity'] ;
					 } 
					 	if ($msgid > $product_qty ){
					 		//echo '<td>Naa</td>';
					echo '<td align="center"><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /> 
						<button class="button_type_1 tr_all_hover r_corners f_left bg_color_orange_1 color_light f_mxs_none m_mxs_bottom_15" name="submit">Update</button>
					</td>';
				 		}else{
				 			echo '<td width="200px"><font color="red"><p>Not enough supply</p></font>
				 			<input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" />
				 			<button class="button_type_1 tr_all_hover r_corners f_left bg_color_orange_1 color_light f_mxs_none m_mxs_bottom_15" name="submit">Update</button>



				 			</td>';
				 			
				 			
				 		}

					echo '<td><p class="fw_medium scheme_color">'.$currency.$subtotal.'</p></td>';
					echo '<td><button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" name="remove_code[]" value="'.$product_code.'">Remove</button></td>';
					echo '</tr>';
					$total = ($total + $subtotal); //add subtotal to total var
					}
					$grand_total = $total + $shipping_cost; //grand total including shipping cost
						foreach($taxes as $key => $value){ //list and calculate all taxes in array
						$tax_amount     = round($total * ($value / 100));
						$tax_item[$key] = $tax_amount;
						$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
					}
		
					$list_tax       = '';
					foreach($tax_item as $key => $value){ //List all taxes
					$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
					}
					$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
					}
				?>
	<tr>
        <td colspan="7">
            <span style="float:right;text-align: right;">
            <b>Amount Payable : 
		  	<?php
			if(isset($grand_total)){
				if($grand_total >= 500 && $grand_total <= 20000){ //Minimum & maximum
		   		
				echo sprintf("Php %01.2f", $grand_total);
				echo "
				</b>
            </span>
        </td>
    </tr>
	
	<tr>
        
		 <td colspan='6'>
			<a href='products.php' class='tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0'>Add More Items</a>
          </td>  
       

        <td colspan='1'>";
        				
								if(isset($_SESSION['sess_user']) != ""){ //IF USER

									echo "
										<button class='button_type_4 tr_all_hover r_corners f_left bg_color_green_1 color_light f_mxs_none m_mxs_bottom_15' name='submit' id='showMe' class='next'>Next</button>
										";
									
									
								}else { 
									echo "
										<button class='button_type_4 tr_all_hover r_corners f_left bg_color_green_1 color_light f_mxs_none m_mxs_bottom_15' name='submit' id='showRegister' class='next'>Next</button>
										";

								}
							
			echo "
        	
        </td>
    </tr>
	</tbody>
	</table>




				";
				}else{
					echo "Php 500 Mininum Purchase is required/Exceeds maximum products";
					echo "
					</b>
            </span>
        </td>
    </tr>
	
	<tr>
        
		 <td colspan='6'>
			<a href='products.php' class='tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0'>Add More Items</a>
          </td>  
       

        
        	
       
    </tr>
	</tbody>
	</table>
					";

				}
			}else{
				echo "<tr><td><a href='products.php' class='tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0'>Add More Items</a></td>
				  ";

				echo "</tr></tbody></table>";
			}	
		   	?>
			
		<input type="hidden" name="return_url" value="<?php 
		$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		echo $current_url; ?>" />

	

	

	</section>
</form>


	<!--right column-->
<aside class="col-lg-3 col-md-3 col-sm-3">
							
	<figure class="widget shadow r_corners wrapper m_bottom_30">
		<figcaption>
			<h3 class="color_light">Notice</h3>
		</figcaption>
		<div class="widget_content">
			<!--Categories list-->
			<ul class="categories_list">
				<li class="active">
					<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_4.png" alt=''>
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Free Delivery</b><br><span class="color_dark">on items worth Php 500</span>
									</span>
					</span>
				</li><br>
				<li class='active'>
					<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_5.png" alt=''>
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Php 20,000 Purchase</b><br><span class="color_dark">Maximum of Php 20,000<br> worth of purchase</span>
									</span>
					</span>					
				</li>

			</ul>
		</div>
	</figure>
</aside>








		</div>
	


		
	</div>

	<div style='width:1000px;' align="center" id='method'>
    <form id="msform">
    	<!-- progressbar -->
		  <ul id="progressbar">
		    
		    <li class="active"><b class='color_dark'>Delivery Method</b></li>
		    <li><b class='color_dark'>Payment Method</b></li>
		  </ul>
        <div class="hideFirst" id="firstSelect" style='height:340px;'>
            <h2 class="fs-title">Delivery Method</h2>
             <h3 class="fs-subtitle">Select whether your order is for delivery or for pick up</h3>
            <ul>
	   			 <li>
	    			<figure class="block_select clearfix relative m_bottom_15">
	    				<input type="radio" id="fdeliver" checked name="radio" class="d_none" value="Delivery">
						<img src="images/logo/delivery.png" width="90" height="80" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
						<figcaption>
							<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Deliver</h5>
						</figcaption>
					</figure>
			
					<figure class="block_select clearfix relative m_bottom_15">
	    				<input type="radio" id="fpickup" name="radio" class="d_none" value="PickUp">
						<img src="images/logo/pickup.png" width="90" height="80" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
						<figcaption>
							<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Pickup</h5>
						</figcaption>
					</figure>
				</li>
			</ul>
             <button data-next="#something" id="my-btn" class='button_type_4 tr_all_hover r_corners f_left bg_color_green_1 color_light f_mxs_none m_mxs_bottom_15' style='position:relative;left:300px' >Next</button>
        </div>
       
        <div class="hideFirst" id="something" style='height:340px;top:100px;position: relative' >
        	<h2 class="fs-title">Payment Mode</h2>
  			  <h3 class="fs-subtitle">Select paypal or remittance for payment</h3>
            <ul>
	    		<li>
	 				<input type='hidden' name='name' value=''/><a href='palawan.php' ><input onclick="window.open('palawan.php', '_blank')" type='image' src='images/palawan.png' id="fpalawan" class='btn btn-success bpalawan tr_all_hover' style="width:200px;height:80px;border-radius: 15px;"/></a><br>
					<a href="paypal-express-checkout" ><img src="images/product/paypal.png" id="fpaypal" width="179" height="36"></a>			
	   			</li>
			</ul>
            
            
        </div>
        
    </form>
    <button id="backButton" class='button_type_4 tr_all_hover r_corners f_left bg_color_green_1 color_light f_mxs_none m_mxs_bottom_15' style='position:relative;left:500px'>Back</button>
    <br><br><br>
</div>

</div>



	
	<div class='row' id='register'>
		<div class='col-md-6 col-md-offset-2' style='border:1px solid darkgrey;border-radius: 15px;box-shadow:6px 6px 5px'>
			<br>
			<div class="alert alert-danger">
  				<strong>Please Register First after adding products to your Cart. </strong> 
			</div>
			<h2 class='tt_uppercase m_bottom_20 color_dark heading1' align='center'>Register</h2>
			<div>
				<form method='POST' action='insert_user.php'>
					

												
						<div class='control-group'>
					      <!-- First Name -->
					      <label class='control-label'  for='firstname'>First Name</label>
					      <div class='controls'>
					        <input type='text' name='fname' id='fname' class='form-control' >
					      </div>
					    </div>

					    <br>

					    <div class='control-group'>
					      <!-- Last Name -->
					      <label class='control-label'  for='lastname'>Last Name</label>
					      <div class='controls'>
					        <input type='text' name='lname' id='lname' class='form-control'>
					      </div>
					    </div>

					    <br>

					    <div class='control-group'>
					      <!-- User Name -->
					      <label class='control-label'  for='username'>User Name</label>
					      <div class='controls'>
					        <input type='text' name='username' id='username' class='form-control' pattern="[^'^$& @#*=.,/:;!?\x22]+" title="Must not contain a space or special characters" >
					        <p class='help-block scheme_color'><em>Username can contain any letters or numbers, without spaces</em></p>
					      </div>
					    </div>



					    <div class='control-group'>
					      <!-- Password -->
					      <label class='control-label'  for='password'>Password</label>
					      <div class='controls'>
					        <input type='password' name='password' id='password' class='form-control' pattern=".{6,}"   required title="6 characters minimum">
					        <p class='help-block scheme_color'><em>Password should be at least 6 characters</em></p>
					      </div>
					    </div>

					     <div class='control-group'>
					      <!-- Confirm Password -->
					      <label class='control-label'  for='Confirmpassword'>Confirm Password</label>
					      <div class='controls'>
					        <input type='password' name='confirmPassword' id='confirmPassword' class='form-control' pattern=".{6,}"   required title="6 characters minimum">
					      </div>
					    </div>

					    <br>
					     <div class='control-group'>
					      <!-- Email -->
					      <label class='control-label'  for='email'>Email Address</label>
					      <div class='controls'>
					        	<input type='email' name='email' id='email' class='form-control'>
					      </div>
					    </div>
					    <br>
					    <div class='control-group'>
					      <!-- Address -->
					      <label class='control-label'  for='address'>Current Address</label>
					      <div class='controls'>
					        	<input type='text' name='address' id='address' class='form-control' placeholder="Ex: #123 - Magallanes Street, Cebu City">
					        	<p class='help-block scheme_color'><em>Please state your current address including street number.</em></p>
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Contact -->
					      <label class='control-label'  for='contact'>Contact Number</label>
					      <div class='controls'>
					        	<input type='text' name='contact_no' id='username' placeholder='Ex: 0912345678 or 2374312' class='form-control' maxlength="11" pattern="(?=.*\d).{8,}" title='Must enter a number'>
					        	<p class='help-block scheme_color'>Cellphone/Telephone</p>
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Terms and Condition -->
					     
					      <div class='controls'>
							<input type='checkbox' class='d_none' id='checkbox_10'><label for='checkbox_10'>Accept <a href='terms_conditions.php'>Terms & Conditions</a></label>
					        	
					      </div>
					    </div>

					    <div class='control-group'>
					      <!-- Button -->
					      <div class='controls'>
					        <button class='button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15' name='submit'>Register</button>
					        <br><br><br>
					      </div>
					    </div>




		
					
					
				</form>
			</div>
			<div class="alert alert-info">
  				<strong>Already have an account? </strong> <a href='login.php'>Login Here</a>
			</div>
			
				

</div>
</div>






<br>
</div>

<!--product brands-->
					
			<!--markup footer-->
			<?php include('footer.php'); ?>	

			
		</div>

		<!--social widgets-->
		<?php include('social_widgets.php'); ?>	
		
		<!--custom popup-->



<!--scripts include-->
		<script src="js/jquery.js"></script>
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
		<script src="js/jquery.min.js"> </script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<script src="js/sub.js"></script>
		 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
<script type="text/javascript">
	$("#method").hide();
	$("#register").hide();


	 $(document).ready(function(){
	 	 $('#showMe').click(function(e){
        	e.preventDefault();
        	$("#method").slideToggle();
        })

	 	  $('#showRegister').click(function(e){
        	e.preventDefault();
        	$("#register").show();
        })
	
	  });
	 $(document).ready(function(){
        
        $('.hideFirst:not(:first)').hide();
        var history = [];
        
        $('#my-btn').click(function(e){
            e.preventDefault();
            showNext($(this));
        });
        
        $('.my-select').change(function(){
            showNext($(this));
        });
        
        function showNext(el){
            if(el.data('next')){
            	$("#progressbar li").eq($("div").index(el)).addClass("active");
                $('.hideFirst').hide();
                $('#backButton').show();
                $(el.data('next')).show();
                history.push(el.closest('.hideFirst'));
            }
        }
        
        $('#backButton').click(function(e){
        	$("#progressbar li").eq($("div").index(e)).removeClass("active");
            $('.hideFirst').hide();
            history.pop().show();
            history.length || $(this).hide();
        }).hide();
        
    });




</script>
</body>
</html>

