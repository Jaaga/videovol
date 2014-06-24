<?php


include('header.php');
include("../model/StoryDB.php");
$storyData = getDataByID($_GET['id']);
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

<h1><?php if ($_GET['id']) echo "Story ID: ".$_GET['id']; ?></h1>	

<form name="creatStory-form" method="POST" action="../public/story.php">
<input name ="id" type="hidden" value =<?php echo $_GET['id']; ?> >
	<!--<form name="createStory-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	http://www.w3schools.com/php/php_form_validation.asp-->
	<h2>Story Flow</h2>
	<table class="table table-hover">
	<div class="container">
		<tr>
			<td valign="top"> 
				<label for="name">CC Name :</label>
			</td>
			<td> 
				<input type="text" name="ccname" value=<?php echo "\"" . $storyData['ccname'] . "\""; ?> />
			</td>
		</tr>


		<tr> 
			<td valign="top"><label for="states">State :</label>
			</td>
			<td>
				<select name="states">
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
				<p><input type="text" name="dateReceived" id="datepicker"></p>
			</td>
		</tr>


		<tr>
			<td valign="top">
				<label for="issue">Issue/Topic</label>
			</td>
			<td>
				<input type="text" name="issue" />
			</td>
		</tr> 


		<tr>
		 	<td valign="top">
		 		 <label for="story">Story: </label>
		 	</td>
		 	<td valign="top">
		  		<textarea  name="story" maxlength="1000" cols="25" rows="6"></textarea>
		 	</td>
		</tr>



		<tr>
			<td valign="top">
				<label for="unique_no">Unique No. :</label>
				
			</td>
			<td>
				<input type="text" name="unique_no" />
			</td>
		</tr>

		<tr>
			<td valign="top">
				<label for="storydate">Date of Story</label>
			</td>
			<td>
				<p><input type="text" name="storydate" id="datepick"></p>
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="cc_pair">CC Pair</label>
			</td>
			<td>

				<input type="text" name="cc_pair" />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="program">Program</label>
			</td>
			<td>

				<input type="text" name="program" />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="mentor">Mentor</label>
			</td>
			<td>

				<input type="text" name="mentor" />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="iu_topic">IU Topic</label>
			</td>
			<td>

				<input type="text" name="iu_topic" />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="video_treatment">Video Treatment</label>
			</td>
			<td>

				<input type="text" name="video_treatment" />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="shoot_plan">Shoot Plan</label>
			</td>
			<td>

				<input type="text" name="shoot_plan" />
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
				<input type="submit">
			</td>
		</tr>

	</div>
		
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