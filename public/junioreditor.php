
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

<form name="editor-form" method="post"action="../controller/junioreditorcontroller.php" onsubmit="javaScript:return validate_dropdown1();">

	<input name="fid" type="hidden" value="<?php echo $a; ?>" >
<h2>Editor's Dashboard</h2>
	<table class= "table table-hover">
		<tr><td valign="top"><label for="seq">SEQ :</label></td>
		<td><select name="seq" id="seqSelect">
				<option value="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
			<!-- <p><span>field cannot be left empty</span></p> -->
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>

		</tr>

		<tr><td valign="top"><label for="broll">B-Roll :</label></td>
		<td><select name="broll" id="brollSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
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
			<select name="fint" id="fintSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		<br><label id="fintHint" style="color: red; font-style: italic;"></label>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="vo">VO :</label>
		</td>
		<td>
			<select name="vo" id="voSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		<br><label id="voHint" style="color: red; font-style: italic;"></label>
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="ptc">PTC :</label>
		</td>
		<td>
			<select name="ptc" id="ptcSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
			<br><label id="ptcHint" style="color: red; font-style: italic;"></label>

		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="cta">CTA :</label>
		</td>
		<td>
			<select name="cta" id="ctaSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		<br><label id="ctaHint" style="color: red; font-style: italic;"></label>
		</td>

		<tr>
		<td valign="top">
			<label for="vd">VD :</label>
		</td>
		<td>
			<select name="vd" id="vdSelect">
				<option value ="0">Choose an option</option>
				<option value = "Good">Good</option>
				<option value = "Not Good">Not Good</option>
			</select>
		<br><label id="vdHint" style="color: red; font-style: italic;"></label>
		</td>
		</tr>

		<tr>
		<td valign="top">
			<label for="translation">Translation :</label>
		</td>
		<td>
			<select name="translation" id="translationSelect">
				<option value ="0">Choose an option</option>
				<option value = "yes">YES</option>
				<option value = "NO">NO</option>
				<option value = "Not Required">Not Required</option>
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
