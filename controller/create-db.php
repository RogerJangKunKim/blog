<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}
	

	//selecting a data base. returns true/not true
	$exists = $connection->select_db($database);
	

	//checking if database doesn't exists. queries are questions/commands sent to the database.
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database"); /*will say true if successful, false if not*/

		if($query){ /*check if successful/not*/
			echo "Successfully created database " . $database;
		}
	}
	$connection->close();