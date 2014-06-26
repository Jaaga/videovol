
<?php
include("header.php");
include "../model/StoryDB.php";
$a=$_GET['id'];
$result = getDataByUniqueNumber($a); 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor's Dashboard</title>
</head>
<body>
<form name="editor-form" method="post"action="../controller/junioreditorcontroller.php">
	<input name="fid" type="hidden" value="<?php echo $a; ?>" >
<h2>Editor's Dashboard</h2>
	<table>
		<tr><td valign="top"><label for="seq">SEQ :</label></td>
		<td><select name="seq">
			<?php $selection = $result['seq']; ?>
				<option value ="0"
				<?php if(strcmp($selection, "0")==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection, "Good")==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection, "Not Good")==0) echo "selected"; ?>>Not Good</option>
			</select>
		</td>
		</tr>

		<tr><td valign="top"><label for="broll">B-Roll :</label></td>
		<td><select name="broll">
			<?php $selection = $result['broll']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?> >Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="fint">FINT :</label>
		</td>
		<td>
			<select name="fint">
				<?php $selection = $result['fint']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?> >Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?> >Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?> >Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="vo">VO :</label>
		</td>
		<td>
			<select name="vo">
				<?php $selection = $result['vo']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="ptc">PTC :</label>
		</td>
		<td>
			<select name="ptc">
				<?php $selection = $result['ptc']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="cta">CTA :</label>
		</td>
		<td>
			<select name="cta">
				<?php $selection = $result['cta']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>

		</td>

		<tr>
		<td valign="top">
			<label for="vd">VD :</label>
		</td>
		<td>
			<select name="vd">
				<?php $selection = $result['vd']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="translation">Translation :</label>
		</td>
		<td>
			<select name="translation">
				<?php $selection = $result['translation']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "yes"
				<?php if(strcmp($selection,"yes") ==0) echo "selected"; ?>>YES</option>
				<option value = "NO"
				<?php if(strcmp($selection,"NO") ==0) echo "selected"; ?>>NO</option>
				<option value = "Not Required"
				<?php if(strcmp($selection,"Not Required") ==0) echo "selected"; ?>>Not Required</option>
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
