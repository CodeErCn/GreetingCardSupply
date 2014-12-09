<html>
	<head>
		<title>product manager</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/dashboard_product_manager.css">
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
			<form action="dashboard/product_search" method="post">
				<input type="text" name="product_search">
			</form>

			<button name="add_product">add new product</button>
		</div>
	<!-- END of div top -->

		<table class="dashboard" border = 1>
			<thead>
				<tr>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				 <?php //foreach (products as $product) { ?>
				<tr>
					<td><?php // $images.product_id where type = thumb ?></a></td>
					<td><?php // $product_id ?></td>
					<td><?php // $product_title ?></td>
					<td><?php // $inventory_count query based on products table ?></td>
					<td><?php // $quantity_sold query based on qty in items table ?></td>
					<td>
						<a href="/orders/show/<?php // dashboard/add_product/product_id ?>">edit</a> 
						<a href="/orders/show/<?php // dashboard/delete_product/product_id ?>">delete</a>			
					</td>
				</tr>
				<?php //} ?>
			</tbody>
		</table>
	<!-- End of product table for dashboard -->
		 
	 <div class="product-manager-nav">
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
  <!-- END product manager nav -->  
		<footer>Greeting Card Supply 2014</footer>
	</body>
</html>