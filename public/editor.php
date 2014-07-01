
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
		<label for="editreceived">Received for Editing</label>
	</td>
	<td valign="top">		
		<input type="text" name="editreceived" id="datepicker"/>
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
		<input type="text" name="editcomplete" id="datepick"/>
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
		<input type="text" name="videosent" id="datepick"/>
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		 <label for="editornotes">Notes: </label>
 	</td>
 	<td valign="top">
  		<textarea  name="editornotes" maxlength="1000" cols="25" rows="6"></textarea>
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