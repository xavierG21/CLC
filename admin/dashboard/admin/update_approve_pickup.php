<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();

			if (isset($_POST['name'])) 
			{		
				$number = ($_POST['name2']);
				$ordNum = ($_POST['name']);
				$update = "Approve";
				date_default_timezone_set('Asia/Manila');
				$day = date("Y-m-d h:i:sa");
				$say = "As of " .$day. " your order has been approved.You can now claim your order in our store.";
				//echo $say;
				
				//$xa = 'TR-XAVIE048554_3T6Z5';
				//$xavier = 'TR-XAGON141432_HQLZ5';
				$result = itexmo($number,$say ,"TR-XAVIE048554_3T6Z5");
				if ($result == ""){
				echo "iTexMo: No response from server!!!
				Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
				Please CONTACT US for help. ";	
				}else if ($result == 0){
				//echo "Message Sent!";
				}
				else{	
				echo "Error Num ". $result . " was encountered!";
				}
				
				//mysqli_query($con, "UPDATE orders SET shippedDate='$day',status='$update',admin_comment='$say' WHERE orderNumber='$ordNum'");
				//echo "<head><script>alert('Successfully Delivered.');</script></head></html>";
				//echo "<meta http-equiv='refresh' content='0; url=view_delivery.php'>";
			}
?>
<?php
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
?>
