<ul id="main-menu" class="">
			
    <li class="active opened active"><a href="index.php"><i class="entypo-gauge"></i><span>Home</span></a></li>
	

	
	
	
		<li><a href="category.php"><i class="entypo-tag"></i><span>To Deliver Products</span>
			
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
				<a href="view_pay.php"><span>View Orders</span></a></li>
			

			
		</ul>
	</li>
	
	
		<li><a href="#"><i class="entypo-paper-plane"></i><span>Delivered Products</span></a>

		<ul>
			<li class="active">
				<a href="view_delivery.php"><span>View Delivered</span></a></li>

			
		</ul>
		
			
	

	<li><a href="more-userprofile.php"><i class="entypo-user"></i><span>Profile</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li>

</ul>	