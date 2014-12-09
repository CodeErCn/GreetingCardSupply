<?php 
	if($this->session->flashdata('message')) {
		$message = "<h3>".$this->session->flashdata('message')."</h3>";
	} else {
		$message = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_login.css">
</head>
<body>

	<p><?= $message ?></p>

	<form id="login" action="/admin/login" method="post">
		<fieldset>
			<legend>Log In</legend>
			<div><label for="login_email">Email: </label><input type="text" id="login_email" name="email" value=""></div>
			<div><label for="login_password">Password: </label><input type="password" id="login_password" name="password" value=""></div>
			<div><input type="submit" value="Login"></div>
		</fieldset>
	</form>

</body>
</html>