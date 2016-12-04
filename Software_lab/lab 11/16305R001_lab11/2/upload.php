<?php
	if (isset($_FILES['fname']['name'])) {
		if (filesize($_FILES['fname']['name']) > 204800) {
			echo "File size is more than 100KB<br />";
			echo "<a href=\"album.php\">Back</a>";
			exit();
		}
		$input = $_FILES['fname']['tmp_name'];
		if (substr($_FILES['fname']['name'], -4) == ".jpg") {
			$directory = "images";
			$files = scandir($directory);

			$last = count($files) - 2;
			if ($last >= 10) {
				echo "Reached maximum limit<br />";
				echo "<a href=\"album.php\">Back</a>";
				exit();
			}
			$newImageName = $last + 1;
			$output = "images/" . $newImageName . '.jpg';
			file_put_contents($output, file_get_contents($_FILES['fname']['tmp_name']));
			echo "File successfully uploaded<br />";
			echo "<a href=\"album.php\">Back</a>";
		}
		else {
			echo "File is not in jpg format<br />";
			echo "<a href=\"album.php\">Back</a>";
		}
	}
	else {
		header('Location: album.php');
	}
?>
