<<<<<<< HEAD
	
	
	<style scoped>
		

		#cart-table {
			width: 100%;
		}
		.left {
			text-align: left;
		}
		.right {
			text-align: right;
		}
		.qty {
			text-align: center;
			font-weight: bold;  
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
	

	<table id="cart-table" border=1>
		<tr>
			<th class="left">Item</th>
			<th class="left desc">Description</th>
			<th>Price</th>
			<th>Qty</th>
			<th class="right">Amount</th>
		</tr>
		<?php
		$items = array(
			array('id' => 'E101', 'desc' => 'Some lame envelopes.', 'price' => 0.99, 'qty' => 50)
		);
		$amount = 0;
		$subtotal = 0;
		foreach($items AS $item) {
			$amount = $item['qty'] * $item['price'];
			$subtotal += $amount;
			?>
			<tr>
				<td><?= $item['id'] ?></td>
				<td><?= $item['desc'] ?></td>
				<td class="right"><?= $item['price'] ?></td>
				<td class="qty"><?= $item['qty'] ?></td>
				<td class="right"><?= $amount ?></td>
			</tr>
			<?php
		}
		$total = $subtotal + 1;
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
		<button>Checkout</button>
		<button>Continue Shopping</button>
	</div>


	<form id="checkoutForm" action="" method="post">


		<h2>Customer</h2>
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


		<h2>Shipping</h2>
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


		<h2>Billing</h2>
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
=======
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Cart</title>
      <link rel="stylesheet" type="text/css" href="/assets/css/cart_index.css">
    </head>
    <body>
      <div class="top">
        <table class="table" border = 1>
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
        </table>
        <div class="buttons">
          <button>Checkout</button>
          <button>Continue Shopping</button>
        </div>
      </div>
    <!-- END of top -->
      <div class="shipping">
        <h2>Shipping Information</h2>
        <form>
          <label>First Name: <input type="text"/></label>
          <label>Last Name: <input type="text"/></label>
          <label>Email: <input type="text"/></label>
          <label>Phone Number:  <input type="text"/></label>
          <label>Address: <input type="text"/></label>
          <label>Address2:  <input type="text"/></label>
          <label>City:  <input type="text"/></label>
          <label>State: <input type="text"/></label>
          <label>Zip code:  <input type="text"/></label>
        </form>
      </div>
    <!-- END of shipping -->
      <div class="billing">
        <h2>Billing Information</h2>
        <form>
          <label><input type="checkbox"/> Same as Shipping</label>
          <label>First Name: <input type="text"/></label>
          <label>Last Name: <input type="text"/></label>
          <label>Email: <input type="text"/></label>
          <label>Phone Number:  <input type="text"/></label>
          <label>Address: <input type="text"/></label>
          <label>Address2:  <input type="text"/></label>
          <label>City:  <input type="text"/></label>
          <label>State: <input type="text"/></label>
          <label>Zip code:  <input type="text"/></label>
          <label>Card:  <input type="text"/></label>
          <label>Billing DAte: <input type="text"/></label>
          <label>Expiration: <input class="month" type="text"/> / <input class="date" type="text"></label>
        </form>
      </div>
    <!-- END of billing -->
    </body>
</html>
>>>>>>> bf3757a9b5dfb2d81dfeeeb2895da4535b351f0b
