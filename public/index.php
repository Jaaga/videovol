
<?php include("header.php")
?>


	<div class="user">
	<br>
	<a href="createstory.php" class="button button-rounded button-flat-action">CC Mentor</a>
	<a href="edit.php" class="button button-rounded button-flat-action">Junior Editor</a>
	<a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor</a>
	<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager</a>
	<a href="login.php" class="button button-rounded button-flat-action">login</a>
	</div>

	<div>
	<br>
		<a href="viewalldata.php" class="button button-rounded button-flat-primary">View Data</a>
	</div>

<!--cc.php is here-->
<table>
<form method="POST" action="viewcc.php">
	<?php
	$query = mysql_query("SELECT * FROM storytrack"); // Run the query

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
	$query = mysql_query("SELECT * FROM storytrack"); // Run the query

	// Opens the drop down box
	echo '<tr><td valign="top"><label>View By: </label><select name="issuetopic"><option value="">Select Issue</option>'; 

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
$query = mysql_query("SELECT * FROM storytrack"); // Run the query

echo '<tr><td valign="top"><label>View By: </label><select name="state"><option value="">Select State</option>';
 // Opens the drop down box

// Loops through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';
}
echo '</select></td>';// Closes drop down box
?>
<td><input type="submit"></td></tr>
</form>
</table>
</body>

</body>
</html>
