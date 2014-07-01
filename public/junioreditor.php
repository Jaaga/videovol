
<?php
$un=$_GET['un'];
echo "edit UN: " . $un;


//include_once("header.php");
include_once("../model/PostDB.php");

$data = getJuniorEditorDataByUniqueNumber($un); 
echo 'sec: ' . $data['sec'];
echo '  reviewedby: ' . $data['reviewedby'];
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

		<tr><td valign="top"><label for="seq">SEQ : <?php echo $data['seq']; ?> : </label></td>
		<td><select name="seq">
			<?php $selection = $data['seq']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="seq">BROLL : <?php echo $data['broll']; ?> : </label></td>
		<td><select name="broll">
			<?php $selection = $data['broll']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="fint">INT : <?php echo $data['fint']; ?> : </label></td>
		<td><select name="fint">
			<?php $selection = $data['fint']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="vo">VO : <?php echo $data['vo']; ?> : </label></td>
		<td><select name="vo">
			<?php $selection = $data['vo']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="ptc">PTC : <?php echo $data['ptc']; ?> : </label></td>
		<td><select name="ptc">
			<?php $selection = $data['ptc']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="cta">CTA : <?php echo $data['cta']; ?> : </label></td>
		<td><select name="cta">
			<?php $selection = $data['cta']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="vd">VD : <?php echo $data['vd']; ?> : </label></td>
		<td><select name="vd">
			<?php $selection = $data['vd']; ?>
				<option value = "Good"
				<?php if($selection == "Good") { echo "selected"; ?>>Good</option>
				<option value = "Not Good"
				<?php } else if($selection == "Not Good") { echo "selected"; ?>>Not Good</option>
				<option value ="0"
				<?php } else echo "selected"; ?>>Select</option>
			</select>
		<br><label id="seqHint" style="color: red; font-style: italic;"></label>	
		</td>
		</tr>

		<tr><td valign="top"><label for="translation">Translation :</label></td>
			<td>
				<input type="text" name="translation" 
					value=<?php echo "\"" . $data['translation'] . "\""; ?> />
			</td>
		</tr>
		<tr><td valign="top"><label for="paymentapproved">Payment Approved :</label></td>
			<td>
				<input type="text" name="paymentapproved" 
					value=<?php echo "\"" . $data['paymentapproved'] . "\""; ?> />
			</td>
		</tr>
		<tr><td valign="top"><label for="approvedon">Approved On :</label></td>
			<td>
				<input type="text" name="approvedon" 
					value=<?php echo "\"" . $data['approvedon'] . "\""; ?> />
			</td>
		</tr>


	</table>
</form>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="script.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
