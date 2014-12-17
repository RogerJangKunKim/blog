<?php 
	// we now have access to the path variable. correct path to reach certain files/folders without difficulty.
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	/*if (!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}*/

	$date = new DateTime('today');
?>
<div id="form">
	<h1 class="whitefont">Create Blog Post</h1>
	<!-- using form to send info. telling to post info. controller will receive the info through INPUT_POST -->
	<!-- action will perform in the create-post file -->
	<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
		<!-- try to use the terms you used from your table. -->
		<div class="whitefont">
			<label for="title">Title: </label>
			<input type="text" name="title"/>
		</div>
		<div class="whitefont">
		<!-- text area lets you inpur more text than label.  -->
			<p><label for="post">Post: </label>
			<textarea name="post"></textarea>
		</div>
		<!-- creates the submit button  -->
			<p><button type="submit">Submit</button>
		</div>
			<p>The date is : <?php echo $date->format('m/d/Y') ?></p>

	</form>
</div>