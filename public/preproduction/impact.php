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
$impstatacheived=$_POST['impact-status'];
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
$impactdata ="insert into impacttracker(uniquenumber,targetofficial,desiredchange,ccimpactplan,impactfollowuphappening,ifnowhynot,impactprocess,impstatacheived,milestone,dateofimpact,timetakenforimpact,communityscreening,noofpeoplesawvideo,detailsofscreening,videoshowntoofficials,noofofficials,detailsofscreeningofficials,collaborations,noofpeopleinvolved,noofpeopleimpacted,noofvillagesimpacted,videoproductionstatus,videoreviewed,approvepayment,videoapproveddate,videoreviewedby,blognotes,gifttocc,thankyoucard) values ('$uno','$targetofficial','$desiredchange','$ccimpactplan','$impactfollowuphappening','$ifnowhynot','$impactprocess','$impstatacheived','$milestone','$dateofimpact','$timetakenforimpact','$communityscreening','$noofpeoplesawvideo','$detailsofscreening','$videoshowntoofficials','$noofofficials','$detailsofscreeningofficials','$collaborations','$noofpeopleinvolved','$noofpeopleimpacted','$noofvillagesimpacted','$videoproductionstatus','$videoreviewed','$approvepayment','$videoapproveddate','$videoreviewedby','$blognotes','$gifttocc','$thankyoucard')";
$pm=$db->query($impactdata);
if(!$pm)
{
echo "data not inserted";
}
else
header("location:../preproduction/impactview.php");
?>
?>