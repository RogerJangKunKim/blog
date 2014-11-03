<?php //corrected path to post.php removed the error of object not found when clicking the href link.
//only need contents in config in order to change an image.
	require_once(__DIR__ . "/../model/config.php");
?>
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
	</ul>
</nav>