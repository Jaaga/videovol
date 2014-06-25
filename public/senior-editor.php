<?php
$fid = $_GET['id'];
include ('header.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Senior Editor</title>
</head>
<body>
	<h1>Senior Editor's Dashboard</h1>
	<form name="senioreditor-form" method="post" action="../public/seupdate.php">
		<input name="fid" type="hidden" value="<?php echo $fid; ?>" >
		<label for="uploaddate">Upload Date</label>
		<input type="text" name="uploaddate" id="datepicker"/>
		<label for="publishdate">Publish Date</label>
		<input type="text" name="publishdate" id="datepicker"/>

	<tr>
 	<td valign="top">
  		<label for="receivedRO">Received at RO:</label>
	</td>
 	<td valign="top">
 		<select name="receivedRO">
				<option value ="0">Select</option>
				<option value = "Good">yes</option>
				<option value = "Not Good">No</option>
			</select>
  		<!--<input type="radio" name="receivedRO" />yes
		<input type="radio" name="receivedRO" />no-->
	</td>
	</tr>

	<tr>
 	<td valign="top">
  		<label for="receivedHQ">Received at HQ:</label>
	</td>
 	<td valign="top">
 		<select name="receivedHQ">
				<option value ="0">Select</option>
				<option value = "Good">yes</option>
				<option value = "Not Good">No</option>
			</select>
  		<!--<input type="radio" name="receivedHQ" />yes
		<input type="radio" name="receivedHQ" />no-->
	</td>
	</tr>

		<input type="submit">
	</form>
	
</body>
</html>