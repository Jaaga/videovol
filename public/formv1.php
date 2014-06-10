<?php
include('header.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>collapse</title>
</head>
<style>
	.row { 
		vertical-align: top;
		 height:auto; 
		}
 .content {
 	display:none;

 	 }
 .show {
 	display: none;
 	 color: #11787f;
 	}
 .hide:target + .show {
 	display: inline; 
 }
 .hide:target {
 	display: none; 
 }
 .hide:target ~ .content {
 	display:inline;
 	 }
 @media print {
  .hide, .show { display: none; } }
 a{
 	text-decoration: none;
 	color: #eb5826;
 	display:inline;
 }
 table,tr{
		border-collapse: collapse;
		text-align: center;

	}
</style>
<body>
<!--createstory.php starts here-->
<div class="row">
	<a href="#hide1" class="hide" id="hide1">Expand Create Story</a>
	<a href="#show1" class="show" id="show1">Collapse Create Story</a>
	<div class="content">
		<form name="creatStory-form" method="post" action="../public/story.php">
			
			<table style="background-color: #99CCCC;padding: 5px;">
 
				<tr><br><td valign="top"> <label for="name">CC Name :</label></td>
					<td> <input type="text" name="ccname" /></td>
				</tr>
				<tr> <td valign="top"><label for="states">State :</label></td>
					<td><select name="states">
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
				<tr><td valign="top"><label for="dateReceived">Date Received</label></td>
					<td><input type="date" name="dateReceived" /></td>
				</tr>
				<tr><td valign="top"><label for="issue">Issue/Topic</label></td>
					<td><input type="text" name="issue" /></td>
				</tr> 
				<tr><td valign="top"> <label for="story">Story: </label></td>
				 	<td valign="top"><textarea  name="story" maxlength="1000" cols="30" rows="4"></textarea></td>
				</tr>
				<td><input type="submit"></td>
				</tr>

			</table>
		</form>
	</div>
</div>
<!--create story ends here-->
<!--edit.php starts here-->
<div class="row">
	<a href="#hide2" class="hide" id="hide2">Expand Junior Editor</a>
	<a href="#show2" class="show" id="show2">Collapse Junior Editor</a>
	<div class="content">		
		<?php
		include '../model/dbcon.php';
		$db=dbopen();
		
		//$data = "select * from storytrack where datereceived = '1986-12-23'"
		echo "<table border='1'>
		<tr>
		<th>ccname</th>
		<th>state</th>
		<th>receiveddate</th>
		<th>issuetopic</th>
		<th>qualitycheck</th>
		</tr>";
		$toedit= "select fid,ccname , state , receiveddate , issuetopic from storytrack where seq IS NULL";
		$result = $db->query($toedit);
		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['ccname'] . "</td>" ; 
		  echo "<td>" . $row['state'] . "</td>";
		  echo "<td>" . $row['receiveddate'] . "</td>";
		  echo "<td>" . $row['issuetopic'] . "</td>"; 
		  echo "<td><a href=\"editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
		  echo "</tr>";
		}


		echo "</table>";
		?>
	</div>
</div>
<!--edit.php ends here-->
<!--senioreditview.php starts here-->
<div class="row">
	<a href="#hide3" class="hide" id="hide3">Expand Senior Editor</a>
	<a href="#show3" class="show" id="show3">Collapse Senior Editor</a>
	<div class="content">
		<?php
		if(!$db){
			$db = dbopen();
		}
		
		//$data = "select * from storytrack where datereceived = '1986-12-23'"
		echo "<table border='1'>
		<tr>
		<th>ccname</th>
		<th>state</th>
		<th>receiveddate</th>
		<th>issuetopic</th>
		<th>seq</th>
		<th>broll</th>
		<th>fint</th>
		<th>vo</th>
		<th>ptc</th>
		<th>cta</th>
		<th>vd</th>
		<th>translation</th>
		<th>statusedit</th>
		</tr>";
		$statusedit= "select * from storytrack where seq IS NOT NULL and publishdate IS NULL";
		$result = $db->query($statusedit);
		while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['ccname'] . "</td>" ; 
		  echo "<td>" . $row['state'] . "</td>";
		  echo "<td>" . $row['receiveddate'] . "</td>";
		  echo "<td>" . $row['issuetopic'] . "</td>"; 
		  echo "<td>" . $row['seq'] . "</td>"; 
		  echo "<td>" . $row['broll'] . "</td>";
		  echo "<td>" . $row['fint'] . "</td>"; 
		  echo "<td>" . $row['vo'] . "</td>";
		  echo "<td>" . $row['ptc'] . "</td>"; 
		  echo "<td>" . $row['cta'] . "</td>";
		  echo "<td>" . $row['vd'] . "</td>";
		  echo "<td>" . $row['translation'] . "</td>";     
		  echo "<td><a href=\"senior-editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
		  echo "</tr>";
		}
			echo "</table>";
		?>
		
	</div>
</div>
<!--senioreditview.php ends here-->
<!--pmview.php starts here-->
<div class="row">
	<a href="#hide4" class="hide" id="hide4">Expand Project Manager</a>
	<a href="#show4" class="show" id="show4">Collapse Project Manager</a>
	<div class="content">
		
		<?php
		if(!$db){
			$db = dbopen();
		}
		
			//$data = "select * from storytrack where datereceived = '1986-12-23'"
			echo "<table border='1'>
			<tr>
			<th>ccname</th>
			<th>state</th>
			<th>receiveddate</th>
			<th>issuetopic</th>
			<th>seq</th>
			<th>broll</th>
			<th>fint</th>
			<th>vo</th>
			<th>ptc</th>
			<th>cta</th>
			<th>vd</th>
			<th>translation</th>
			<th>statusedit</th>
			</tr>";
			$statusedit= "select * from storytrack where seq IS NOT NULL and  paymentstatus IS NULL";
			$result = $db->query($statusedit);
			while($row = mysqli_fetch_array($result)) {
			  echo "<tr>";
			  echo "<td>" . $row['ccname'] . "</td>" ; 
			  echo "<td>" . $row['state'] . "</td>";
			  echo "<td>" . $row['receiveddate'] . "</td>";
			  echo "<td>" . $row['issuetopic'] . "</td>"; 
			  echo "<td>" . $row['seq'] . "</td>"; 
			  echo "<td>" . $row['broll'] . "</td>";
			  echo "<td>" . $row['fint'] . "</td>"; 
			  echo "<td>" . $row['vo'] . "</td>";
			  echo "<td>" . $row['ptc'] . "</td>"; 
			  echo "<td>" . $row['cta'] . "</td>";
			  echo "<td>" . $row['vd'] . "</td>";
			  echo "<td>" . $row['translation'] . "</td>";     
			  echo "<td><a href=\"project-manager.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
			  echo "</tr>";
			}


		echo "</table>";
		?>
	</div>
</div>	
<!--pmview ends here-->	
</body>
</html>