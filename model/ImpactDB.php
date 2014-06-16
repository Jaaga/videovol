<?php
include 'dbcon.php';

function getImpactData1($id)
{
	$db =dbopen();
	$sql = "select * from impacttracker where uniquenumber = '".$id."' ";
	$result = $db->query($sql);
		$rows= array();
	$row = mysqli_fetch_array($result);
	
	$rows[] = $row;
	 
return ($rows);
}
//$row = getImpactData("23");
//var_dump($row);


function getImpactData($storyId) {
	$sql = "select uniquenumber, impactpossible, targetofficial, desiredchange, ccimpactplan, impactfollowuphappening, ifnowhynot, impactprocess, impactachieved, milestone, dateofimpact,timetakenforimpact, communityscreening, noofpeoplesawvideo, detailsofscreening, videoshowntoofficials, collaborations, noofpeopleinvolved, noofpeopleimpacted, noofvillagesimpacted, videoproductionstatus, videoreviewed, approvepayment, videoapproveddate, videoreviewedby, blognotes, gifttocc, thankyoucard from impacttracker where uniquenumber = '" . 
	    $storyId . "'";
	return getData($sql);	
}

function getData($query) {
	$db=dbopen();
	$result = mysqli_query($db, $query);
	$row = $result->fetch_array(MYSQLI_ASSOC);	
	return $row;
}
?>

