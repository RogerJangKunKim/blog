<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//displays the email, username, and password you have inputted.
	echo $password;

	// used to encrypt the password so people won't be able to identify the password.
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	echo $salt;