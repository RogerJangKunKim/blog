<?php 
	$path = "/blog/";
	//code refactoring helps with code maintainance, editing, and using. impove how the code looks.
	//storing database information on servers.
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	//variable will have access to functions in Database.php
	//contructor will use info from the 4 variables above and store it withing the variable.
	$connection = new Database($host, $username, $password, $database);