<?php //corrected path to post.php removed the error of object not found when clicking the href link.
//only need contents in config in order to change an image.
	require_once(__DIR__ . "/../model/config.php");
?>

<nav>
	<ul>
		<li> <!--$path is created in config. path can be accessed from the config.php file by the require_once at the top of this file 
		$path links all project files together for easier access.
		php code echos the $path and the string.
		-->
			<a href="<?php echo $path . "post.php" ?> ">Blog Post Form</a>
		</li>
	</ul>
</nav>	