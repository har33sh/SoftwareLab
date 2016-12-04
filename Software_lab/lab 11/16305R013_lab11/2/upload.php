<?php
        if (isset($_FILES['fileToUpload']['name'])) {
                if ($_FILES["fileToUpload"]["size"] > 204800) {
                        echo "Too Large..! File size is more than 200KB<br />";
                        echo "<a href=\"album.php\">Back</a>";
                        exit();
                }

                $input = $_FILES['fileToUpload']['tmp_name'];

                if (substr($_FILES['fileToUpload']['name'], -4) == ".jpg") {
        
	                $directory = "images";
                        $files = scandir($directory);
                        $last = count($files) - 2;
        
	                if ($last >= 10) {
                                echo "Reached maximum limit<br />";
                                exit();
	                        }
        
	                $newImageName = $last + 1;
                        $output = "images/" . $newImageName . '.jpg';

                        file_put_contents($output, file_get_contents($_FILES['fileToUpload']['tmp_name']));
                        echo "Upload Successfull<br />";
                        echo "<a href=\"album.php\">Back</a>";
                }


                else {
                        echo "File is not in .jpg format<br />";
                        echo "<a href=\"album.php\">Back</a>";
                }

        }
        else {
                header('Location: album.php');
        }
?>

