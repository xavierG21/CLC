<?php
$currency = 'P'; //Currency Character or code

//MySql 
$db_username 	= 'root';
$db_password 	= '';
$db_name 		= 'clc';
$db_host 		= 'localhost';

//paypal settings
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'xavierkpop_clc_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= '9P7JAL3A7SK874EQ'; //Paypal API password
$PayPalApiSignature 	= 'AQ1275qfpGpmbIFONvaXDuqfhxA1AhMPzaZI5mFj9N7LuTyikhA1WiXV'; //Paypal API Signature
$PayPalCurrencyCode 	= 'PHP'; //Paypal Currency http_response_code(code)	
$PayPalReturnURL 		= 'http://localhost/clc/paypal-express-checkout/'; //Point to paypal-express-checkout page
$PayPalCancelURL 		= 'http://localhost/clc/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel

//Additional taxes and fees											
$HandalingCost 		= 0.00;  //Handling cost for the order.
$InsuranceCost 		= 0.00;  //shipping insurance cost for the order.
$shipping_cost      = 0.00; //shipping cost
$ShippinDiscount 	= 0.00; //Shipping discount for this order. Specify this as negative number (eg -1.00)
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 0, 
                            'Service Tax' => 0
                            );

//connection to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
