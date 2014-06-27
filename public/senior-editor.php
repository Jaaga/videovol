<?php
include '../model/StoryDB.php';
$fid = $_GET['id'];
$result= getDataByUniqueNumber($fid);
include ('header.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Senior Editor</title>
</head>
<body>

	<h1>Senior Editor's Dashboard</h1>
	<form name="senioreditor-form" method="post" action="../controller/senioreditorcontroller.php">
		<input name="fid" type="hidden" value="<?php echo $fid; ?>" >
		
	<h2>Senior Editor's Dashboard</h2>

<table>
	<tr><td valign="top">  
		<label for="uploaddate">Upload Date</label>
	</td>
	<td valign="top">		
		<input type="text" name="uploaddate" value="<?php echo $result['uploaddate']; ?> " id="datepicker"/>
	</td>
	</tr>

	<tr><td valign="top"> 
		<label for="publishdate">Publish Date</label>
	</td>
	<td valign="top">	
		<input type="text" name="publishdate" value="<?php echo $result['publishdate']; ?> "id="datepick"/>
	</td>
	</tr>

	<tr>
 	<td valign="top">
  		<label for="receivedRO">Received at RO:</label>
	</td>

 	<td valign="top">
 		<select name="receivedRO">
 			<?php $value = $result['receivedRO'];?>
				<option value ="0"
				<?php if(strcmp($value, 0)==0) echo "selected"; ?>>Select</option>
				<option value = "yes"
				<?php if(strcmp($value, "yes")==0) echo "selected"; ?>>yes</option>
				<option value = "No"
				<?php if(strcmp($value, "No")==0) echo "selected"; ?>>No</option>
			</select>
  		<!--<input type="radio" name="receivedRO" />yes
		<input type="radio" name="receivedRO" />no-->
	</td>
	</tr>

	<tr>
 	<td valign="top">
  		<label for="receivedHQ">Received at HQ:</label>
	</td>
 	<td valign="top">
 		<select name="receivedHQ">
 			<?php $value = $result['receivedHQ'];?>
				<option value ="0"
				<?php if(strcmp($value, 0)==0) echo "selected"; ?>>Select</option>
				<option value = "yes"
				<?php if(strcmp($value, "yes")==0) echo "selected"; ?>>yes</option>
				<option value = "No"
				<?php if(strcmp($value, "No")==0) echo "selected"; ?>>No</option>
			</select>
  		<!--<input type="radio" name="receivedHQ" />yes
		<input type="radio" name="receivedHQ" />no-->
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
$( "#datepicker" ).datepicker();
});

$(function() {
$( "#datepick" ).datepicker();
});
</script>	
</body>
</html>