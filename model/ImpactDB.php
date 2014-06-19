<?php
include 'dbcon.php';

function getImpactDataByUniqueNumber($un)
{
	$sql = "select * from impacttracker where uniquenumber = '".$un."' ";
	return getAsAssocArray($sql);
}

function getImpactDataByStoryId($fid) {
	$sql = "select uniquenumber, impactpossible, targetofficial, desiredchange, ccimpactplan, impactfollowuphappening, ifnowhynot, impactprocess, impactachieved, milestone, dateofimpact,timetakenforimpact, communityscreening, noofpeoplesawvideo, detailsofscreening, videoshowntoofficials, collaborations, noofpeopleinvolved, noofpeopleimpacted, noofvillagesimpacted, videoproductionstatus, videoreviewed, approvepayment, videoapproveddate, videoreviewedby, blognotes, gifttocc, thankyoucard from impacttracker where fid = '" . 
	    $fid . "'";
	return getAsAssocArray($sql);	
}

?>

