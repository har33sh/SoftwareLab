<?php
	$USER="eval";
	$PASS="eval";
	if ($_POST["user"] == $USER && $_POST["pass"] == $PASS) {
		header("Location: album.php");
		die();
	}
	else {
		echo "Invalid username or password\n<br />\n<a href=\"index.php\" />Back</a>";
	}
?>
