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
		//functions are blocks of statements that can be repeated, but they will only run when they are called.
		//these functions will eliminate a lot of repetition because we can use these functions to open/close a connection
		public function openingConnection(){
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)

			//checks if there is a connection error. kill program if error.
			if($this->connection->connect_error){
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}
		}

		public function closeConnection(){
			//isset checks if variable has something within the variable. if no info, will return null.
			if (isset($this->connection)) {
				$this->connection->close();
			}
		}
		//data stored un $string, results stored in $query
		public function query($string){
			$this->openConnection();

			$query = $this->connection->query($string);

			$this->closeConnection();

			return $query;
		}
	}