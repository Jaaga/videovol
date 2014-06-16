<?php 
include("../header.php");
include '../../model/ImpactDB.php';
$id = $_GET['id'];
$row = getImpactData('23');
?>
<head>
	<link href="../main.css" rel="stylesheet">

</head>
<body>
	<form method="get" action="../index.php">
    <button type="submit">Home</button>
</form>
	<form name="impactflow" method="POST" action ="../preproduction/impact.php">
	<input name ="id" type="hidden" value =<?php echo $id; ?> >
	<table>
		<?php var_dump($row);
		echo $row[targetofficial];
		?>
		<tr>
			<td valign="top">
				<label for="impact-process">Targetofficial:</label>
			</td>
			<td>
				<input type="text" name="Targetofficial" value =<?php echo $row["'.	1.'"]; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">Desired change(CTA)</label>
			</td>
			<td>
				<input type="text" name="DesiredChange">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-process">CC_Impact_plan</label>
			</td>
			<td>
				<textarea name="CC_Impact_plan" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="impact-process">ImpactFollowUpHappening</label>
			</td>
			<td>
			<select type="text" name="impactfollowup">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">whyFollowupnot happening</label>
			</td>
			<td>
				<input type="text" name="whynotfollowing">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-process">Impact Process</label>
			</td>
			<td>
				<textarea name="impact-process" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">Impact Status</label>
			</td>
			<td>
				<input type="text" name="impact-status">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="milestone">Milestone</label>
			</td>
			<td>
				<input type="text" name="milestone">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="date-of-impact">Date of Impact</label>
			</td>
			<td>
				<input type="date" name="date-of-impact">
			</td>
		</tr>
		<!--<tr>
			<td valign="top">
				<label for="reported-date-of-impact">Reported Date of Impact</label>
			</td>
			<td>
				<input type="date" name="reported-date-of-impact">
			</td>
		</tr>-->
		<tr>
			<td valign="top">
			    <label for="time-in-weeks">Time in Weeks</label>
			</td>
			<td>
				<input type="number" name="time-in-weeks">
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="community-screening-done">Community Screening Done?</label>
			</td>
			<td>
			<select type="text" name="CommunityScreeningDone">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="People-shown">No. of People to whom the Video was shown</label>
			</td>
			<td>
				<input type="number" name="People-shown">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="details-of-community-screening">Details of community Screening</label>
			</td>
			<td>
				<textarea name="details-of-community-screening" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="community-screening-done">Video Shown to Officials?</label>
			</td>
			<td>
			<select type="text" name="VideoShowntoOfficials">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="officials-shown">No. of Officials the Video was screened</label>
			</td>
			<td>
				<input type="text" name="officials-shown">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="details-of-officials-screening">Details of Screening to Officials</label>
			</td>
			<td>
				<textarea name="details-of-officials-screening" id="" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="collaboration">Collaboration</label>
			</td>
			<td>
				<input type="text" name="collaboration">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-people-involved">No. of people involved</label>
			</td>
			<td>
				<input type="text" name="number-of-people-involved">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-people-impacted">No. of people Impacted</label>
			</td>
			<td>
				<input type="number" name="number-of-people-impacted">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-villages-impacted">No. of Villages Impacted</label>
			</td>
			<td>
				<input type="number" name="number-of-villages-impacted">
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="ImpactVideoProductionStatus?">Impact Video Production Status?</label>
			</td>
			<td>
			<select type="text" name="ImpactVideoProductionStatus">
					<option value="Done">Done</option>
					<option value="NotDone">NotDone</option>
					<option value="InProgress">InProgress</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-reviewed">Impact Video Reviewed</label>
			</td>
			<td>
				<select type="text" name="ImpactVideoReviewed">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-approved-for-payment">Impact Video Approved for Payment?</label>
			</td>
			<td>
				<select type="text" name="ImpactVideoApprovedforPayment">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="date-impact-video-approved">Date Impact Video Approved?</label>
			</td>
			<td>
				<input type="date" name="date-impact-video-approved">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-reviewed-by">Impact Video Reviewed By?</label>
			</td>
			<td>
				<input type="text" name="impact-video-reviewed-by">
			</td>
		</tr>
			<td valign="top">
				<label for="Blognotesdone">BlognotesDone</label>
			</td>
			<td>
				<select type="text" name="BlognotesDone">
					<option value="Done">Done</option>
					<option value="NotDone">NotDone</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-sent-to-CC">Impact Video Sent to CC with gift?</label>
			</td>
			<td>
				<select type="text" name="impactvideosenttocc">
					<option value="Yes">yes</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-and-thank-you">Impact video and thank you card/letter given to official?</label>
			</td>
			<td>
				<select type="text" name="impactthankyou">
					<option value="yes">yes</option>
					<option value="No">No</option>
				</select>
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