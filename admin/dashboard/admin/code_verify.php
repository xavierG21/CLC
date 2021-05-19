<html>
	<head>
		<title>Palawan Code Verifier</title>
		<link rel="icon" type="image/ico" href="photo/clc_logo.png">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap2.min.css">
		<style>
			

		</style>
	</head>
<body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Palawan Image Receipt</h5>
      </div>
      <div class="modal-body">
      	<div align="center">
      
       

       <?php
       require_once 'db_conn.php';

       $id = $_GET['id'];

       echo "<br>
       <img src='../../../photo/".$id."' width='500px' height='500px'>
     <br>";




       ?>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='return'>Return to Website</button>
      </div>
    </div>
  </div>
</div>
	


</body>
</html>
<script src="js/modal/jquery.min.js"> </script>
<script src="js/modal/bootstrap.min.js"></script>
<script>
	$('#exampleModal').modal('show');

	$('#return').click(function(){
		window.location ='view_pay.php';
		
	});

  






</script>