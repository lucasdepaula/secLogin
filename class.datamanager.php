<?php
require('sl_config.php');

class DataManager {
	public $con;
	public $host;
	public $port;
	public $database;
	public $user;
	public $password;
	public $conString;
	public $link;

	/**
	* Open connection with the database with the parameters of the class.
	*
	* @return void It doesn't return anything, just change the flag of the class.
	*/
	public function connect(){
		$this->conString = 'host=' . $this->host . ' port=' . $this->port . ' dbname=' . $this->database . 
		' user=' . $this->user . ' password=' . $this->password;
		$this->link = pg_connect ($this->conString);
		if (!$this->link)
		{
			die('Error: Could not connect: ' . pg_last_error());
		}
	}

	/**
	* Closes the connection with the database
	*
	* @return bool It returns true wheh the connection is closed succesfully and false when not.
	*/
	public function disconnect(){
		return pg_close($this->link);
	}
	
	/**
	* Executes the query specified on the parameter
	*
	* @param string $query String with the query that will be processed.
	* @return resource It returns a resource with the data ready to be fetched.
	*/
	public function exec_query($query){
		return pg_query($query);
	}
}

?>