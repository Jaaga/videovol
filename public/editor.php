
<?php
include_once("header.php");
$un=$_GET['un'];
echo "edit UN: " . $un;

include_once("../model/PostDB.php");

$data = getEditorDataByUniqueNumber($un);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor</title>
</head>
<body>
	
<form name="editor-form" method="GET" action="editview.php" onsubmit="javaScript:return validate_dropdown1();">
		<input name="un" type="hidden" value=<?php echo $un; ?> > 
		<input name="action" type="hidden" value="update" > 
		
	<h2>Editor's Dashboard</h2>

<table class="table table-hover">
	<tr><td valign="top">  
		<label for="editreceived">Received for Editing</label>
	</td>
	<td valign="top">		
		<input type="text" name="editreceived" id="datepick1" value="<?php echo $data['editreceived']; ?>">

	</td>
	</tr>
	
	<tr><td valign="top"> 
		<label for="editor"> Editor :</label>
	</td>
	<td> 
		<input type="text" name="editor" value="<?php echo $data['editor']; ?>">
	</td>
	</tr>
	
	<tr><td valign="top"> 
		<label for="editcomplete">Editing Completed</label>
	</td>
	<td valign="top">	
		<input type="text" name="editcomplete" id="datepick2" value="<?php echo $data['editcomplete']; ?>">
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		<label for="subtitlestatus">Subtitling Status:</label>
 	</td>
 	<td valign="top">
 		<select name="subtitlestatus">
 		<?php $value = $data['subtitlestatus'];?>
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
		<input type="text" name="videosent" id="datepick3" value="<?php echo $data['videosent']; ?>">
	</td>
	</tr>

	<tr>
 	<td valign="top">
 		 <label for="editnotes">Notes: </label>
 	</td>
 	<td valign="top">
  		<textarea  name="editnotes" maxlength="1000" cols="25" rows="6" ><?php echo $data['editnotes']; ?></textarea>
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

