<?php
	class Database{
		//Classes are used for representing data as objects, keeps data together and makes it easier to understand.
		// private= can only be accessed here. not global.
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database; //take info from create-db.php and stores them in this variable. used for easier maintainance and easier coding.
	}