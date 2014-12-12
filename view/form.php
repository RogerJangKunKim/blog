<?php 
// we now have access to the path variable. correct path to reach certain files/folders without difficulty.
require_once(__DIR__ . "/../model/config.php");

$date = new DateTime('today');
?>

<h1>Create Blog Post</h1>
<!-- using form to send info. telling to post info. controller will receive the info through INPUT_POST -->
<!-- action will perform in the create-post file -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<!-- try to use the terms you used from your table. -->
		<label for="title">Title: </label>
		<input type="text" name="title"/>
	</div>
	<!-- text area lets you inpur more text than label.  -->
		<p><label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
	<!-- creates the submit button  -->
		<p><button type="submit">Submit</button>
	</div>
		<p>The date is : <?php echo $date->format('m/d/Y') ?></p>
</form>