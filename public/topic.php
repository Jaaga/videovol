<?php
mysql_connect('localhost', 'root', '123');
mysql_select_db('videovol');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>topics</title>
</head>
<body>

<?php
$query = mysql_query("SELECT * FROM storytrack"); // Run the query

echo '<label>View By:</label><select name="issuetopic"><option value="">Select Issue</option>'; // Opens the drop down box

// Loops through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['issuetopic'].'">'.$row['issuetopic'].'</option>';
}

echo '</select>';// Closes drop down box
?>
</body>
</html>