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