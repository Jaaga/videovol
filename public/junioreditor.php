
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

<form name="editor-form" method="post"action="../controller/junioreditorcontroller.php" onsubmit="javaScript:return validate_dropdown1();">

	<input name="fid" type="hidden" value="<?php echo $a; ?>" >
<h2>Editor's Dashboard</h2>
	<table class= "table table-hover">
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
			<!-- <p><span>field cannot be left empty</span></p> -->
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
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
			<br><label id="brollHint" style="color: red; font-style: italic;"></label>
		</td>
				<td>
		
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
		<br><label id="fintHint" style="color: red; font-style: italic;"></label>

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
		<br><label id="voHint" style="color: red; font-style: italic;"></label>
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
			<br><label id="ptcHint" style="color: red; font-style: italic;"></label>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="cta">CTA :</label>
		</td>
			<select name="cta">
				<?php $selection = $result['cta']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection,"Good") ==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection,"Not Good") ==0) echo "selected"; ?>>Not Good</option>
			</select>
		<br><label id="ctaHint" style="color: red; font-style: italic;"></label>
		</td>
	</tr>
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
		<br><label id="vdHint" style="color: red; font-style: italic;"></label>
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="translation">Translation :</label>
		</td>
		<td>s
			<select name="translation">
				<?php $selection = $result['translation']; ?>
				<option value ="0"
				<?php if(strcmp($selection,"0") ==0) echo "selected"; ?>>Select</option>
				<option value = "yes"
				<?php if(strcmp($selection,"YES") ==0) echo "selected"; ?>>YES</option>
				<option value = "NO"
				<?php if(strcmp($selection,"NO") ==0) echo "selected"; ?>>NO</option>
				<option value = "Not Required"
				<?php if(strcmp($selection,"Not Required") ==0) echo "selected"; ?>>Not Required</option>
			</select>
		<br><label id="translationHint" style="color: red; font-style: italic;"></label>
		</td>
		</tr>

		<tr>
		<td> 
<input name="btnSubmit" type="submit" value="Submit" id="btnSubmit"/>
</td>
		</tr>

	</table>
</form>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="script.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
