
<?php
$un=$_GET['un'];
echo "edit UN: " . $un;


//include_once("header.php");
include_once("../model/PostDB.php");

$data = getJuniorEditorDataByUniqueNumber($un); 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor's Dashboard</title>
	<h2>Editor's Dashboard</h2>
</head>
<body>

<form name="editor-form" method="post" action="../controller/junioreditorcontroller.php" 
		onsubmit="javaScript:return validate_dropdown1();">

	<input name="un" type="hidden" value=<?php echo $un; ?> > 
	<table class= "table table-hover">
		<tr><td valign="top"><label for="footage received">Footage Received :</label></td>
			<td>
				<p><input type="text" name="footagereceived" id="datepick" 
					value=<?php echo "\"" . $data['footagereceived'] . "\""; ?>></p>
			</td>
		</tr>
		<tr><td valign="top"><label for="Where Received">Where Received :</label></td>
			<td>
				<p><input type="text" name="wherereceived" 
					value=<?php echo "\"" . $data['wherereceived'] . "\""; ?>></p>
			</td>
		</tr>
		<tr><td valign="top"><label for="Reviewed By">Reviewed By :</label></td>
			<td>
				<input type="text" name="reviewedby" 
					value=<?php echo "\"" . $data['reviewedby'] . "\""; ?> />
			</td>
		</tr>
<!--
		<tr><td valign="top"><label for="seq">SEQ :</label></td>
		<td><select name="seq">
			<?php $selection = $data['seq']; ?>
				<option value ="0"
				<?php if(rcmp($selection, "0")==0) echo "selected"; ?>>Select</option>
				<option value = "Good"
				<?php if(strcmp($selection, "Good")==0) echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php if(strcmp($selection, "Not Good")==0) echo "selected"; ?>>Not Good</option>
			</select>
			xxx <p><span>field cannot be left empty</span></p> 
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>

		</tr>

		<tr><td valign="top"><label for="broll">B-Roll :</label></td>
		<td><select name="broll">
			<?php $selection = $data['broll']; ?>
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
				<?php $selection = $data['fint']; ?>
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
				<?php $selection = $data['vo']; ?>
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
				<?php $selection = $data['ptc']; ?>
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
				<?php $selection = $data['cta']; ?>
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
				<?php $selection = $data['vd']; ?>
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
				<?php $selection = $data['translation']; ?>
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
-->
	</table>
</form>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="script.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
