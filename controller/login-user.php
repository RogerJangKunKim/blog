<?php
require_once(__DIR__ . "/../model/config.php");

$username = filter_input (INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input (INPUT_POST, "password", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

//num_rows how many rows we will retrieve from database.
if($query->num_rows==1){
	$rows = $query->fetch_array();
	// case sensitive.
	if($row["password"] === crypt($password, $row["salt"])){
		echo "<p>Login Successful</p>";
	}
	else{
		echo "<p>Invalid Username and Password</p>";
	}
}
else{
	echo "<p>Invalid Username and Password</p>";
}

//checks if hashed password=new hashed password