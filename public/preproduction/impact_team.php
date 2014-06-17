
<?php 
include("../header.php");
include("../../model/ImpactDB.php");
$id = $_GET['id'];
$impactData = getImpactDat($id);
foreach($impactData as $IData)
{

}
?>
<head>
	<link href="../main.css" rel="stylesheet">

</head>
<body>

<h1><?php echo !empty($_GET['id'])? "Unique No.: ".$_GET['id']: ""; ?></h1>

<form method="get" action="../index.php">
    <button type="submit">Home</button>
</form>
	<form name="impactflow" method="POST" action ="../preproduction/impact.php">
	<input name ="id" type="hidden" value =<?php echo $id; ?> >
	<table>
	
		<tr>
			<td valign="top">
				<label for="impact-process">Targetofficial:</label>
			</td>
			<td>
				<input type="text" name="Targetofficial" value=
<?php echo "\"" . $IData['targetofficial'] . "\""; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">Desired change(CTA)</label>
			</td>
			<td>
				<input type="text" name="DesiredChange" value=
<?php echo "\"" . $IData['desiredchange'] . "\""; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-process">CC_Impact_plan</label>
			</td>
			<td>
				<textarea name="CC_Impact_plan" id="" cols="30" rows="10">
<?php echo $IData['ccimpactplan']; ?> 					
				</textarea>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="impact-process">ImpactFollowUpHappening</label>
			</td>
			<td>
			<select type="text" name="impactfollowup">
<?php $followup = $IData['impactfollowuphappening']; ?>		
				<option value="Maybe"  	
<?php if (strcmp($followup, "Maybe") == 0) echo " selected "; ?> 
							           >Maybe</option>
				<option value="Yes"
<?php if (strcmp($followup, "Yes") == 0) echo " selected "; ?> 				
									   >Yes</option>
				<option value="No" 
<?php if (strcmp($followup, "No") == 0) echo " selected "; ?> 
								       >No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">whyFollowupnot happening</label>
			</td>
			<td>
				<input type="text" name="whynotfollowing" value = <?php echo $IData['ifnowhynot']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-process">Impact Process</label>
			</td>
			<td>
				<textarea name="impact-process" id="" cols="30" rows="10" > <?php echo $IData['impactprocess']; ?> </textarea>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">ImpactAchieved</label>
			</td>
			<td>
				<input type="text" name="impactachieved" value =<?php echo  $IData['impactachieved']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="milestone">Milestone</label>
			</td>
			<td>
				<input type="text" name="milestone" value =<?php echo $IData['milestone']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="date-of-impact">Date of Impact</label>
			</td>
			<td>
				<input type="date" name="date-of-impact" value = <?php echo $IData['dateofimpact']; ?> >
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
				<input type="number" name="time-in-weeks" value =<?php echo $IData['timetakenforimpact']; ?>>
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
				<input type="number" name="People-shown" value = <?php echo $IData['noofpeoplesawvideo']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="details-of-community-screening">Details of community Screening</label>
			</td>
			<td>
				<textarea name="details-of-community-screening" id="" cols="30" rows="10" > <?php echo $IData['detailsofscreening']; ?> 
				</textarea>
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
				<input type="text" name="officials-shown" value = <?php echo $IData['noofofficials']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="details-of-officials-screening">Details of Screening to Officials</label>
			</td>
			<td>
				<textarea name="details-of-officials-screening" id="" cols="30" rows="10" > <?php echo $IData['detailsofscreeningofficials']; ?> </textarea>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="collaboration">Collaboration</label>
			</td>
			<td>
				<input type="text" name="collaboration" value = <?php echo $IData['collaborations']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-people-involved">No. of people involved</label>
			</td>
			<td>
				<input type="text" name="number-of-people-involved" value = <?php echo $IData['noofpeopleinvolved']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-people-impacted">No. of people Impacted</label>
			</td>
			<td>
				<input type="number" name="number-of-people-impacted" value = <?php echo $IData['noofpeopleimpacted']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-villages-impacted">No. of Villages Impacted</label>
			</td>
			<td>
				<input type="number" name="number-of-villages-impacted" value = <?php echo $IData['noofvillagesimpacted']; ?>>
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
				<input type="date" name="date-impact-video-approved"value = <?php echo $IData['videoapproveddate']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-reviewed-by">Impact Video Reviewed By?</label>
			</td>
			<td>
				<input type="text" name="impact-video-reviewed-by" value = <?php echo $IData['videoreviewedby']; ?>>
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
