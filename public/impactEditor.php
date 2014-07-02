
<?php 
include("header.php");
include("../model/ImpactDB.php");
$un = $_GET['id'];

$IData = getImpactDataByUniqueNumber($un);
?>
<head>
	<link href="../main.css" rel="stylesheet">

</head>
<body>

<h1><?php if($_GET['id']) echo "Unique No.: ".$_GET['id']?></h1>

<!--<form method="get" action="../index.php">
    <button type="submit">Home</button>
</form>-->
	<form name="impactflow" method="POST" action ="../../controller/ImpactData.php">
	<input name ="id" type="hidden" value =<?php echo $un; ?> >
	<table class="table table-hover">
	
		<tr>
			<td valign="top">
				<label for="impact-process">Target official:</label>
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
				<label for="impact-process">CC impact plan</label>
			</td>
			<td>
				<textarea name="CC_Impact_plan" id="" cols="30" rows="10">
<?php echo $IData['ccimpactplan']; ?> 					
				</textarea>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="impact-process">Is Impact follow up happening?</label>
			</td>
			<td>
			<select type="text" name="impactfollowup" id="browsers" onchange="showstuff()">
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
			<td valign="top" id="showlabel">
				<label for="impact-status">Why is impact follow up not happening?</label>
			</td>
			<td id="show">
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
				<label for="impact-status">Impact Achieved</label>
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
				<input type="text" name="date-of-impact" id="dateofimpact" value = <?php echo $IData['dateofimpact']; ?> >
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
				<input type="number" min="0" name="time-in-weeks" value =<?php echo $IData['timetakenforimpact']; ?>>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="community-screening-done">Community Screening Done?</label>
			</td>
			<td>
					<select type="text" name="CommunityScreeningDone">
						<?php $communityscreen = $IData['communityscreening']; ?>	
					<option value="Yes"
					<?php if (strcmp($communityscreen, "Yes") == 0) echo " selected "; ?> >Yes</option>
					<option value="No"
					<?php if (strcmp($communityscreen, "No") == 0) echo " selected "; ?> >No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="People-shown">No. of People the video was shown to</label>
			</td>
			<td>
				<input type="number" min="0" name="People-shown" value = <?php echo $IData['noofpeoplesawvideo']; ?> >
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
				<?php $videoshown = $IData['videoshowntoofficials']; ?>
					<option value="Yes" 
					<?php if (strcmp($videoshown , "Yes") == 0) echo "selected"; ?> >Yes</option>
					<option value="No"
					<?php if (strcmp($videoshown, "No" )== 0) echo "selected" ; ?> >No</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="officials-shown">No. of Officials the Video was screened to</label>
			</td>
			<td>
				<input type="number" min="0" name="officials-shown" value = <?php echo $IData['noofofficials']; ?>>
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
				<input type="number" min="0" name="number-of-people-involved" value = <?php echo $IData['noofpeopleinvolved']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-people-impacted">No. of people Impacted</label>
			</td>
			<td>
				<input type="number" min="0" name="number-of-people-impacted" value = <?php echo $IData['noofpeopleimpacted']; ?>>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="number-of-villages-impacted">No. of Villages Impacted</label>
			</td>
			<td>
				<input type="number" min="0" name="number-of-villages-impacted" value = <?php echo $IData['noofvillagesimpacted']; ?>>
			</td>
		</tr>
		<tr valign="top">
			<td>
				<label for="ImpactVideoProductionStatus?">Impact Video Production Status?</label>
			</td>
			<td>
			<select type="text" name="ImpactVideoProductionStatus">
				<?php $videoprod = $IData['videoproductionstatus'];?>
					<option value="Done"
					<?php if(strcmp($videoprod, "Done") == 0 ) echo "selected"; ?>>Done</option>
					<option value="NotDone"
					<?php if(strcmp($videoprod, "NotDone") == 0 ) echo "selected"; ?>>NotDone</option>
					<option value="InProgress"
					<?php if(strcmp($videoprod, "InProgress") == 0 ) echo "selected"; ?>>InProgress</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-reviewed">Impact Video Reviewed</label>
			</td>
			<td>
				<select type="text" name="ImpactVideoReviewed">
					<?php $videoreview = $IData['videoreviewed']; ?>
					<option value="Yes"
					<?php if(strcmp($videoreview,"Yes")==0)echo "selected";?>>Yes</option>
					<option value="No" 
					<?php if(strcmp($videoreview,"No")==0)echo "selected";?> >No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-approved-for-payment">Impact Video Approved for Payment?</label>
			</td>
			<td>
				<select type="text" name="ImpactVideoApprovedforPayment">
					<?php $payment = $IData['approvepayment']; ?>
					<option value="Yes"
					<?php if(strcmp($payment,"Yes")==0)echo "selected";?>>Yes</option>
					<option value="No"
					<?php if(strcmp($videoreview,"No")==0)echo "selected";?>>No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="date-impact-video-approved">Date of Impact Video Approved?</label>
			</td>
			<td>
				<input type="text" id="impactvideoapproveddate" name="date-impact-video-approved"value = <?php echo $IData['videoapproveddate']; ?>>
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
				<label for="Blognotesdone">Blog notes done</label>
			</td>
			<td>
				<select type="text" name="BlognotesDone">
					<?php $bnotes = $IData['blognotes']; ?>
					<option value="Done"<?php if(strcmp($bnotes,"Done")==0)echo"selected"; ?> >Done</option>
					<option value="NotDone"<?php if(strcmp($bnotes,"NotDone")==0)echo"selected"; ?> >NotDone</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-sent-to-CC">Impact Video Sent to CC with gift?</label>
			</td>
			<td>
				<select type="text" name="impactvideosenttocc">
					<?php $gifttocc = $IData['gifttocc']; ?>
					<option value="Yes"<?php if(strcmp($gifttocc,"Yes") == 0) echo "selected"; ?> >yes</option>
					<option value="No"<?php if(strcmp($gifttocc,"No") == 0) echo "selected"; ?> >No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-video-and-thank-you">Impact video and thank you card/letter given to official?</label>
			</td>
			<td>
				<select type="text" name="impactthankyou">
					<?php $thankyoucard = $IData['thankyoucard']; ?>
					<option value="yes" <?php if(strcmp($thankyoucard,"Yes") == 0) echo "selected"; ?> >yes</option>
					<option value="No" <?php if(strcmp($thankyoucard,"Yes") == 0) echo "selected"; ?> >No</option>
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
<link rel="stylesheet" href="../jqueryui/css/ui/jquery-ui.css" />
<script src="../jqueryui/js/jquery.js"></script>
<script src="../jqueryui/js/jquery-ui.min.js"></script>
<script>
$(function() {
var date = $('#dateofimpact').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

$(function() {
var date = $('#impactvideoapproveddate').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

function showstuff(e){
   var browsers = document.getElementById('browsers');
   if(browsers.options[browsers.selectedIndex].value=="No"){
      document.getElementById("show").style.display="block";
   }
   else {
   	  document.getElementById("show").style.display="none";
   }

}
</script>
</body>
</html>
