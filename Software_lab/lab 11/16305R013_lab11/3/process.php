<!DOCTYPE HTML>
<html>
	<head>
		<meta name="author" content="Hareesh" />
		<title>	REMINDER SERVICE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 jumbotron well well-lg">
					<strong>REMINDER SERVICE</strong> <br/>
				</div>
			</div>
			<div class="row" style="min-height:500px;">
	<?php
	$servername = "1.db.cse.iitb.ac.in";
	$username = "cs699user";
	$password = "cs699user@123";
	$dbname = "cs699db";
	$table = "event";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if ($_POST['submit'] == "Add Event") {
		$date = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
		$sTime = $_POST['startHour'] . ":" . $_POST['startMinute'] . ":" . $_POST['startSecond'];
		$eTime = $_POST['endHour'] . ":" . $_POST['endMinute'] . ":" . $_POST['endSecond'];
		$name = $_POST['name'];
		$query = "INSERT INTO $table (event_date, start_time, end_time, description) VALUES (\"$date\", \"$sTime\", \"$eTime\", \"$name\")";
		$result = $conn->query($query);
		if ($result > 0)
			echo "Event Successfully added<br/>";
		else
			echo "Some error occured<br/>";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}

	else if ($_POST['submit'] == "Delete Event") {
		$id = $_POST['id'];
		$query = "DELETE FROM $table WHERE event_id = $id";
		$result = $conn->query($query);
		if ($result > 0)
			echo "Event Id " . $id . " successfully deleted<br />";
		else
			echo "Some error occured<br/>";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}

	else if ($_POST['submit'] == "Update Event") {
		$id = $_POST['id'];
		$date = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
		$sTime = $_POST['startHour'] . ":" . $_POST['startMinute'] . ":" . $_POST['startSecond'];
		$eTime = $_POST['endHour'] . ":" . $_POST['endMinute'] . ":" . $_POST['endSecond'];
		$name = $_POST['name'];
		$query = "UPDATE $table SET event_date = \"$date\", start_time = \"$sTime\", end_time = \"$eTime\", description = \"$name\" WHERE event_id = \"$id\"";
		$result = $conn->query($query);
		if ($result > 0)
			echo "Event  $_POST[event_id] successfully updated<br />";
		else
			echo "Some error occured<br/>";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}

	else if ($_POST['submit'] == "Show Events") {
		$date = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
		$query = "SELECT * FROM $table WHERE event_date = \"$date\"";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			echo "<table border=1 class=\"table table-striped table-bordered\">";
			echo "<tr>";
			echo "<th>Event ID</th><th>Event Date</th><th>Start Time</th><th>End Time</th><th>Event Name</th>";
			echo "</tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row[event_id] . "</td><td>" . $row[event_date] . "</td><td>" . $row[start_time] . "</td><td>" . $row[end_time] . "</td><td>" . $row[description] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else {
			echo "No events on this day";
		}

		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}

	else if ($_POST['submit'] == "Show All") {
		$query = "SELECT * FROM $table";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			echo "<table class=\"table table-striped table-bordered\">";
			echo "<tr>";
			echo "<th>Event ID</th><th>Event Date</th><th>Start Time</th><th>End Time</th><th>Event Name</th>";
			echo "</tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row[event_id] . "</td><td>" . $row[event_date] . "</td><td>" . $row[start_time] . "</td><td>" . $row[end_time] . "</td><td>" . $row[description] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else {
			echo "No events";
		}

		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}
	$conn->close();
	?>


	</div>
	<div class="row">
	<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
		<p>
			<span class="glyphicon glyphicon-copyright-mark"></span> Hareesh, 2016 <br>
			All Rights Reserved.
		</p>
	</div>
</div>
</div>
</body>
</html>
