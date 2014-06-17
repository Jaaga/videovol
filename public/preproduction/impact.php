<?php
include '../../model/dbcon.php';
$db = dbopen();
$uno = $_POST['id'];
$targetofficial =$_POST['Targetofficial'];
$desiredchange = $_POST['DesiredChange'];
$ccimpactplan=$_POST['CC_Impact_plan'];
$impactfollowuphappening=$_POST['impactfollowup'];
$ifnowhynot=$_POST['whynotfollowing'];
$impactprocess=$_POST['impact-process'];
$impstatachieved=$_POST['impcatachieved'];
$milestone=$_POST['milestone'];
$dateofimpact=$_POST['date-of-impact'];
$timetakenforimpact=$_POST['time-in-weeks'];
$communityscreening=$_POST['CommunityScreeningDone'];
$noofpeoplesawvideo=$_POST['People-shown'];
$detailsofscreening=$_POST['details-of-community-screening'];
$videoshowntoofficials=$_POST['VideoShowntoOfficials'];
$noofofficials=$_POST['officials-shown'];
$detailsofscreeningofficials=$_POST['details-of-officials-screening'];
$collaborations=$_POST['collaboration'];
$noofpeopleinvolved=$_POST['number-of-people-involved'];
$noofpeopleimpacted=$_POST['number-of-people-impacted'];
$noofvillagesimpacted=$_POST['number-of-villages-impacted'];
$videoproductionstatus=$_POST['ImpactVideoProductionStatus'];
$videoreviewed = $_POST['ImpactVideoReviewed'];
$approvepayment = $_POST['ImpactVideoApprovedforPayment'];
$videoapproveddate = $_POST['date-impact-video-approved'];
$videoreviewedby= $_POST['impact-video-reviewed-by'];
$blognotes = $_POST['BlognotesDone'];
$gifttocc = $_POST['impactvideosenttocc'];
$thankyoucard = $_POST['impactthankyou'];
$impactsql ="insert into impacttracker(uniquenumber,targetofficial,desiredchange,ccimpactplan,impactfollowuphappening,ifnowhynot,impactprocess,impactachieved,milestone,dateofimpact,timetakenforimpact,communityscreening,noofpeoplesawvideo,detailsofscreening,videoshowntoofficials,noofofficials,detailsofscreeningofficials,collaborations,noofpeopleinvolved,noofpeopleimpacted,noofvillagesimpacted,videoproductionstatus,videoreviewed,approvepayment,videoapproveddate,videoreviewedby,blognotes,gifttocc,thankyoucard) values ('$uno','$targetofficial','$desiredchange','$ccimpactplan','$impactfollowuphappening','$ifnowhynot','$impactprocess','$impactachieved','$milestone','$dateofimpact','$timetakenforimpact','$communityscreening','$noofpeoplesawvideo','$detailsofscreening','$videoshowntoofficials','$noofofficials','$detailsofscreeningofficials','$collaborations','$noofpeopleinvolved','$noofpeopleimpacted','$noofvillagesimpacted','$videoproductionstatus','$videoreviewed','$approvepayment','$videoapproveddate','$videoreviewedby','$blognotes','$gifttocc','$thankyoucard') on duplicate key update targetofficial ='$targetofficial',
desiredchange = '$desiredchange',ccimpactplan = '$ccimpactplan',impactfollowuphappening = '$impactfollowuphappening',
ifnowhynot = '$ifnowhynot',impactprocess = '$impactprocess',impactachieved ='$impstatachieved' ,milestone = '$milestone',dateofimpact ='$dateofimpact',timetakenforimpact = '$timetakenforimpact',communityscreening = '$communityscreening',noofpeoplesawvideo = '$noofpeoplesawvideo',detailsofscreening = '$detailsofscreening',videoshowntoofficials = '$videoshowntoofficials',noofofficials = '$noofofficials',detailsofscreeningofficials = '$detailsofscreeningofficials',collaborations = '$collaborations',noofpeopleinvolved = '$noofpeopleinvolved',noofpeopleimpacted = '$noofpeopleimpacted',noofvillagesimpacted = '$noofvillagesimpacted',videoproductionstatus ='$videoproductionstatus',videoreviewed  = '$videoreviewed',approvepayment = '$approvepayment',videoapproveddate = '$videoapproveddate',videoreviewedby = '$videoreviewedby',blognotes = '$blognotes',gifttocc = '$gifttocc',thankyoucard = '$thankyoucard'";
$pm=$db->query($impactsql);
if(!$pm)
{
echo "data not inserted";
}
else
header("location:../preproduction/impactview.php");
?>