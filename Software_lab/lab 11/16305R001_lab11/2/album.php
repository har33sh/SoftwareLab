<?php
	//Setting default image_id
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
  header("Pragma: no-cache"); // HTTP 1.0.
  header("Expires: 0"); // Proxies.
	$image_id = '1';

	if(isset($_GET['image_id']))
		$image_id = $_GET['image_id'];

	$first = 1;
  for ($i = 1; $i <= 10; $i++) {
    $filename = "images/" . $i . ".jpg";
    if (!file_exists($filename))
      break;
  }
  $last = $i - 1;

	$prev = (int)$image_id - 1;
	if ($prev < $first)
		$prev = $first;

	$next = (int)$image_id + 1;
	if ($next > $last)
		$next = $last;
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta name="author" content="Anshul Gupta" />
		<title>
			Photo Viewer || Photo Album
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>

		<script>
		</script>

		<style>
			a{
				color: inherit;
			}
			a:hover{
				color: inherit;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 jumbotron well well-lg">
					<strong> Photo Album </strong>
					<div class="pull-right">
						<a href="new_upload.php" class="btn btn-info" role="button">Upload New Image</a>
					</div>
				</div>
			</div>

			<div class="row" style="min-height:500px;">
				<div class="col-xs-3">
				</div>

				<div class="col-xs-6">
					<img src="images/<?php echo $image_id ?>.jpg" class="img-thumbnail" alt="Cinque Terre" width="600">
				</div>

				<div class="col-xs-3">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12" style="text-align:center">
					<div class="btn-group">

						<btn type="button" class="btn btn-success">
							<a href="album.php?image_id=<?php echo $first; ?>">
								<span class="glyphicon glyphicon-fast-backward"></span>First
							</a>
						</btn>

						<btn type="button" class="btn btn-warning">
							<a href="album.php?image_id=<?php echo $prev; ?>">
								<span class="glyphicon glyphicon-step-backward"></span> Prev
							</a>
						</btn>

						<btn type="button" class="btn btn-warning">
							<a href="album.php?image_id=<?php echo $next; ?>">
								Next <span class="glyphicon glyphicon-step-forward"></span>
							</a>
						</btn>

						<btn type="button" class="btn btn-success">
							<a href="album.php?image_id=<?php echo $last; ?>">
								Last <span class="glyphicon glyphicon-fast-forward"></span>
							</a>
						</btn>
					</div>
				</div>
				<br><br>
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
