<!-- recieves info that was sent from submit -->
<!-- POST is different from the other post we use through out our website. We want to get info that was posted. -->
<!-- filters so that there won't be malicious things. isn't the only mechanism we can use and it is not 100% secure -->
<!-- controller will recieve info, store input, and echo the input -->
<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";