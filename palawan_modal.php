<html>
	<head>
		<title>Palawan Express Code</title>
		<link rel="icon" type="image/ico" href="images/clc_logo.png">
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
        <h5 class="modal-title" id="exampleModalLabel">Palawan Express Code</h5>
      </div>
      <div class="modal-body">
        <form action='insert_palawn_code.php' method='POST' class='form-horizontal form-groups-bordered' enctype='multipart/form-data'>

        <div class='form-group'>
          <label for='field-1' class='col-sm-3 control-label'>Palawan Code</label>          
            <div class='col-sm-5'>
              <input type='text' name='p_code' id='textfield5' class='form-control' maxlength='16' placeholder='xxx-xx-xxxxx-xxx' required>
            </div>
          
        </div>
        
        <div class='form-group'>    
            <div class='col-sm-offset-3 col-sm-5'>
              <div class='city'></div>
            </div>
        </div>        

        <div class='form-group'>    
            <div class='col-sm-offset-3 col-sm-5'>
              <input type='submit' class='btn btn-primary' name='btn_upload' value='Save'>
            </div>
        </div>
      </form>
       



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='return'>Return to Website</button>
      </div>
    </div>
  </div>
</div>
	


</body>
</html>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<script>
	$('#exampleModal').modal('show');

	$('#return').click(function(){
		window.location ='myOrder.php';
		
	});
</script>