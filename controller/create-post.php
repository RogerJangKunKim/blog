<!-- recieves info that was sent from submit -->
<!-- POST is different from the other post we use through out our website. We want to get info that was posted. -->
<!-- filters so that there won't be malicious things. isn't the only mechanism we can use and it is not 100% secure -->
<!-- controller will recieve info, store input, and echo the input -->
<?php
	//need this require_once to make a cennection to database.php
	//database.php has info for connecting to the actual database.
	//used variables in database.php to make a new sqli
	require_once(__DIR__ . "/../model/config.php");
	// all 4 parameters are from database.php
	$connection = new mysqli($host, $username, $password, $database);

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	//use query to store info.
	// insert into out table posts. single quotes to make sure that what is being sent be converted to a string.
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
	//query will store a value.
	// if not true, then it couldn't insert info into database. if true then info stored in $query
	if($query){
		echo "<p>Successfully inserted post: $title</p>";
	}
	else{
		echo "<p>connection->error</p>";
	}

	$connection->close();