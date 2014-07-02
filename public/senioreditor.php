
<?php
$un=$_GET['un'];
echo "edit UN: " . $un;


//include_once("header.php");
include_once("../model/PostDB.php");

$data = getSeniorEditorDataByUniqueNumber($un); 
echo 'seq: ' . $data['seq'];
echo '  reviewedby: ' . $data['reviewedby'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Senior Editor's Dashboard</title>
	<h2>Senior Editor's Dashboard</h2>
</head>
<body>

<form name="editor-form" method="get" action="senioreditorview.php" 
		onsubmit="javaScript:return validate_dropdown1();">

	<input name="un" type="hidden" value=<?php echo $un; ?> > 
	<input name="action" type="hidden" value="update" > 
	<table class= "table table-hover">
		<tr><td valign="top"><label for="goareceived">Received in Goa Office :</label></td>
			<td>
				<p><input type="text" name="goareceived" id="datepick" 
					value=<?php echo "\"" . $data['goareceived'] . "\""; ?>></p>
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
	echo "<option value = 'Yes'";
	if($value == "Yes") 
		echo " selected"; 
	echo ">Yes</option>";
	echo "<option value = 'No'";
	if($value == "No")  
		echo "selected";
	echo ">No</option>";
	echo "
		<br><label id='seqHint' style='color: red; font-style: italic;'></label>	
		</td>
		</tr>";
}

echoSelect('Subtitling Required', 'subtitlerequired', $data['subtitlerequired']);
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
					value=<?php echo "\"" . $data['approvedon'] . "\""; ?> />
			</td>
		</tr>

		<tr><td><input type=submit></td><tr>
	</table>
</form>
<!--
	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="script.js" type="text/javascript" charset="utf-8"></script>
-->
</body>
</html>
