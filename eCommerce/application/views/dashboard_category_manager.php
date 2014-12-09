<html>
<head>
	<title>category manager</title>
</head>
<body>

	<form action='dashboard/category_search' method='post'>
		<input type='text' name='category_search'>
	</form>


	<form action='dashboard/add_category' method='post'>
		<input type='btn' name='add_category' value='Add new category'>
	</form>


	<table style="width:100%">
		<thead style="background-color: light gray">
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

	<ul>
		<?php // foreach (categories as product) { ?>
		<li>  </li>

	</ul>

</body>
</html>