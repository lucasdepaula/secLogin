<?php
require("sl_config.php");
if(!$can_register)
	die("You cannot access this page.");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Please, sign up</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/secLogin.css">
	<meta charset="utf-8">
</head>
<body class="login register">
	<div class="container">
		<form action="" method="POST">
			<div class="form-login">
				<h1 class="form-heading">Please sign up</h1>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<label for="inputToken" class="sr-only">Token</label>
				<input type="text" id="inputToken" class="form-control" placeholder="Token">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
			</div>
		</form>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>