<?php
mysql_connect('localhost', 'root', '123');
mysql_select_db('videovol');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cc</title>
</head>
<body>
<!--<form method="POST" action="viewcc.php">
	<?php
	$query = mysql_query("SELECT * FROM storytrack"); // Run the query

	echo '<label>View By:</label><select name="ccname"><option value="">Select CC Name</option>'; // Opens the drop down box

	// Loops through the query results, outputing the options one by one
	while ($row = mysql_fetch_array($query)) {
	   echo '<option value="'.$row['ccname'].'">'.$row['ccname'].'</option>';
	}

	echo '</select>';// Closes drop down box
	?>
<input type="submit">-->
</form>

</body>
</html>