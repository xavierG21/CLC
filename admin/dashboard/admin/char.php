<div class="row"> 
	<div class="col-md-12"> 
	<div class="panel panel-default" data-collapsed="0" style="position: static;"><!-- to apply shadow add class "panel-shadow" --> <!-- panel head --> 
		<div class="panel-heading"> 
			<div class="panel-title"><h4><b>New Orders Reports</b></h4></div> 
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
					
					<th>Product Code</th>			
					
					<th>Product Name</th>

					<th>Quantity</th>
					
					<th>Price Each</th>

					<th>Received Method</th>
					
					<th>Mode</th>
					
					
				</tr>
			</thead>
				<tbody>

						<?php


							$query2 = "select COUNT(*) from orders WHERE status = 'In process' ";
								$result2 = mysqli_query($con, $query2);
								if (mysqli_affected_rows($con) != 0) {
									while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
										//echo $row2['COUNT(*)'];
										$customer = $row2['COUNT(*)'];
									} 
								}else{
									echo "0";
								}

							$day = date("Y-m-d");
							$query="SELECT * from orders o inner join orderdetails od ON o.orderNumber = od.orderNumber WHERE o.status = 'In process' order by o.orderDate asc";
							//echo $query;
							$result = mysqli_query($con, $query);
		

							
							        
							            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                
							            	echo "<td>" . $row['orderNumber'] . " </td>";

							            	echo "<td>" . $row['orderDate'] . " </td>";

							            	echo "<td>" . $row['status'] . " </td>";


							            	//echo "<td>" . $row['orderDate'] ." ". $row['lname'] . " </td>";

							            	echo "<td>" . $row['product_code'] . " </td>";

											echo "<td>" . $row['product_name'] . "</td>";
											
											echo "<td>" . $row['quantityOrdered'] . " </td>";

											echo "<td>" . $row['priceEach'] . " </td>";
											
											echo "<td>" . $row['method'] . " </td>";

											echo "<td>" . $row['mode'] . " </td>";
											
											//echo "<td>" . $row['mode'] . " </td>";
											
							                
											
											
											
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



<div class="col-md-12"> <div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" --> <!-- panel head -->
 <div class="panel-heading"> 
	<div class="panel-title"><h4><b>Product Paid Reports</b></h4></div> 
		<div class="panel-options"> 
			<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a> 
			<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> 
			<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> 
			<a href="#" data-rel="close"><i class="entypo-cancel"></i></a> 
		</div> 
	</div> <!-- panel body --> 
	
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table-2">
			<thead>
				<tr>
					<th>Order Number</th>

					<th>Order Date</th>
					
					<th>Status</th>			
					
					<th>Payment Date</th>

					<th>Amount</th>
					
					<th>Received Method</th>
					
					<th>Payments Mode</th>
					
					
					
					

					
				</tr>
			</thead>
				<tbody>

						<?php

						$query4 = "SELECT SUM(amount) FROM payments";
								$result4 = mysqli_query($con, $query4);
								if (mysqli_affected_rows($con) != 0) {
									while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {
										//echo $row2['COUNT(*)'];
										$customer2 = $row4['SUM(amount)'];
									} 
								}else{
									echo "0";
								}

							$day = date("Y-m-d");
							$query3="select * from orders o INNER JOIN payments p on o.orderNumber = p.orderNumber WHERE o.status = 'Delivered' order by o.orderDate";
							//echo $query;
							$result3 = mysqli_query($con, $query3);
		

							
							        
							            while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
							                
							            	echo "<td>" . $row3['orderNumber'] . " </td>";

							            	echo "<td>" . $row3['orderDate'] . " </td>";

											echo "<td>" . $row3['status'] . "</td>";
											
											echo "<td>" . $row3['paymentDate'] . " </td>";

											echo "<td>" . $row3['amount'] . " </td>";
											
											echo "<td>" . $row3['method'] . " </td>";

											echo "<td>" . $row3['mode'] . " </td>";
											
											//echo "<td>" . $row['mode'] . " </td>";
											
							                
											
											
											
							                //x$msgid = $row['user_id'];
							                
							             
							                //echo "<td><a href='edit_reg.php?pid=".$row['member_code']."'>EDIT</a></td>";
							                echo "</tr>";
							                
							            }
							       
							    
							
						?>									
					</tbody>
				</table>

			

<td width="33%"></td>

		</div> 
	</div> 
 </div> 
 
 
