<?php
$fid=$_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Manager</title>
</head>
<body>
<form name="projectmanager-form" method="post" action = "../public/pmupdate.php">
	<input name="fid" type="hidden" value="<?php echo $fid ?>">
<h2>Project Manager's Dashboard</h2>
<table>


<tr>
 	<td valign="top">
  		<label for="paymentStatus">Payment Status:</label>
	</td>
 	<td valign="top">
  		<input type="radio" name="paymentStatus" />ok
		<input type="radio" name="paymentStatus" />hold
	</td>
</tr>
 

<tr>
 	<td valign="top">
 		 <label for="editStatus">Edit Status:</label>
 	</td>
 	<td valign="top">
  		<input type="radio" name="editStatus"/>incomplete
		<input type="radio" name="editStatus"/>edited	
	</td>
</tr>


<tr>
 	<td valign="top">
  		<label for="editMonth">Edit Month: </label>
 	</td>
 	<td valign="top">
  		<input  type="date" name="editMonth">
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
 	<td valign="top">
  		<label for="publishPlatform">Publish Platform: </label>
 	</td>
 	<td valign="top">
  		<input type="radio" name="publishPlatform" />IU
		<input type="radio" name="publishPlatform" />YT
		<input type="radio" name="publishPlatform" />Special
 	</td>
</tr>

<tr>
 	<td valign="top">
  		<label for="editorName">Editor</label>
	</td>
 	<td valign="top">
  		<select name="editorNames">
			<option value="option1">Option 1</option>
			<option value="option2">Option 2</option>
			<option value="option3">Option 3</option>
			<option value="option4">Option 4</option>
			<option value="option5">Option 5</option>
		</select><br>
	</td>
</tr>

<tr>
 	<td valign="top">
  		<label for="editorPayment">Editor Payment:</label>
	</td>
 	<td valign="top">
  		<input type="radio" name="editorPayment" />ok
	</td>
</tr>

<tr>
 	<td>
<input type="submit">
</td>
</tr>

</table>

</form>





