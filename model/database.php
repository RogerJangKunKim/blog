<?php
	class Database{
		//Classes are used for representing data as objects, keeps data together and makes it easier to understand.
		// private= can only be accessed here. not global.
		//constructor will build an object
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database; //take info from create-db.php and stores them in this variable. used for easier maintainance and easier coding.

		public function __construct($host, $username, $password, $database){
			//accessing host variable above. will only exist in this function, local variable.
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
	}