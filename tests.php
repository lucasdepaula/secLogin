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
	</body>
</html>