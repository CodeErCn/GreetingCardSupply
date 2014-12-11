<html>
<head>
	<title>specific order show</title>
</head>
<body>
<?php
// var_dump($orders); die('here'); ?>

	<div>
		<p>Order ID: <?= $orders[0]['order_id'] ?></p>
		<br>
		<p>Customer shipping info:</p>
		<p>email: <?=$orders[0]['email'] ?></p>
		<p>name: <?= $orders[0]['first_name'].' '.$orders[0]['last_name'] ?></p>
		<p>address: <?= $orders[0]['shipaddress1'] ?></p>
		<p>address2: <?= $orders[0]['shipaddress2'] ?></p>
		<p>city: <?= $orders[0]['shipcity'] ?></p>
		<p>state: <?= $orders[0]['shipstate'] ?></p>
		<p>zip: <?= $orders[0]['shipzip'] ?></p>
		<br>
		<p>Customer billing info:</p>
		<p>name: <?= $orders[0]['first_name'].' '.$orders[0]['last_name'] ?></p>
		<p>address: <?= $orders[0]['billaddress1'] ?></p>
		<p>address2: <?= $orders[0]['billaddress2'] ?></p>
		<p>city: <?= $orders[0]['billcity'] ?></p>
		<p>state: <?= $orders[0]['billstate'] ?></p>
		<p>zip: <?= $orders[0]['billzip'] ?></p>
	</div>

	<table>
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Item Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Line Total</th>
			</tr>
		</thead>
		<tbody>
			<?php 	
			$subtotal=0;
			foreach ($orders as $order) 
			{  
				$line_total=$order['order_price'] * $order['qty'];
				$subtotal+=$line_total;
				?>
				<tr>
					<td><?= $order['product_id'] ?></td>
					<td><?= $order['description'] ?></td>
					<td><?= $order['order_price'] ?></td>
					<td><?= $order['qty'] ?></td>
					<td><?= $line_total ?></td>					 
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<div>
		<p>Status: <?= $orders[0]['status'] ?></p>
	</div>

	<div>
		<p>Sub total: $<?= $subtotal ?></p>
		<p>Shipping: $1.00</p>
		<p>Total Price: $<?= $subtotal + 1 ?></p>
	</div>

</body>
</html>