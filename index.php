
<?php
	//separated for easier maintenance.
	//header can be styled with style sheets.
	require_once(__DIR__ . "/view/header.php");
	//links to navigation.php and will show a link to post.php
	require_once(__DIR__ . "/view/navigation.php");
	//include info from create-db.php
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/view/footer.php");
?>
