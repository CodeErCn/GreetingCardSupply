<html>
	<head>
		<title>product manager</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/dashboard_product_manager.css">
		
		<!-- jquery links -->
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
		<script src="js/dialog.js" type="text/javascript"></script>
		<!-- end jquery links -->

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

			<a href="/dashboard/add_edit_product" id="add_product">add new product</a>
			
			
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
				 <?php foreach($products as $product) { ?>
				<tr>
					<td><img src="/assets/file/pix/icons/<?= $product['id'] ?>_icon.png"></td>
					<td><?= $product['id'] ?></td>
					<td><?= $product['description'] ?></td>
					<td><?= $product['inventory_count'] ?></td>
					<td><?= $product['quantity_sold'] ?></td>
					<td>
						<a href="/dashboard/add_edit_product/<?= $product['id'] ?>">edit</a> 
						<a href="/dashboard/delete_product/<?= $product['id'] ?>">delete</a>			
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	<!-- End of product table for dashboard -->
		 
	 <div class="product-manager-nav">
      <ul>
      	<?php  
	        for($i=0, $j=ceil($count/50); $i<$j; $i++) 
	        {
      	?>
         	 <li><a href="/dashboard/products/<?=$i+1?>"><?=$i+1?></a></li>
      	<?php 
	        }
	    ?>  
      </ul>
    </div>
  <!-- END product manager nav -->  
		<footer>Greeting Card Supply 2014</footer>
	</body>
</html>