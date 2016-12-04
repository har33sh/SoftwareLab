<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Upload Photos
		</title>
		<script src="../base/jquery.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>

		<script>
			function checkExt() {
				fname = document.getElementById("fname")
				if (fname.value.search("\.jpg$") < 0) {
					alert("Please give a .jpg file as input")
					fname.value = ""
				}
			}
		</script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 page-header">
					<span style="font-size:24px">Upload Image</span>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 " style="min-height:500px;">
					<form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal">
						<input type="file" id="fname" name="fname" onchange="checkExt()" />
						<br />
						<input type="submit" value="Upload" name="submit" class="btn btn-primary" />
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
				<p>
					<span class="glyphicon glyphicon-copyright-mark"></span> Anshul Gupta, 2016 <br>
					All Rights Reserved.
				</p>
				</div>
			</div>
		</div>
	</body>
</html>
