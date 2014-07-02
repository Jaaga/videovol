
<?php
include("header.php");
$un=$_GET['un'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor</title>
</head>
<body>
	
<form name="editor-form" method="post" >
		<input name="fid" type="hidden" value="<?php echo $un; ?>" >
		
	<h2>Editor's Dashboard</h2>

<table>
	<tr><td valign="top">  
		<label for="editreceived">Received for Editing</label>
	</td>
	<td valign="top">		
		<input type="text" name="editreceived" id="datepick1"/>
	</td>
	</tr>
	
	<tr>
	<td valign="top"> 
				<label for="editor">Editor :</label>
			</td>
			<td> 
				<input type="text" name="editor">
	</td>
	</tr>
	
	<tr><td valign="top"> 
		<label for="editcomplete">Editing Completed</label>
	</td>
	<td valign="top">	
		<input type="text" name="editcomplete" id="datepick2"/>
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		<label for="subtitlestatus">Subtitling Status:</label>
 	</td>
 	<td valign="top">
 		<select name="subtitlestatus">
			<option value ="0">Select</option>
			<option value = "Done">Done</option>
			<option value = "Not Done">Not Done</option>
		</select>
	</td>
	</tr>

	<tr><td valign="top"> 
		<label for="videosent">Complete Video Sent</label>
	</td>
	<td valign="top">	
		<input type="text" name="videosent" id="datepick3"/>
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		 <label for="editnotes">Notes: </label>
 	</td>
 	<td valign="top">
  		<textarea  name="editnotes" maxlength="1000" cols="25" rows="6"></textarea>
 	</td>
	</tr>
 	
	<tr>
	<td>
		<input type="submit">
	</td>
	</tr>

</table>	
</form>
<link rel="stylesheet" href="jqueryui/css/ui/jquery-ui.css" />
<script src="jqueryui/js/jquery.js"></script>
<script src="jqueryui/js/jquery-ui.min.js"></script>
	 <script>
$(function() {
var date = $('#datepick1').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

$(function() {
var datepick = $('#datepick2').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

$(function() {
var date = $('#datepick3').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

</script>
	
</body>
</html>