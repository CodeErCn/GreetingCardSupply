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
					    <a href="/dashboard">Order</a>
					    <a href="/dashboard/products">Products</a>
					    <a href="/dashboard/categories">Categories</a>
					</div>
				    <a class="log-off" href="/admin/logout">Log Off</a>
			    </div>
			  <!-- End of heading -->
			
			<div class="top">
				<form action="dashboard/product_search" method="post">
					<input type="text" name="product_search">
				</form>

				<button name="add_product">add new category</button>
			</div>
		<!-- END of div top -->

		<?php

			

		?>


		<table class="dashboard" border = 1>
			<thead>
				<tr>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Total Products Per Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php  foreach ($categories as $category) { ?>
				<tr>
					<td><img src="/assets/file/pix/category/<?= $category['cid'] ?>_thumb.png"></td>
					<td><?= $category['cid'] ?></td>
					<td><?= $category['title'] ?></td>
					<td><?= $category['description'] ?></td>
					<td><?= $category['count(products.category_id)'] ?></td>
					<td>
						<a href="/dashboard/edit_category/<?php $category['cid'] ?>">edit</a> 
						<a href="/dashboard/delete_category/<?php $category['cid'] ?>">delete</a>			
					</td>
				</tr>
				<?php  } ?>
			</tbody>
		</table>
	<!-- END of category table for dashboard -->

		
			<footer>Greeting Card Supply 2014</footer>
	</body>
</html>