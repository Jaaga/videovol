
<?php
$un=$_GET['un'];
echo "edit UN: " . $un;


include_once("util.php");
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


<?php 
labeledDatePicker("Received In Goa Office", goareceived, $data['goareceived']);
yesNoSelect('Subtitling Required', 'subtitlerequired', $data['subtitlerequired']); 
labeledDatePicker('Subtitling Completed On', 'subtitledone', $data['subtitledone']);
yesNoSelect('Cleaning Required', 'cleaningrequired', $data['cleaningrequired']); 
labeledDatePicker('Cleaning Completed On', 'cleaningdone', $data['cleaningdone']);
labeledTextBox('Feedback', 'feedback', $data['feedback']);
labeledTextBox('Senior Editor Notes', 'seniornotes', $data['seniornotes']);
labeledDatePicker('Uploaded On', 'uploaded', $data['uploaded']);
labeledDatePicker('Published On', 'published', $data['published']);
labeledTextBox('Published Platform', 'publishplatform', $data['publishplatform']);

?>
		<tr><td><input type=submit></td><tr>
	</table>
</form>

	<script src="script.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
