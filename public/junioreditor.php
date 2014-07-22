
<?php
include("header.php");
include_once("util.php");


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
<?php if ($edit) {
	echo "<input name='un' type='hidden' value=\"" . $un . "\"> 
	    <input name='action' type='hidden' value='update' >"; 
} else {
	echo "<input name='action' type='hidden' value='add' >";
} ?>
	<table class= "table table-hover">
<?php if ($edit == FALSE) {
	echo "<tr><td valign='top'><label for='un'>Unique Number :</label></td>
			<td>
				<p><input type='text' name='un'></p>
			</td>
		</tr>";
} ?>
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








/*---------------------------------------*/

goodNotGoodNotSentSelect('SEQ', 'seq', $data['seq']);
goodNotGoodNotSentSelect('B-ROLL', 'broll', $data['broll']);
goodNotGoodNotSentSelect('INT', 'fint', $data['fint']);
goodNotGoodNotSentSelect('VO', 'vo', $data['vo']);
goodNotGoodNotSentSelect('PTC', 'ptc', $data['ptc']);
goodNotGoodNotSentSelect('CTA', 'cta', $data['cta']);
goodNotGoodNotSentSelect('VD', 'vd', $data['vd']);
yesNoNotRequiredSelect ('Translation', 'translation', $data['translation']);
yesNoSelect('Payment Approved', 'paymentapproved', $data['paymentapproved']);
?>


		<!-- <tr><td valign="top"><label for="translation">Translation :</label></td>
			<td>
				<input type="text" name="translation" 
					value=<?php /*echo "\"" . $data['translation'] . "\""; */?> />
			</td>
		</tr> -->
<!-- 		<tr><td valign="top"><label for="paymentapproved">Payment Approved :</label></td>
	<td>
		<input type="text" name="paymentapproved" 
			value=<?php /*echo "\"" . $data['paymentapproved'] . "\"";*/ ?> />
	</td>
</tr>
 -->

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
