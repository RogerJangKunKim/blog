<?php
	class Database{
		//Classes are used for representing data as objects, keeps data together and makes it easier to understand.
		// private= can only be accessed here. not global.
		
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database; //take info from create-db.php and stores them in this variable. used for easier maintainance and easier coding.

		//constructor will build an object
		//variables used are global. but the variables inside are local.
			
		public function __construct($host, $username, $password, $database){
			//accessing host variable above. will only exist in this function, local variable. uses global variable to make an arguement
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		//these functions will eliminate a lot of repetition because we can use these functions to open/close a connection
		public function openingConnection(){

		}

		public function closeConnection(){

		}

		public function query($string){

		}
	}