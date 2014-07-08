<?php

include('header.php');
include_once("../model/StoryDB.php");

$un = $_GET['un'];
if (isset($_GET['un'])) {
	$storyData = getDataByUniqueNumber($un);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Story</title>

</head>
<style>

</style>
<body>

<h1><?php if (isset($un)) echo "Story Unique Number: ". $un; ?></h1>	

<form name="creatStory-form" method="GET" action="index.php">
	<?php if (isset($un)) echo "<input type=hidden name=un value= \"" . $un . "\"";?>
	<h2>Story Flow</h2>
	<table class="table table-hover">
	<div class="container">

		<tr>
			<td valign="top">
				<label for="unique_no">Unique No. :</label>
				
			</td>
			<td>
				<input type="text" name="uniquenumber" 
<?php if (isset($storyData)) echo "value= \"" . $un . "\""; ?> />
			</td>
		</tr>

		<tr>
			<td valign="top"> 
				<label for="name">CC Name :</label>
			</td>
			<td> 
				<input type="text" name="ccname" <?php if (isset($storyData)) echo "value= \"" . $storyData['ccname'] . "\""; ?> />
			</td>
		</tr>


		<tr> 
			<td valign="top"><label for="states">State :</label>
			</td>
			<td>
				<select name="state">
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Pondicherry">Pondicherry</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttaranchal">Uttaranchal</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
				</select>
			</td>
		</tr>


		<tr>
			<td valign="top">
				<label for="dateReceived">Date Received</label>
				
			</td>
			<td>
				<p><input type="text" name="dateReceived" id="dateReceivedDatePick" 
				          <?php if (isset($storyData)) echo "value= \"" . $storyData['receiveddate'] . "\""; ?>></p>
			</td>
		</tr>


		<tr>
			<td valign="top">
				<label for="issue">Issue/Topic</label>
			</td>
			<td>
				<input type="text" name="issue" <?php if (isset($storyData)) echo "value= \"" . $storyData['issuetopic'] . "\""; ?> />
			</td>
		</tr> 


		<tr>
		 	<td valign="top">
		 		 <label for="story">Story: </label>
		 	</td>
		 	<td valign="top">
		  		<textarea  name="story" maxlength="1000" cols="25" rows="6">
<?php if (isset($storyData)) echo $storyData['storydescription']; ?>
		  		</textarea>
		 	</td>
		</tr>

		<tr>
			<td valign="top">
				<label for="storydate">Date of Story</label>
			</td>
			<td>
				<p><input type="text" name="storydate" id="dateOfStoryDatePick" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['dateofstory'] . "\""; ?> />
				</p>
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="cc_pair">CC Pair</label>
			</td>
			<td>

				<input type="text" name="cc_pair" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['ccpair'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="program">Program</label>
			</td>
			<td>

				<input type="text" name="program" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['program'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="mentor">Mentor</label>
			</td>
			<td>

				<input type="text" name="mentor" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['mentor'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="iu_topic">IU Topic</label>
			</td>
			<td>

				<input type="text" name="iu_topic" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['iutopic'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="video_treatment">Video Treatment</label>
			</td>
			<td>

				<input type="text" name="video_treatment" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['videotreatment'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="shoot_plan">Shoot Plan</label>
			</td>
			<td>

				<input type="text" name="shoot_plan" <?php if (isset($storyData)) echo "value= \"" . $storyData['shootplan'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="impactpossible">impactpossible</label>
			</td>
			<td>
			<select type="text" name="impactpossible">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
			</td>
		</tr>

		<tr>
		 	<td>
				<input type="submit" name="action" value= 
<?php if (isset($_GET['un'])) echo "update"; else echo "add"; ?> >
			</td>
		</tr>

	</div>
		
	</table>
</form>
<?php
include ('footer.php'); 
?>
