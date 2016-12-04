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
		<script>
			function hideAll() {
				document.getElementById("add").style.display = "none";
				document.getElementById("delete").style.display = "none";
				document.getElementById("update").style.display = "none";
				document.getElementById("showDay").style.display = "none";
				document.getElementById("showAll").style.display = "none";
			}
			function showAdd() {
				document.getElementById("add").style.display = "block";
			}
			function showDelete() {
				document.getElementById("delete").style.display = "block";
			}
			function showUpdate() {
				document.getElementById("update").style.display = "block";
			}
			function showShowDay() {
				document.getElementById("showDay").style.display = "block";
			}
			function showShowAll() {
				document.getElementById("showAll").style.display = "block";
			}
		</script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 jumbotron well well-lg">
					<strong>REMINDER SERVICE</strong> <br/>
				</div>
			</div>

			<div class="row" style="min-height:500px;">
				<div class="col-xs-12" style="text-align: center">
					<input type="button" value="Add event" name="submit" class="btn btn-primary" onclick="hideAll(); showAdd();" />
					<input type="submit" value="Delete event" name="submit" class="btn btn-primary" onclick="hideAll(); showDelete();" />
					<input type="submit" value="Update event" name="submit" class="btn btn-primary" onclick="hideAll(); showUpdate();" />
					<input type="submit" value="Show events on a day" name="submit" class="btn btn-primary" onclick="hideAll(); showShowDay();" />
					<input type="submit" value="Show all events" name="submit" class="btn btn-primary" onclick="hideAll(); showShowAll();" />
				</div>
				<form id="add" method="POST" action="process.php" style="display:none">
					<h2>Add event</h2>
					<br />
					<table>
						<tr>
							<td><strong>Date</strong></td>
							<td><input type="text" name="startYear" placeholder="YYYY" required="required" autocomplete="off" size="4" maxlength="4" /> - <input type="text" name="startMonth" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" /> - <input type="text" name="startDay" placeholder="DD" required="required" autocomplete="off" size="2" maxlength="2" /></td>
						</tr>
						<tr>
							<td><strong>Start Time</strong></td>
							<td><input type="text" name="startHour" placeholder="HH" required="required" autocomplete="off" size="2" maxlength="2" /> : <input type="text" name="startMinute" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" /> : <input type="text" name="startSecond" placeholder="SS" required="required" autocomplete="off" size="2" maxlength="2" /></td>
						</tr>
						<tr>
							<td><strong>End Time</strong></td>
							<td><input type="text" name="endHour" placeholder="HH" required="required" autocomplete="off" size="2" maxlength="2" /> : <input type="text" name="endMinute" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" /> : <input type="text" name="endSecond" placeholder="SS" required="required" autocomplete="off" size="2" maxlength="2" /></td>
						</tr>
						<tr>
							<td><strong>Description</strong></td>
							<td><input type="text" size="64" maxlength="64" placeholder="Description" name="description" autocomplete="off" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Add" /></td>
						</tr>
					</table>
				</form>
				<form id="delete" method="POST" action="process.php" style="display:none">
					<h2>Delete event</h2>
					<br />
					<table>
						<tr>
							<td><strong>Event ID</strong></td>
							<td><input type="text" name="eventID" placeholder="Event ID" required="required" autocomplete="off" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Delete" /></td>
						</tr>
					</table>
				</form>
				<form id="update" method="POST" action="process.php" style="display:none">
					<h2>Update event</h2>
					<br />
					<table>
						<tr>
							<td><strong>Event ID</strong></td>
							<td><input type="text" name="eventID" placeholder="Event ID" required="required" autocomplete="off" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Update" /></td>
						</tr>
					</table>
				</form>
				<form id="showDay" method="POST" action="process.php" style="display:none">
					<h2>Show events on a day</h2>
					<br />
					<table>
						<tr>
							<td><strong>Date</strong></td>
							<td><input type="text" name="startYear" placeholder="YYYY" required="required" autocomplete="off" size="4" maxlength="4" /> - <input type="text" name="startMonth" placeholder="MM" required="required" autocomplete="off" size="2" maxlength="2" /> - <input type="text" name="startDay" placeholder="DD" required="required" autocomplete="off" size="2" maxlength="2" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Show Events" /></td>
						</tr>
					</table>
				</form>
				<form id="showAll" method="POST" action="process.php" style="display:none">
					<h2>Show all events</h2>
					<br />
					<table>
						<tr>
							<td><input type="submit" name="submit" value="Show All" /></td>
						</tr>
					</table>
				</form>
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
