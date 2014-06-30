
<?php
include("header.php");
$a=$_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor</title>
</head>
<body>
	
<form name="editor-form" method="post" >
		<input name="fid" type="hidden" value="<?php echo $fid; ?>" >
		
	<h2>Editor's Dashboard</h2>

<table>
	<tr><td valign="top">  
		<label for="editrecieve">Received for Editing</label>
	</td>
	<td valign="top">		
		<input type="text" name="editrecieve" id="datepicker"/>
	</td>
	</tr>
	
	<tr>
	<td valign="top"> 
				<label for="editorName">Editor :</label>
			</td>
			<td> 
				<input type="text" name="editorName">
	</td>
	</tr>
	
	<tr><td valign="top"> 
		<label for="editcomplete">Editing Completed</label>
	</td>
	<td valign="top">	
		<input type="text" name="editcomplete" id="datepick"/>
	</td>
	</tr>

	<td valign="top">
 		<select name="editcomplete">
				<option value ="0">Select</option>
				<option value = "Good">yes</option>
				<option value = "Not Good">No</option>
		</select>
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		<label for="subtitleStatus">Subtitling Status:</label>
 	</td>
 	<td valign="top">
 		<select name="subtitleStatus">
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
		<input type="text" name="videosent" id="datepick"/>
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		 <label for="notes">Notes: </label>
 	</td>
 	<td valign="top">
  		<textarea  name="notes" maxlength="1000" cols="25" rows="6"></textarea>
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