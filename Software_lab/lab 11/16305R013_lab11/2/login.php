<?php
	if (($_POST["uname"]=="eval") && ($_POST["pword"]=="eval")){
                header("Location: album.php");
                die();
		}
	else{
		print "Login Error <br/>";
		print "<a href=\"index.php\" />Back</a>";
		}
?>
