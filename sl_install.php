<?php require_once('sl_config.php'); ?>
<?php require("class.datamanager.php"); ?>

<?php
	$manager = new DataManager;
	$manager->host = $DB_HOST;
	$manager->port = $DB_PORT;
	$manager->database = $DB_NAME;
	$manager->user = $DB_USER;
	$manager->password = $DB_PASS;
	$manager->connect();

	if($manager->exec_query(
	"
		CREATE TABLE users
		(
		  id serial NOT NULL,
		  username character varying(10) NOT NULL,
		  email text NOT NULL,
		  password character varying(64) NOT NULL,
		  password_salt character varying(20) NOT NULL,
		  name character varying(30) NOT NULL,
		  created timestamp without time zone NOT NULL,
		  attempt character varying(15) NOT NULL DEFAULT '0'::character varying,
		  CONSTRAINT users_pkey PRIMARY KEY (id )
		)
	")):
		echo "Installed";
	else:
		echo pg_last_error();
	endif;

	$manager->disconnect();
?>