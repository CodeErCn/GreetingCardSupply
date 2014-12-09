<html>
	<head>
		<title>category manager</title>
		<link rel="stylesheet" href="/assets/css/dashboard_category_manager.css">
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

				<button name="add_product">add new category</button>
			</div>
		<!-- END of div top -->

		<table class="dashboard" border = 1>
			<thead>
				<tr>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Total Category Products</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php // foreach (categories as $category) { ?>
				<tr>
					<td><?php // $images.category_id where type = thumb ?></a></td>
					<td><?php // $id ?></td>
					<td><?php // $title ?></td>
					<td><?php // $category_count query that = total number of products in category based on products table with specific category_id ?></td>
					<td><?php // $inventory_count query based on products table ?></td>
					<td><?php // $quantity_sold query based on items table ?></td>
					<td>
						<a href="/dashboard/edit_category/<?php // category_id ?>">edit</a> 
						<a href="/dashboard/delete_category/<?php // category_id ?>">delete</a>			
					</td>
				</tr>
				<?php // } ?>
			</tbody>
		</table>
	<!-- END of category table for dashboard -->

		<div class="category-manager-nav">
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
	  <!-- END category manager nav -->  
			<footer>Greeting Card Supply 2014</footer>
	</body>
</html>