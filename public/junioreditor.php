
<?php
include_once("header.php");

if (isset($_GET['un'])) {
	$un=$_GET['un'];
	echo "edit UN: " . $un;
	include_once("../model/PostDB.php");
	$data = getJuniorEditorDataByUniqueNumber($un); 
	$edit = TRUE;
} else $edit = FALSE;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor's Dashboard</title>
	<h2>Editor's Dashboard</h2>
</head>
<body>

<form name="editor-form" method="get" action="junioreditorview.php" 
		onsubmit="javaScript:return validate_dropdown1();">

	<input name="un" type="hidden" value=<?php echo $un; ?> > 
	<input name="action" type="hidden" value="update" > 
	<table class= "table table-hover">
		<tr><td valign="top"><label for="footage received">Footage Received :</label></td>
			<td>
				<p><input type="text" name="footagereceived" id="footageReceivedDatePick" 
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

<?php 

function echoSelect($label, $column, $value) {
	echo "<tr><td valign='top'><label for='" . $column . "'>" . 
		$label . " : " . $value . "</label></td>" .
		"<td><select name='" . $column . "'>";
	if (isset($value) == FALSE) 
		echo "<option value='0'>Select</option>";
	echo "<option value = 'Good'";
	if($value == "Good") 
		echo " selected"; 
	echo ">Good</option>";
	echo "<option value = 'Not Good'";
	if($value == "Not Good")  
		echo "selected";
	echo ">Not Good</option>";
	echo "
		<br><label id='seqHint' style='color: red; font-style: italic;'></label>	
		</td>
		</tr>";
}

echoSelect('SEQ', 'seq', $data['seq']);
echoSelect('B-ROLL', 'broll', $data['broll']);
echoSelect('INT', 'fint', $data['fint']);
echoSelect('VO', 'vo', $data['vo']);
echoSelect('PTC', 'ptc', $data['ptc']);
echoSelect('CTA', 'cta', $data['cta']);
echoSelect('VD', 'vd', $data['vd']);
?>
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
					id="approvedOnDatePick" value=<?php echo "\"" . $data['approvedon'] . "\""; ?> />
			</td>
		</tr>

		<tr><td><input type=submit></td></tr>
	</table>
</form>
</body>
</html>