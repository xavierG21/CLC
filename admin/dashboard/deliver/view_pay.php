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

		<h3>Delivery</h3>
		
		<hr />
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					
					<th>Order Number</th>
					<th>Customer Name</th>
					
					<th>paymentDate</th>
					<th>Customer Address</th>
					<th>Customer Contact Number</th>
					
					<th>Code</th>
					<th>mode</th>
					<th>Total Amount</th>
					
					
					
					<th>Action</th>
				</tr>
			</thead>
				<tbody>

						<?php
							
							$query  = "SELECT * FROM `payments` p INNER join orders o ON p.orderNumber = o.orderNumber 
							INNER JOIN customers c ON o.customerID=c.user_id WHERE o.status = 'Approve' and o.method = 'delivery'";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                
											echo "<td>" . $row['orderNumber'] . "</td>";

											echo "<td>" . $row['fname'] ." ". $row['lname'] . " </td>";
											
											echo "<td>" . $row['paymentDate'] . " </td>";
											
											echo "<td>" . $row['address'] . " </td>";

											echo "<td>" . $row['contact_no'] . "  </td>";

											echo "<td>" . $row['code'] . " </td>";

											echo "<td>" . $row['mode'] . " </td>";

											echo "<td align='right'><font color='red'>Php " . $row['amount'] . "  </font></td>";

											//echo "<td>" . $row['code'] . "  </td>";


											
							                $msgid = $row['orderNumber'];
											$msgid2 = $row['contact_no'];
											
											echo "
											<td align='center'>
											
											<form action='update_approve.php' method='post'>
											<input type='hidden' name='name' value='" . $msgid . "'/>
											<input type='hidden' name='name2' value='" . $msgid2 . "'/>
											 <input type='submit' value='Deliver' class='btn btn-success'/></form><br>
											 
											
											 
											 <form action='view_order_details.php' method='post' onSubmit='return ConfirmDelete();'>
											 <input type='hidden' name='name' value='" . $msgid. "'/>
											 <input type='submit' value='View Products' class='btn btn-info'/></form>
											
											</td>
											</tr>";
											
											/*
											
							               	 	
							                	$msgid2 = $row['customerID']; */
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                /*echo "<td>
											Approve or Denied?<br>
											<form action='update_order.php' method='post' onSubmit='return ConfirmDelete();'>
												<input type='hidden' name='name' value='".$msgid."'/>
																						
											<input type='submit' value='Yes' name='submit' class='btn btn-success'>
											<input type='submit' value='No' name='submit' class='btn btn-danger'>
											<br><br>
											<input type='text' name='comment' placeholder='Enter Comment'/>
											
											</form>
											<br><br>
											
											</td></tr>"; */


							                
							            }
							       
							    
							
						?>									
					</tbody>
				</table>

<script type="text/javascript">
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





