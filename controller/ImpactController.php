<?php
include '../model/ImpactDB.php';

$un =$_GET['un'];
$targetofficial =$_GET['targetofficial'];
$desiredchange = $_GET['desiredChange'];
$ccimpactplan=$_GET['ccimpactplan'];
$impactfollowuphappening=$_GET['impactfollowup'];
$ifnowhynot=$_GET['whynotfollowing'];
$impactprocess=$_GET['impact-process'];
$impactachieved=$_GET['impactachieved'];
$milestone=$_GET['milestone'];
$dateofimpact=$_GET['date-of-impact'];
$timetakenforimpact=$_GET['time-in-weeks'];
$communityscreening=$_GET['CommunityScreeningDone'];
$noofpeoplesawvideo=$_GET['People-shown'];
$detailsofscreening=$_GET['details-of-community-screening'];
$videoshowntoofficials=$_GET['VideoShowntoOfficials'];
$noofofficials=$_GET['officials-shown'];
$detailsofscreeningofficials=$_GET['details-of-officials-screening'];
$collaborations=$_GET['collaboration'];
$noofpeopleinvolved=$_GET['number-of-people-involved'];
$noofpeopleimpacted=$_GET['number-of-people-impacted'];
$noofvillagesimpacted=$_GET['number-of-villages-impacted'];
$videoproductionstatus=$_GET['ImpactVideoProductionStatus'];
$videoreviewed = $_GET['ImpactVideoReviewed'];
$approvepayment = $_GET['ImpactVideoApprovedforPayment'];
$videoapproveddate = $_GET['date-impact-video-approved'];
$videoreviewedby= $_GET['impact-video-reviewed-by'];
$blognotes = $_GET['BlognotesDone'];
$gifttocc = $_GET['impactvideosenttocc'];
$thankyoucard = $_GET['impactthankyou'];
insertAndUpdateImpact($un,$targetofficial,$desiredchange,$ccimpactplan,$impactfollowuphappening,$ifnowhynot,$impactprocess,$impactachieved,$milestone,$dateofimpact,$timetakenforimpact,$communityscreening,$noofpeoplesawvideo,$detailsofscreening,$videoshowntoofficials,$noofofficials,$detailsofscreeningofficials,$collaborations,$noofpeopleinvolved,$noofpeopleimpacted,$noofvillagesimpacted,$videoproductionstatus,$videoreviewed,$approvepayment,$videoapproveddate,$videoreviewedby,$blognotes,$gifttocc,$thankyoucard);
?>
