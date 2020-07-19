<?php
	$url = "http://waterfordparkestates.com/outside_email.php";
	$url .= "?accesscode=alwayson";
	$url .= "&to=9728147745@vtext.com;jess@jesseasley.com";
	$url .= "&from=me@whereever.com";
	$url .= "&subject=test subject";
	$url .= "&body=testing from local machine";
	header("location:" . $url);
?>