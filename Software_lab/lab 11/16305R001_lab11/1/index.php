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
		<script>
			function checkExt() {
				fname = document.getElementById("fname")
				if (fname.value.search("\.txt$") < 0) {
					alert("Please give a .txt file as input")
					fname.value = ""
				}
			}
		</script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 page-header">
					<span style="font-size:24px">WORD FREQUENCY COUNTER</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2">
				</div>
				<div class="col-xs-6">
					<form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal">
						<input type="file" id="fname" name="fname" oninput="checkExt()" />
						<br><br>
						<input type="submit" value="Upload File" name="submit" class="btn btn-primary"> <br>
					</form>
				</div>
				<div class="col-xs-2">
				</div>
			</div>
		</div>
	</body>
</html>
