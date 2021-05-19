<?php
require 'db_conn.php';
//var_dump($_POST);	
page_protect();
$number = ($_POST['name2']);
$ordNum = ($_POST['name']);
$comment = "Admin Denied your order please call our hotline";
if (isset($_POST['name2'])) 
	 {

            $update = "Denied";
			date_default_timezone_set('Asia/Manila');
            $day = date("Y-m-d h:i:sa");
            $say = "As of " .$day. " your order has been denied. Call our hotline number for any concern.";
            //echo $say;
            $result = itexmo($number,$say,"TR-XAGON141432_HQLZ5");
			if ($result == ""){
			echo "iTexMo: No response from server!!!
			Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
			Please CONTACT US for help. ";	
			}else if ($result == 0){
			echo "Message Sent!";
			}
			else{	
			echo "Error Num ". $result . " was encountered!";
			}
			    		
            mysqli_query($con, "UPDATE orders SET status='$update',admin_comment='$comment',deniedDate='$day' WHERE orderNumber='$ordNum'");
            echo "<head><script>alert('Successfully Denied.');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=view_reg.php'>"; 
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