
<?php
$a=$_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor's Dashboard</title>
</head>
<body>
<form name="editor-form" method="post"action="../public/junioreditor.php">
	<input name="fid" type="hidden" value="<?php echo $a; ?>" >
<h2>Editor's Dashboard</h2>
	<table>
		<tr>
		<td valign="top">
			<label for="seq">SEQ :</label>
		</td>
		<td>
			<input type="radio" name="seq" />Good
			<input type="radio" name="seq" />Not Good
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="broll">B-Roll :</label>
		</td>
		<td>
			<input type="radio" name="broll" />Good
			<input type="radio" name="broll" />Not Good
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="int">INT :</label>
		</td>
		<td>
			<input type="radio" name="fint" />Good
			<input type="radio" name="fint" />Not Good
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="vo">VO :</label>
		</td>
		<td>
			<input type="radio" name="vo" />Good
			<input type="radio" name="vo" />Not Good
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="ptc">PTC :</label>
		</td>
		<td>
			<input type="radio" name="ptc" />Good
			<input type="radio" name="ptc" />Not Good 
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="cta">CTA :</label>
		</td>
		<td>
			<input type="radio" name="cta" />Good
			<input type="radio" name="cta" />Not Good
		</td>

		<tr>
		<td valign="top">
			<label for="vd">VD :</label>
		</td>
		<td>
			<input type="radio" name="vd" />Good
			<input type="radio" name="vd" />Not Good
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="translation">Translation :</label>
		</td>
		<td>
			<input type="radio" name="translation" />Yes
			<input type="radio" name="translation" />No
			<input type="radio" name="translation" />Not Required
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