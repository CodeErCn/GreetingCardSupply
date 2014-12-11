<?php 

	$message='';
	if(isset($id)) 
	{
		$message = 'Edit Product';
		$action = 'dashboard/edit_product';
	}
	else
	{
		$message = 'Add Product';
		$action = 'dashboard/add_product';
		$id = '';
	}
	


?>

<html>
<head>
	<title>add/edit product</title>
</head>
<body>

	<h3><?= $message ?></h3>
	<div id="dialog" title="Dialog Form">
		<form action="<?= $action ?>" method="post">
			<label>Name</label>
			<input id="name" name="name" type="text" value="<?php  ?>">
			<label>Description</label>
			Categories
			Active?




				</form>
	</div>
</body>
</html>