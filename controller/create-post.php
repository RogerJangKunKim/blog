<!-- recieves info that was sent from submit -->
<!-- POST is different from the other post we use through out our website. We want to get info that was posted. -->
<!-- filters so that there won't be malicious things. isn't the only mechanism we can use and it is not 100% secure -->
<!-- controller will recieve info, store input, and echo the input -->
<?php
	//need this require_once to make a cennection to database.php
	//database.php has info for connecting to the actual database.
	//used variables in database.php to make a new sqli
	require_once(__DIR__ . "/../model/database.php");
	// all 4 parameters are from database.php
	$connection = new mysqli($host, $username, $password, $database);

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";

	$connection->close();