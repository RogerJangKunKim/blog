<?php

	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="posts" action="<?php echo $path . "controller/login-user.php"?>">
	<div>
		<label for="email">Email: </label>
		<input type="text" name="email" />
	</div>

	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<!-- input type is password because we don't want the user to see what they are typing, so it will appear as bullet points -->
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit">Submit</button>
	</div>
</form>