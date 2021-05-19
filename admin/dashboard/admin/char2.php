<div class="row"> 
	<div class="col-md-12"> 
	<div class="panel panel-default" data-collapsed="0" style="position: static;"><!-- to apply shadow add class "panel-shadow" --> <!-- panel head --> 
		<div class="panel-heading"> 
			<div class="panel-title"><h4><b>Approve Status Order</b></h4></div> 
				<div class="panel-options"> 
				<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg">
					<i class="entypo-cog"></i>
				</a> 
				<a href="#" data-rel="collapse">
					<i class="entypo-down-open"></i>
				</a> 
				<a href="#" data-rel="reload">
					<i class="entypo-arrows-ccw"></i>
				</a> 
				<a href="#" data-rel="close">
					<i class="entypo-cancel"></i>
				</a> 
			</div>
		</div> <!-- panel body --> 
		
		<div class="panel-body">

	
	
		
		<table class="table table-bordered datatable" id="table-2">
			<thead>
				<tr>
					<th>Order Number</th>

					<th>Approved Date</th>

					<th>Status</th>
				
					<th>Received Method</th>
					<th>Payment Mode</th>
					
					
					
				</tr>
			</thead>
				<tbody>

						<?php


							

							$day = date("Y-m-d");
							$query="SELECT * from orders WHERE status = 'Approve' order by orderDate asc";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                
							            	echo "<td>" . $row['orderNumber'] . " </td>";

							            	echo "<td>" . $row['approvedDate'] . " </td>";

							            	echo "<td>" . $row['status'] . " </td>";


							            	/*//echo "<td>" . $row['orderDate'] ." ". $row['lname'] . " </td>";

							            	echo "<td>" . $row['product_code'] . " </td>";

											echo "<td>" . $row['product_name'] . "</td>";
											
											echo "<td>" . $row['quantityOrdered'] . " </td>";

											echo "<td>" . $row['priceEach'] . " </td>"; */
											
											echo "<td>" . $row['method'] . " </td>";

											echo "<td>" . $row['mode'] . " </td>";
											
											//echo "<td>" . $row['admin_comment'] . " </td>";
											
							                
											
											
											
							                //x$msgid = $row['user_id'];
							                
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "</tr>";
							                
							            }
							       
							    
							
						?>									
					</tbody>
				</table>



</div> 
</div> 
</div> 



		
<div class="row"> 
	<div class="col-md-12"> 
	<div class="panel panel-default" data-collapsed="0" style="position: static;"><!-- to apply shadow add class "panel-shadow" --> <!-- panel head --> 
		<div class="panel-heading"> 
			<div class="panel-title"><h4><b>Denied Status Orders</b></h4></div> 
				<div class="panel-options"> 
				<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg">
					<i class="entypo-cog"></i>
				</a> 
				<a href="#" data-rel="collapse">
					<i class="entypo-down-open"></i>
				</a> 
				<a href="#" data-rel="reload">
					<i class="entypo-arrows-ccw"></i>
				</a> 
				<a href="#" data-rel="close">
					<i class="entypo-cancel"></i>
				</a> 
			</div>
		</div> <!-- panel body --> 
		
		<div class="panel-body">

	
	
		
		<table class="table table-bordered datatable" id="table-2">
			<thead>
				<tr>
					<th>Order Number</th>

					<th>Denied Date</th>

					<th>Status</th>
				
					<th>Received Method</th>
					<th>Payment Mode</th>
			
					
					
				</tr>
			</thead>
				<tbody>

						<?php


							

							$day = date("Y-m-d");
							$query2="SELECT * from orders WHERE status = 'Denied' order by orderDate asc";
							//echo $query;
							$result2 = mysqli_query($con, $query2);
		

							
							        
							            while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
							                
							            	echo "<td>" . $row2['orderNumber'] . " </td>";

							            	echo "<td>" . $row2['a'] . " </td>";

							            	echo "<td>" . $row2['status'] . " </td>";


							            	/*//echo "<td>" . $row['orderDate'] ." ". $row['lname'] . " </td>";

							            	echo "<td>" . $row['product_code'] . " </td>";

											echo "<td>" . $row['product_name'] . "</td>";
											
											echo "<td>" . $row['quantityOrdered'] . " </td>";

											echo "<td>" . $row['priceEach'] . " </td>"; */
											
											echo "<td>" . $row2['method'] . " </td>";

											echo "<td>" . $row2['mode'] . " </td>";
											
											//echo "<td>" . $row2['admin_comment'] . " </td>";
											
							                
											
											
											
							                //x$msgid = $row['user_id'];
							                
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "</tr>";
							                
							            }
							       
							    
							
						?>									
					</tbody>
				</table>



</div> 
</div> 
</div> 	
	

 
	</div> 
 </div> 
 
 
 
 <div class="row"> 
	<div class="col-md-12"> 
	<div class="panel panel-default" data-collapsed="0" style="position: static;"><!-- to apply shadow add class "panel-shadow" --> <!-- panel head --> 
		<div class="panel-heading"> 
			<div class="panel-title"><h4><b>Pick-Up Orders</b></h4></div> 
				<div class="panel-options"> 
				<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg">
					<i class="entypo-cog"></i>
				</a> 
				<a href="#" data-rel="collapse">
					<i class="entypo-down-open"></i>
				</a> 
				<a href="#" data-rel="reload">
					<i class="entypo-arrows-ccw"></i>
				</a> 
				<a href="#" data-rel="close">
					<i class="entypo-cancel"></i>
				</a> 
			</div>
		</div> <!-- panel body --> 
		
		<div class="panel-body">

	
	
		
		<table class="table table-bordered datatable" id="table-2">
			<thead>
				<tr>
					<th>Order Number</th>

					<th>Order Date</th>

					<th>Status</th>
				
					<th>Received Method</th>
					<th>Payment Mode</th>
			
					
					
				</tr>
			</thead>
				<tbody>

						<?php


							

							$day = date("Y-m-d");
							$query2="SELECT * from orders WHERE method = 'pick-up' order by orderDate asc";
							//echo $query;
							$result2 = mysqli_query($con, $query2);
		

							
							        
							            while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
							                
							            	echo "<td>" . $row2['orderNumber'] . " </td>";

							            	echo "<td>" . $row2['orderDate'] . " </td>";

							            	echo "<td>" . $row2['status'] . " </td>";


							            	/*//echo "<td>" . $row['orderDate'] ." ". $row['lname'] . " </td>";

							            	echo "<td>" . $row['product_code'] . " </td>";

											echo "<td>" . $row['product_name'] . "</td>";
											
											echo "<td>" . $row['quantityOrdered'] . " </td>";

											echo "<td>" . $row['priceEach'] . " </td>"; */
											
											echo "<td>" . $row2['method'] . " </td>";

											echo "<td>" . $row2['mode'] . " </td>";
											
											//echo "<td>" . $row2['admin_comment'] . " </td>";
											
							                
											
											
											
							                //x$msgid = $row['user_id'];
							                
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "</tr>";
							                
							            }
							       
							    
							
						?>									
					</tbody>
				</table>



</div> 
</div> 
</div> 	
	

 
	</div> 
 </div>

 
 
 
 
