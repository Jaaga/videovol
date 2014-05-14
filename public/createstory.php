<?php
include('header.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Story</title>
</head>
<body>
		
<form name="creatStory-form" method="post" action="../public/story.php">
	<h2>Create Story</h2>
	<table>
		<tr>
			<td valign="top"> 
				<label for="name">CC Name :</label>
			</td>
			<td> 
				<input type="text" name="ccname" />
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
				<input type="date" name="dateReceived" />
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
		 	<td>
				<input type="submit">
			</td>
		</tr>

	</table>
</form>
	
</body>
</html>
