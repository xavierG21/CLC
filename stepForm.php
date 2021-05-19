<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <title>View shopping cart</title>
  <link href="style/style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content=''>
    <meta name="keywords" content=''>
    <meta name="description" content=''>
    <link rel="icon" type="image/ico" href="images/clc_logo.png">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/steps_style2.css">

    <!--font include-->
    <link href="css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
  <div class="boxed_layout relative w_xs_auto">
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
                </ul>

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
          <th>Quantity</th>
          <th>Name</th>
          <th>Price</th>
          <th>Total</th>
          <th>Remove</th>
        </tr>
      </thead
>     <tbody>
        <?php
          if(isset($_SESSION["cart_products"])) //check session var
          {
          $total = 0; //set initial total value
          $b = 0; //var for zebra stripe table 
          foreach ($_SESSION["cart_products"] as $cart_itm)
          {
            //set variables to use in content below
          $product_name = $cart_itm["product_name"];
          $product_qty = $cart_itm["product_qty"];
          $product_price = $cart_itm["product_price"];
          $product_code = $cart_itm["product_code"];
          $product_color = $cart_itm["product_color"];
          $subtotal = ($product_price * $product_qty); //calculate Price x Qty
      
          $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
          echo '<tr class="'.$bg_color.'">';
          echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
          echo '<td>'.$product_name.'</td>';
          echo '<td>'.$currency.$product_price.'</td>';
          echo '<td><p class="fw_medium scheme_color">'.$currency.$subtotal.'</p></td>';
          echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
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
        <td colspan="5">
            <span style="float:right;text-align: right;">
            <b><?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></b>
            </span>
        </td>
    </tr>
  
  <tr>
        <td colspan="5">
      <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" name="submit">Update</button>
      <a href="products.php" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Add More Items</a>
            <a href="paypal-express-checkout" ><img src="images/product/paypal.png" width="179" height="36"></a>
        </td>
    </tr>
  </tbody>
  </table>
    <input type="hidden" name="return_url" value="<?php 
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo $current_url; ?>" />
  </form>
  </section>
  </div>
  </div>
  </div>





  </div>
  <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>

  
  <!--scripts include-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/camera.min.js"></script>

    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    <script src="js/jquery.custom-scrollbar.js"></script>
    <script src="js/scripts.js"></script>
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>









  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
