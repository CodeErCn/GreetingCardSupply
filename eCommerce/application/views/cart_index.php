	
	
	<style scoped>
		
		#cart-table {
			width: 90%;
		}
		.left {
			text-align: left;
		}
		.right {
			text-align: right;
		}
		.center {
			text-align: center;
		}
		.unitqty {
			text-align: center;
			font-weight: bold;
			font-size: 150%;
		}
		#cart-table.desc {
			width: 100%;
		}
		#total {
			font-weight: bold;
			font-size: 200%;
		}


		#checkoutForm div label {
			display: inline-block;
			text-align: right;
		}
		#checkoutForm div {
			width: 300px;
			margin: 3px;
			text-align: right;
		}
		#same {
			text-align: right;
		}
		#checkoutForm > input[type=text] {
			width: 150px;
		}
		#bill_code {
			width: 40px;
			margin-left: 110px;
		}
		#bill_mo {
			width: 30px;
			margin-left: 40px;
		}
		#div {
			display: inline-block;
			width: 20px;
			text-align: center;
		}
		#bill_yr {
			width: 60px;
		}
	</style>
	

	<table id="cart-table">
		<tr>
			<th class="left">Item</th>
			<th class="left desc">Description</th>
			<th>Unit Price</th>
			<th>Qty</th>
			<th class="right">Amount</th>
		</tr>
		<?php
		// $items = array(
		// 	array('id' => 'E101', 'desc' => 'Some lame envelopes.', 'price' => 0.99, 'qty' => 50)
		// );
		$amount = 0;
		$subtotal = 0;
		foreach($items AS $item) {
			$amount = $item['qty'] * $item['price'];
			$amount = number_format($amount, 2);
			$subtotal += $amount;
			$subtotal = number_format($subtotal, 2);
			?>
			<tr>
				<td><a href="/products/show_item/<?= $item['id'] ?>"><img src="/assets/file/pix/icons/<?= $item['id'] ?>_icon.png"></a></td>
				<td>
						<div><strong>#<a href="/products/show_item/<?= $item['id'] ?>"><?= $item['id'] ?></a></strong></div>
						<div><?= $item['color'] ?> <?= $item['description'] ?></div>
						<div><?= $item['inchwidth'] ?>" x <?= $item['inchheight'] ?>" (<?= $item['metricwidth'] ?> x <?= $item['metricheight'] ?>cm)</div>
				</td>
				<td class="center"><?= number_format($item['price'], 2) ?></td>
				<td class="unitqty"><?= $item['qty'] ?></td>
				<td class="right"><?= $amount ?></td>
			</tr>
			<?php
		}
		$total = $subtotal + 1;
		$total = number_format($total, 2);
		?>
		<tr>
			<th class="right" colspan="4">Subtotal: </th>
			<th class="right"><?= $subtotal ?></th>
		</tr>
		<tr>
			<th class="right" colspan="4">Shipping: </th>
			<th class="right">1.00</th>
		</tr>
		<tr>
			<th class="right" colspan="4">Total: </th>
			<th id="total">$ <?= $total ?></th>
		</tr>
	</table>


	<div>
		<a href="/">Continue Shopping</a>
	</div>


	<form id="checkoutForm" action="" method="post">


		<h2>Customer Info</h2>
		<div>
			<label>First Name: </label>
			<input type="text" name="first_name">
		</div>
		<div>
			<label>Last Name: </label>
			<input type="text" name="last_name">
		</div>
		<div>
			<label>Email: </label>
			<input type="text" name="email">
		</div>
		<div>
			<label>Phone Number: </label>
			<input type="text" name="phone">
		</div>


		<h2>Ship To</h2>
        <div>
        	<label>Attn: </label>
        	<input type="text" name="ship_name">
        </div>
		<div>
			<label>Address: </label>
			<input type="text" name="ship_address">
		</div>
		<div>
			<label>Address2: </label>
			<input type="text" name="ship_address2">
		</div>
		<div>
			<label>City: </label>
			<input type="text" name="ship_city">
		</div>
		<div>
			<label>State: </label>
			<input type="text" name="ship_state">
		</div>
		<div>
			<label>Zip code: </label>
			<input type="text" name="ship_zip">
		</div>


		<h2>Bill To</h2>
		<div id="same">
			<input type="checkbox" name="same"> Same as Shipping
		</div>
		<div>
			<label>Name: </label>
			<input type="text" name="bill_name">
		</div>
		<div>
			<label>Address: </label>
			<input type="text" name="bill_address">
		</div>
		<div>
			<label>Address2: </label>
			<input type="text" name="bill_address2">
		</div>
		<div>
			<label>City: </label>
			<input type="text" name="bill_city">
		</div>
		<div>
			<label>State: </label>
			<input type="text" name="bill_state">
		</div>
		<div>
			<label>Zip code: </label>
			<input type="text" name="bill_code">
		</div>
		<div>
			<label>Card: </label>
			<input type="text" name="bill_card">
		</div>
		<div>
			<label>Security Code: </label>
			<input type="text" id="bill_code" name="bill_code">
		</div>
		<div>
			<label>Expiration: </label>
			<input type="text" id="bill_mo" name="bill_mo" placeholder="mm"><span id="div"> / </span><input type="text" id="bill_yr" name="bill_yr" placeholder="yyyy">
		</div>
		<div>
			<input type="submit" value="Pay Now...">
		</div>


	</form>