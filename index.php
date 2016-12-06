<?php

require_once "vendor/autoload.php";

use Exos\Controller\UserController;

if (!empty($_POST)) {
	$request = ["post" => $_POST, "files" => $_FILES];

	$controller = new UserController();
	$controller->newAction($request);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="post" action="http://localhost/exos/">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email">
	</div>
	<div>
		<label>Avatar</label>
		<input type="file" name="avatar">
	</div>

	<input type="submit" name="submit">
</form>
</body>
</html>