<?php
$orderNum = $_GET['id'];

?>



<html>
	<head>
		<title>PayPal Success</title>
		<link rel="icon" type="image/ico" href="../images/payment_img_1.png">
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap2.min.css">
		<style>
			

		</style>
	</head>
<body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PayPal Success</h5>
      </div>
      <div class="modal-body">
      	<div align="center">
      	<img src='../images/PayPal.png' width="120px" height="100px"></div>
       <h4> Products paid successfully. </h4>
       <p>Please wait for the approval of the admin regarding of your products.</p>
       <p>Check your account from time to time. You will either receive a text or a message in your email. Thank you!</p>
      </div>
      <div class="modal-footer">

        <!--<button onclick="window.open('../invoice/index.php?id=<?php $orderNum ?>', '_blank')" class="btn btn-warning">See Invoice Here</button>-->
        <button type="button" class="btn btn-primary" id='return'>Return to Website</button>
      </div>
    </div>
  </div>
</div>
	


</body>
</html>
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"></script>
<script>
	$('#exampleModal').modal('show');

	$('#return').click(function(){
		window.location ='../index.php';
		
	});
</script>