<?php
	createConnection();
		
	// Get an instance of the database
	function createConnection()
	{
		$host = "localhost";
		$username = "root";
		$password = "root";
		$db = "forum";
		$connection = mysql_connect($host, $username, $password) or die(mysql_error());
		mysql_select_db($db, $connection);
	}

?>
