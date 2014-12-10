<html>
	<head>
		<title>order manager</title>
		<link rel="stylesheet" href="/assets/css/dashboard_order_manager.css">
	</head>
	<body>
		<!-- heading Div -->
	    <div class="dashboard-heading">
		    <h1>Dashboard</h1>
		    <div class="dashboard-link">
			    <a href="#">Order</a>
			    <a href="#">Products</a>
			    <a href="#">Categories</a>
		    </div>
		    <a class="log-off" href="#">Log Off</a>
	    </div>
	  <!-- End of heading -->
		
		<div class="top">
			<form action="dashboard/order_search" method="post">
				<input type="text" name="order_search" placeholder="search">
			</form>	
			<!-- END search box input text -->
			<form class="order-status-filter">
				<select name="order_filter" value="Show All">
						<option <?php
						// $status['pending'] ?> value='1' >pending</option>
						<option <?php
						// $status['process'] ?> value='2' >in process</option>
						<option <?php
						// $status['shipped'] ?> value='3' >shipped</option>
						<option <?php
						// $status['cancelled'] ?> value='4' >cancelled</option>
				</select>
			</form>
			<!-- END order filter select -->
		</div>
	<!-- END div top -->

		<table class="dashboard">
			<thead style="background-color: light gray">
				<tr>
					<th>Order ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Billing Address</th>
					<th>Total</th>
					<th>Status</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
						// var_dump($orders);
						// die('here');
				for($i=0;$i<count($orders);$i++)
					{

				?>
				
					<tr>
						<td><a href="/dashboard/show_order/<?= $orders[$i]['id'] ?>">
							<?= $orders[$i]['id'] ?></a></td>
						<td><?php
						//$order['first_name'].+' '+.$order['last_name'] ?></td>
						<td><?php
						//$order['created_at'] ?></td>
						<td><?php
						// $order['street_address'].+' '+.$order['street_address2'].+' '+.$order['city'].+' '+.$order['state'].+' '+.$order['zip'] ?></td>
						<td><?php
						// $total // some function to get total from order based on items table ?></td>
						<td style="text-align:center">
							<form action='/dashboard/update_order_status/<?php //$order['id'] ?>'>
								<select name='order_status'>
									<option <?php 
									// $status['pending'] ?> value='1' >pending</option>
									<option <?php 
									// $status['process'] ?> value='2' >in process</option>
									<option <?php 
									// $status['shipped'] ?> value='3' >shipped</option>
									<option <?php
									 // $status['cancelled'] ?> value='4' >cancelled</option>
								</select>	
							</form>
						</td>
					</tr>
				<?php } ?>	
			</tbody>
		</table>
		<!-- END of order table for dashboard -->

		 <div class="order-manager-nav">
	        <ul>
	          <li><a href="#">1</a></li>
	          <li><a href="#">2</a></li>
	          <li><a href="#">3</a></li>
	          <li><a href="#">4</a></li>
	          <li><a href="#">5</a></li>
	          <li><a href="#">6</a></li>
	          <li><a href="#">7</a></li>
	          <li><a href="#">8</a></li>
	          <li><a href="#">9</a></li>
	          <li><a href="#">10</a></li>
	          <li><a href="#">>></a></li>
	        </ul>
	      </div>
	    <!-- END order manager nav -->  
		<footer>Greeting Card Supply 2014</footer>
	</body>
</html>