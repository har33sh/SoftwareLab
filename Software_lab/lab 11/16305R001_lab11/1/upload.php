<?php
	if (filesize($_FILES['fname']['name']) > 102400) {
		echo "File size is more than 100KB<br />";
		echo "<a href=\"index.php\">Back</a>";
		exit();
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			WORD FREQUENCY COUNTER
		</title>
		<script src="../base/jquery.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 page-header">
					<span style="font-size:24px">Processed Output</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<table class="table table-striped table-bordered">
						<tr>
							<th>Word</th>
							<th>Occurence</th>
						</tr>
						<?php
							if ($_FILES['fname']['name'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['fname']['tmp_name'])) {
								$words = file_get_contents($_FILES['fname']['tmp_name']);
								$words = strtolower($words);
								$count = array_count_values(str_word_count($words, 1));
								ksort($count);
								foreach ($count as $key => $value) {
									echo "\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t<td>" . $key . "</td>\n\t\t\t\t\t\t\t<td>" . $value . "</td>\n\t\t\t\t\t\t</tr>\n";
								}
							}
						?>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>
		</div>
	</body>
</html>
