<html>
<head>
	<title>product manager</title>
</head>
<body>

	<form action='dashboard/product_search' method='post'>
		<input type='text' name='product_search'>
	</form>


	<form action='dashboard/add_product' method='post'>
		<input type='btn' name='add_product' value='Add new product'>
	</form>

	<table style="width:100%">
		<thead style="background-color: light gray">
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
				<td><?php // $product_id ?><td>
				<td><?php // $product_title ?></td>
				<td><?php // $inventory_count query based on products table ?></td>
				<td><?php // $quantity_sold query based on qty in items table ?></td>
				<td>
					<a href="/orders/show/<?php // dashboard/add_product/product_id ?>">edit</a> 
					<a href="/orders/show/<?php // dashboard/delete_product/product_id ?>">delete</a>			
				</td>
			</tr>
			<?= } ?>
		</tbody>
	</table>

	<ul>
		<?php // foreach (products as product) { ?>
		<li>  </li>

	</ul>

</body>
</html>