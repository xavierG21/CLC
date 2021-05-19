<ul id="main-menu" class="">
			
    <li class="active opened active"><a href="index.php"><i class="entypo-gauge"></i><span>Home</span></a></li>
	
	
		<li><a href="all.php"><i class="entypo-database"></i><span>Products</span></a>
				
		<ul>
			<li><a href="register_product.php"><i class="entypo-user-add"></i><span> Register Products</span></a></li>
			
			<li class="active">
				<a href="view_products.php"><span>View Products </span></a></li>

			
		</ul>
		
		

		</li>
	
	
     

	
	
	<li><a href="category.php"><i class="entypo-basket"></i><span>Order</span>
		<span id='load_orders'></span>
		
		<script type="text/javascript">
			var auto_refresh = setInterval(
			function ()
			{
			$('#load_orders').load('order_count.php').fadeIn("slow");
			}, 1000); // refresh every 1000 milliseconds
		</script>


		


	</a>
		<ul>
			
			<li class="active">
				<a href="view_reg.php"><span>View Orders </span></a></li>

			<li class="active">
				<a href="view_ap.php"><span>Orders Status</span></a></li>
			
		</ul>
	</li>
	
	
		<li><a href="category.php"><i class="entypo-tag"></i><span>Payments</span></a>
		<ul>
			
			<li class="active">
				<a href="view_pay.php"><span>View Payments</span></a></li>
			

			
		</ul>
	</li>
	
	
	
	
	
	<li><a href="#"><i class="entypo-paper-plane"></i><span>Delivery</span>
			<span id='load_delivery'></span>
		
					<script type="text/javascript">
						var auto_refresh = setInterval(
						function ()
						{
						$('#load_delivery').load('delivery_count.php').fadeIn("slow");
						}, 1000); // refresh every 1000 milliseconds
					</script>




		</a>

		<ul>
			<li class="active">
				<a href="view_delivery.php"><span>View Delivery</span></a>
			</li>

			
		</ul>

		<li><a href="category.php"><i class="entypo-users"></i><span>Customers</span></a>
		<ul>
			<li class="active">
				<a href="customer_view.php"></i><span>View Customer</span></a></li>
		
			
		</ul>
	</li>	
		
		<li><a href="#"><i class="entypo-folder"></i><span>Historical Reports</span></a>

		<ul>
			<li class="active">
				<a href="historical_reports.php"><span>View Historical Reports</span></a></li>

		
		</ul>

	

	

	<li><a href="more-userprofile.php"><i class="entypo-user"></i><span>Profile</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li>

</ul>	