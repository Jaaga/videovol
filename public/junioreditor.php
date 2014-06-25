
<?php
include("header.php");
$a=$_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor's Dashboard</title>
</head>
<body>
<form name="editor-form" method="post"action="../public/junioredit.php">
	<input name="fid" type="hidden" value="<?php echo $a; ?>" >
<h2>Editor's Dashboard</h2>
	<table>
		<tr><td valign="top"><label for="seq">SEQ :</label></td>
		<td><select name="seq">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		</td>
		</tr>

		<tr><td valign="top"><label for="broll">B-Roll :</label></td>
		<td><select name="broll">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="fint">FINT :</label>
		</td>
		<td>
			<select name="fint">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="vo">VO :</label>
		</td>
		<td>
			<select name="vo">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="ptc">PTC :</label>
		</td>
		<td>
			<select name="ptc">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="cta">CTA :</label>
		</td>
		<td>
			<select name="cta">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>

		</td>

		<tr>
		<td valign="top">
			<label for="vd">VD :</label>
		</td>
		<td>
			<select name="vd">
				<option value ="0">Select</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="translation">Translation :</label>
		</td>
		<td>
			<select name="translation">
				<option value ="0">Select</option>
				<option value = "yes">YES</option>
				<option value = "NO">NO</option>
				<option value = "Not Required">Not Required</option>
			</select>

		</td>
		</tr>

		<tr>
		<td>
			<input type="submit">
		</td>
		</tr>

	</table>
</form>
	
</body>
</html>
