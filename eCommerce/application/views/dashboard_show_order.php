<html>
<head>
	<title>specific order show</title>
</head>
<body>
	<div>
		<p>Order ID: <?php // $order_id ?></p>
		<br>
		<p>Customer shipping info:</p>
		<p>email: <?php //$email ?></p>
		<p>name: <?php // $first_name.+' '+.$last_name ?></p>
		<p>address: <?php // $shipaddress1 ?></p>
		<p>address2: <?php // $shipaddress2 ?></p>
		<p>city: <?php // $shipcity ?></p>
		<p>state: <?php // $shipstate ?></p>
		<p>zip: <?php // $shipzip ?></p>
		<br>
		<p>Customer billing info:</p>
		<p>name: <?php // $first_name.+' '+.$last_name ?></p>
		<p>address: <?php // $billaddress1 ?></p>
		<p>address2: <?php // $billaddress2 ?></p>
		<p>city: <?php // $billcity ?></p>
		<p>state: <?php // $billstate ?></p>
		<p>zip: <?php // $billzip ?></p>
	</div>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php // foreach (items as $item) { ?>
			<tr>
				<td><?php // $item_id ?></td>
				<td><?php // $product_id ?></td>
				<td><?php // $order_price ?></td>
				<td><?php // $qty ?></td>
				<td><?php // $total ?></td>
			</tr>
		</tbody>
	</table>

	<div>
		<p>Status: <?php // $status ?></p>
	</div>

	<div>
		<p>Sub total: $<?php // $subtotal ?></p>
		<p>Shipping: $1.00</p>
		<p>Total Price: $<?php // $subtotal + 1 ?></p>
	</div>

</body>
</html>