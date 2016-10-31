<?php
	require_once("sl_config.php");
	require_once("sl_functions.php");
?>
<html>
	<head>
		<title>Tests</title>
	</head>
	<body>
		<h1>Salt_Gen</h1>
		<?php
			echo salt_gen(64);
		?>
		<h1>
			Token_Gen
		</h1>
		<?php
			echo token_gen(32);
		?>
		<h1>PHP Info</h1>
		<?php
			echo phpinfo();
		?>
		<h1>
			Password Gen
		</h1>
		<?php
			echo password_hash('ashuashudasuda', PASSWORD_DEFAULT);
		?>

	</body>
</html>