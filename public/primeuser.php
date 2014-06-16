<?php include("header.php")
?>

	<div>
	<br>
		<a href="viewalldata.php" class="button button-rounded button-flat-primary">View Data</a>
	</div>

<div class="viewforms">
<!--cc.php is here-->

<table>
	<form method="POST" action="viewcc.php">
		<?php
		$query = mysql_query("SELECT DISTINCT ccname FROM storytrack"); // Run the query

		echo '<tr><td valign="top"><label>View By: </label><select name="ccname"><option value="">Select CC Name</option>'; // Opens the drop down box

		// Loops through the query results, outputing the options one by one
		while ($row = mysql_fetch_array($query)) {
		   echo '<option value="'.$row['ccname'].'">'.$row['ccname'].'</option>';
		}

		echo '</select></td>';// Closes drop down box
		?>
	<td><input type="submit"></td></tr>
	</form>

<!--topic.php is here-->

	<form method="POST" action="viewtopic.php">

		<?php
		$query = mysql_query("SELECT DISTINCT issuetopic FROM storytrack"); // Run the query

		// Opens the drop down box
		echo '<tr><td valign="top"><label>View By: </label><select name="issuetopic"><option value="">Issue topic</option>'; 

		// Loops through the query results, outputing the options one by one
		while ($row = mysql_fetch_array($query)) {
		   echo '<option value="'.$row['issuetopic'].'">'.$row['issuetopic'].'</option>';
		}

		// Closes drop down box
		echo '</select></td>';
		?>
		<td><input type="submit"></td></tr>
	</form>

<!--states.php is here-->

	<form method="POST" action="statesview.php">

	<?php
	$query = mysql_query("SELECT DISTINCT state  FROM storytrack"); // Run the query

	echo '<tr><td valign="top"><label>View By: </label><select name="state"><option value="">Select State</option>';
	 // Opens the drop down box</

	// Loops through the query results, outputing the options one by one
	while ($row = mysql_fetch_array($query)) {
	   echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';
	}
	echo '</select></td>';// Closes drop down box
	?>
	<td><input type="submit"></td></tr>
	</form>

<!--date.php is here-->

	<form method="POST" action="dateview.php">

	<?php
	$query = mysql_query("SELECT DISTINCT receiveddate FROM storytrack"); // Run the query

	echo '<tr><td valign="top"><label>View By: </label><select name="receiveddate"><option value="">Select Date</option>';
	 // Opens the drop down box

	// Loops through the query results, outputing the options one by one
	while ($row = mysql_fetch_array($query)) {
	   echo '<option value="'.$row['receiveddate'].'">'.$row['receiveddate'].'</option>';
	}
	echo '</select></td>';// Closes drop down box
	?>
	<td><input type="submit"></td></td></tr>
	</form>
</table>
</div>
</body>
</html>
