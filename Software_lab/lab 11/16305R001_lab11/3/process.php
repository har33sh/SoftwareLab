<!DOCTYPE HTML>
<html>
	<head>
		<meta name="author" content="Anshul Gupta" />
		<title>
			REMINDER SERVICE
		</title>
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

	if ($_POST['submit'] == "Add") {
		$eventDate = $_POST['startYear'] . "-" . $_POST['startMonth'] . "-" . $_POST['startDay'];
		$startTime = $_POST['startHour'] . ":" . $_POST['startMinute'] . ":" . $_POST['startSecond'];
		$endTime = $_POST['endHour'] . ":" . $_POST['endMinute'] . ":" . $_POST['endSecond'];
		$description = $_POST['description'];
		$query = "INSERT INTO $table (event_date, start_time, end_time, description) VALUES (\"$eventDate\", \"$startTime\", \"$endTime\", \"$description\")";

		$result = $conn->query($query);
		if ($result > 0)
			echo "Event Successfully added\n<br />\n";
		else
			echo "Error in adding the event\n<br />\n";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}
	else if ($_POST['submit'] == "Delete") {
		$eventID = $_POST['eventID'];
		$query = "DELETE FROM $table WHERE event_id = $eventID";

		$result = $conn->query($query);

		echo "If event_id = " . $eventID . " was valid, it was successfully deleted\n<br />\n";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}
	else if ($_POST['submit'] == "Update") {
		$eventID = $_POST['eventID'];
		$query = "SELECT * FROM $table WHERE event_id = $eventID";

		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();

			$date = explode("-", $row[event_date]);
			$sTime = explode(":", $row[start_time]);
			$eTime = explode(":", $row[end_time]);

			$year = $date[0];
			$month = $date[1];
			$day = $date[2];

			$sHour = $sTime[0];
			$sMin = $sTime[1];
			$sSec = $sTime[2];

			$eHour = $eTime[0];
			$eMin = $eTime[1];
			$eSec = $eTime[2];

			$desc = $row[description];
			echo '
			<form id="add" method="POST" action="process.php">
				<h2>Update event</h2>
				<br />
				<input type="hidden" name="event_id" value=' . $eventID . ' />
				<table>
					<tr>
						<td><strong>Date</strong></td>
						<td><input type="text" name="startYear" placeholder="YYYY" required="required" autocomplete="off" size="4" maxlength="4" value=' . $year . ' /> - <input type="text" name="startMonth" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" value=' . $month . ' /> - <input type="text" name="startDay" placeholder="DD" required="required" autocomplete="off" size="2" maxlength="2" value=' . $day . ' /></td>
					</tr>
					<tr>
						<td><strong>Start Time</strong></td>
						<td><input type="text" name="startHour" placeholder="HH" required="required" autocomplete="off" size="2" maxlength="2" value=' . $sHour . ' /> : <input type="text" name="startMinute" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" value=' . $sMin . ' /> : <input type="text" name="startSecond" placeholder="SS" required="required" autocomplete="off" size="2" maxlength="2" value=' . $sSec . ' /></td>
					</tr>
					<tr>
						<td><strong>End Time</strong></td>
						<td><input type="text" name="endHour" placeholder="HH" required="required" autocomplete="off" size="2" maxlength="2" value=' . $eHour . ' /> : <input type="text" name="endMinute" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" value=' . $eMin . ' /> : <input type="text" name="endSecond" placeholder="SS" required="required" autocomplete="off" size="2" maxlength="2" value=' . $eSec . ' /></td>
					</tr>
					<tr>
						<td><strong>Description</strong></td>
						<td><input type="text" size="64" maxlength="64" placeholder="Description" name="description" autocomplete="off" value=' . $desc . ' /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Update Event" /></td>
					</tr>
				</table>
			</form>';
		}
		else {
			echo "Invalid event_id\n<br />\n";
		}

		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}
	else if ($_POST['submit'] == "Update Event") {
		$eventDate = $_POST['startYear'] . "-" . $_POST['startMonth'] . "-" . $_POST['startDay'];
		$startTime = $_POST['startHour'] . ":" . $_POST['startMinute'] . ":" . $_POST['startSecond'];
		$endTime = $_POST['endHour'] . ":" . $_POST['endMinute'] . ":" . $_POST['endSecond'];
		$description = $_POST['description'];

		$query = "UPDATE $table SET event_date = \"$eventDate\", start_time = \"$startTime\", end_time = \"$endTime\", description = \"$description\" WHERE event_id = \"$_POST[event_id]\" ";

		$result = $conn->query($query);

		if ($result > 0)
			echo "Event with event_id = $_POST[event_id] successfully updated\n<br />\n";
		else
			echo "Error in updating the event\n<br />\n";
		echo "<br /><a href=\"index.php\" class=\"btn btn-primary\">Back</a>";
	}
	else if ($_POST['submit'] == "Show Events") {
		$eventDate = $_POST['startYear'] . "-" . $_POST['startMonth'] . "-" . $_POST['startDay'];
		$query = "SELECT * FROM $table WHERE event_date = \"$eventDate\"";

		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			echo "<table border=1 class=\"table table-striped table-bordered\">";
			echo "<tr>";
			echo "<td><strong>Event ID</strong></td><td><strong>Event Date</strong></td><td><strong>Start Time</strong></td><td><strong>End Time</strong></td><td><strong>Description</strong></td>";
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
			echo "<td><strong>Event ID</strong></td><td><strong>Event Date</strong></td><td><strong>Start Time</strong></td><td><strong>End Time</strong></td><td><strong>Description</strong></td>";
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
			<span class="glyphicon glyphicon-copyright-mark"></span> Anshul Gupta, 2016 <br>
			All Rights Reserved.
		</p>
	</div>
</div>
</div>
</body>
</html>
