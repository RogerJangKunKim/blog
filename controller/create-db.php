<?php
	//take info from database.php in model folder to connect to database. __DIR__ creates path to directory.
	require_once(__DIR__ . "/../model/database.php");

	//makes connection to a new database. mysqli-object used to connect to the database.
	$connection = new mysqli($host, $username, $password);

	//checks if there is a connection error. kill program if error.
	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}
	

	//selecting a data base. returns true/not true
	$exists = $connection->select_db($database);
	

	//checking if database doesn't exists. queries are questions/commands sent to the database. ONLY runs if database does not exist.
	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database"); /*will say true if successful, false if not*/

		if($query){ /*check if successful/not*/
			echo "Successfully created database " . $database;
		}
	}
	//if there is a database, this else statement will run.
	else{
		echo "Database already exists.";
	}
	//query will create a table. put info in that database(more specifically, the table)
	//auto increments blogposts for us. maximum length of title is 255 characters. title and pot can't be null. 
	//primary key-hooks both tables together.
	//id is integer, title is string, post is text. none can be null.
	$query = $connection->query("CREATE TABLE posts ("
		  . "id int(11) NOT NULL AUTO_INCREMENT,"
		  . "title varchar(255) NOT NULL,"
		  . "post text NOT NULL,"
		  . "PRIMARY KEY (id)");
	//close the connection
	$connection->close();