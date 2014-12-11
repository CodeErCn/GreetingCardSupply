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
			    <a href="/dashboard">Order</a>
			    <a href="/dashboard/products">Products</a>
			    <a href="/dashboard/categories">Categories</a>
			</div>
		    <a class="log-off" href="/admin/logout">Log Off</a>
	    </div>
	  <!-- End of heading -->
		
		<div class="top">
			<form action="/dashboard/search_orders" method="post">
				<input type="text" name="search-result" placeholder="Search...">
				<input type="submit" name="search" value="Search"/>
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


				for($i=0;$i<count($orders);$i++)
					{
						$selected = array('1'=>'','2'=>'','3'=>'','4'=>'');

						if($orders[$i]['status_id'] == '1')
						{
							$selected['1'] = "selected";
						}
						else if($orders[$i]['status_id'] == '2')
						{
							$selected['2'] = "selected";
						}
						else if($orders[$i]['status_id'] == '3')
						{
							$selected['3'] = "selected";
						}
						else if($orders[$i]['status_id'] == '4')
						{
							$selected['4'] = "selected";
						}  
				?>
				
					<tr>
						<td><a href="/dashboard/show_order/<?= $orders[$i]['orderid'] ?>"><?= $orders[$i]['orderid'] ?></a></td>
						<td><?= $orders[$i]['first_name'] ." ". $orders[$i]['last_name'] ?></td>
						<td><?= $orders[$i]['created_at'] ?></td>
						<td><?= $orders[$i]['street_address']." ".$orders[$i]['street_address2']." ".$orders[$i]['city']." ".$orders[$i]['state']." ".$orders[$i]['zip'] ?></td>
						<td><?= $orders[$i]['total'] ?></td>
						<td style="text-align:center">
							<form action='/dashboard/update_order_status/<?= $orders[$i]['orderid'] ?>'>
								<select name='order_status'>
									<option <?= $selected['1'] ?> value='1' >pending</option>
									<option <?= $selected['2'] ?> value='2' >in process</option>
									<option <?= $selected['3'] ?> value='3' >shipped</option>
									<option <?= $selected['4'] ?> value='4' >cancelled</option>
								</select>
								<input type='submit' value='go'>	
							</form>
						</td>
					</tr>
				<?php } ?>	
			</tbody>
		</table>
		<!-- END of order table for dashboard -->

		 <div class="order-manager-nav">
	        <ul>
	          	<?php  
        			for($i=0, $j=ceil($count/25); $i<$j; $i++) 
        			{
      			?>
      			    <li><a href="/dashboard/<?=$i+1?>"><?=$i+1?></a></li>
      			<?php 
        			}
      			?>
	        </ul>
	      </div>
	    <!-- END order manager nav -->  
		<footer>Greeting Card Supply 2014</footer>
	</body>
</html>