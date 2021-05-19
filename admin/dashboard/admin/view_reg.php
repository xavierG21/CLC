<?php
require 'db_conn.php';
page_protect();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>ADMIN</title>
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">
    	<link rel="icon" type="image/icon" href="../../../images/clc_logo.png">

    	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>

    <script src="../../neon/js/jquery-1.10.2.min.js"></script>

	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.slider.js"></script>


    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city").html(html);
		} 
		});

		});
		});
		    </script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		$(".country1").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city1").html(html);
		} 
		});

		});
		});
    </script>


    <SCRIPT LANGUAGE="JavaScript">
		function checkIt(evt) {
		    evt = (evt) ? evt : window.event
		    var charCode = (evt.which) ? evt.which : evt.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		        status = "This field accepts numbers only."
		        return false
		    }
		    status = ""
		    return true
		}
	</SCRIPT>

	<script type="text/javascript" src="webcam.js"></script>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../img/Central.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>ORDERS</h3>

		<hr />
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th>Order Number</th>
					<th>Order Date</th>
					
					
					
					<th>Customer Name</th>
					<th>Contact</th>
					
					<th>Payment Mode</th>
					<th>Status</th>
					
					<th>Method</th>
					
					
					<th>Action</th>
				</tr>
			</thead>
				<tbody>

						<?php
							
							$query  = "Select * from orders o inner join customers c on o.customerID = c.user_id WHERE o.status = 'In process' ";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                
											echo "<td>" . $row['orderNumber'] . "</td>";
											
											echo "<td>" . $row['orderDate'] . " </td>";
											
											


											//echo "<td>" . $row['customerID'] . " </td>";

											echo "<td>" . $row['fname'] ." ". $row['lname'] . " </td>"; 
											
											echo "<td>" . $row['contact_no'] . " </td>";

											echo "<td>" . $row['method'] . "  </td>";

											echo "<td>" . $row['status'] . " </td>";

											
							                
											
											if($row['mode'] == "Palawan"){
												echo "<td align='center'><img src='../../../images/palawan.png' width='100px' height='50px'></td>";
											}else{
												echo "<td align='center'><img src='../../../images/paypal_logo.png' width='100px' height='50px'></td>";
											}
											
							               	 	$msgid = $row['orderNumber'];
							                	$msgid2 = $row['contact_no'];
												//$msgid3 = $row['method'];
												
												
												if ($row['method'] == 'delivery'){
												
												echo "
												<td align='center'>
												<h5 align='center'>Accept Order?</h5>
												<div class='row' align='center'>

													<div class='col-md-3 col-md-offset-3' >
														<form action='update_approve.php' method='post'>
														<input type='hidden' name='name' value='" . $msgid . "'/>
														<input type='hidden' name='name2' value='" . $msgid2 . "'/>
														<input type='submit' value='Approve' class='btn btn-success'/></form>
												 	</div>

												 	<div class='col-md-3' border='1px solid black'>
														<form action='update_denied.php' method='post'>
														<input type='hidden' name='name' value='" . $msgid . "'/>
														<input type='hidden' name='name2' value='" . $msgid2 . "'/>
														<input type='submit' value='Deny' class='btn btn-danger'/></form><br>
													</div>
												</div>

												
												
												<h5 align='center'>View Products</h5>
												<form action='view_order_details.php' method='post' onSubmit='return ConfirmDelete();'>
												<input type='hidden' name='name' value='" . $msgid. "'/>
												<input type='submit' value='View Products' class='btn btn-info'/></form>
												
												</td>
												</tr>";
											}else if($row['method'] == 'pick-up'){
												
												echo "
												<td align='center'>
												<h5 align='center'>Accept Order?</h5>
												<div class='row' align='center'>

													<div class='col-md-3 col-md-offset-3' >
														<form action='update_approve.php' method='post'>
														<input type='hidden' name='name3' value='" . $msgid . "'/>
														<input type='hidden' name='name4' value='" . $msgid2 . "'/>
														<input type='submit' value='Approve' class='btn btn-success'/></form>
												 	</div>

												 	<div class='col-md-3' border='1px solid black'>
														<form action='update_denied.php' method='post'>
														<input type='hidden' name='name' value='" . $msgid . "'/>
														<input type='hidden' name='name2' value='" . $msgid2 . "'/>
														<input type='submit' value='Deny' class='btn btn-danger'/></form><br>
													</div>
												</div>

												
												
												<h5 align='center'>View Products</h5>
												<form action='view_order_details.php' method='post' onSubmit='return ConfirmDelete();'>
												<input type='hidden' name='name' value='" . $msgid. "'/>
												<input type='submit' value='View Products' class='btn btn-info'/></form>
												
												</td>
												</tr>";
												
											}
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                /* echo "<td align='center'>
											
											<form action='update_order.php' method='post' onSubmit='return ConfirmDelete();'>
												<input type='hidden' name='name' value='".$msgid."'/>
																						
											<input type='submit' value='Yes' name='submit' class='btn btn-success'>
											<input type='submit' value='No' name='submit' class='btn btn-danger'>
											<br><br>
											<input type='text' name='comment' placeholder='Enter Comment'/>
											
											</form>
											<br><br>
	
											<form action='view_order_details.php' method='post' onSubmit='return ConfirmDelete();'>
											<input type='hidden' name='name' value='" . $msgid. "'/>
											<input type='submit' value='View Products' class='btn btn-info'/></form>

											</td></tr>"; */


							                
							            }
							       
							    
							
						?>									
	</tbody>
		</table>

		

		





  <div class="modal fade in" id="modal-1" style="display: block;"> 
    	<div class="modal-dialog"> 
    		<div class="modal-content"> 
    			<div class="modal-header"> 
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
    				<h4 class="modal-title">Confirm Delivery</h4> </div> <div class="modal-body">
Deliver Products?

</div> 
<div class="modal-footer"> 
	<button type="button" class="btn btn-default" data-dismiss="modal" id='close'>Close</button> 

</div> 
</div> 
</div> 
</div>






<script type="text/javascript">
	$('#modal-1').hide();

	$(document).ready(function(){

	$('#button1').click(function(event){


		$('#modal-1').fadeIn(1000);


	});

	$('#close').click(function(event){


		$('#modal-1').fadeOut();


	});

	$('.close').click(function(event){


		$('#modal-1').fadeOut();


	});
	});

	jQuery(document).ready(function($)
	{
		$("#table-1").dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>

			<?php include('footer.php'); ?>
    	</div>

     <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>

	<link rel="stylesheet" href="../../neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="../../neon/js/select2/select2.css"  id="style-resource-2">

	<script src="../../neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
	<script src="../../neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
	<script src="../../neon/js/select2/select2.min.js" id="script-resource-9"></script>

        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>






    </body>
</html>




