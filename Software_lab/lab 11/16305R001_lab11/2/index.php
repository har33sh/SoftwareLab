<!DOCTYPE HTML>
<html>
	<head>
		<meta name="author" content="Anshul Gupta" />
		<title>
			Homepage || Photo Album
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script>
		</script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 jumbotron well well-lg">
					<strong> Photo Album Login </strong> <br/>
				</div>
			</div>

			<div class="row" style="min-height:500px;">
				<div class="col-xs-12" style="text-align: center">
					<form method="POST" action="login.php">
						<input type="username" id="user" name="user" placeholder="Username" autocomplete="off" />
						<br />
						<input type="password" id="pass" name="pass" placeholder="Password" />
						<br />
						<input type="submit" value="Login" />
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
