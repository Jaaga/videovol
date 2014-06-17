<?php
include 'dbcon.php';

function getImpactData1($id)
{
	$db =dbopen();
	$query = "select uniquenumber, impactpossible, targetofficial, desiredchange, ccimpactplan, impactfollowuphappening, ifnowhynot, impactprocess, impactachieved from impacttracker where uniquenumber = '".$id."' ";
	$sql = $db->prepare($query);
	$sql->execute();
	$sql->bind_result($uniquenumber, $impactpossible, $targetofficial, $desiredchange, $ccimpactplan, $impactfollowuphappening, $ifnowhynot, $impactprocess, $impactachieved);
		$rows= array();
	while($sql->fetch())
{
	$rows[] = array('uniquenumber'=>$uniquenumber, 'impactpossible'=>$impactpossible, 'targetofficial'=>$targetofficial, 'desiredchange'=>$desiredchange, 'ccimpactplan'=>$ccimpactplan, 'impactfollowuphappening'=>$impactfollowuphappening, 'ifnowhynot'=>$ifnowhynot, 'impactprocess'=>$impactprocess, 'impactachieved'=>$impactachieved);
}
	$sql->close(); 
return $rows;
}
//$row = getImpactData("23");
//var_dump($row);
function getImpactDat($id)
{
	$db =dbopen();
	$sql = "select * from impacttracker where uniquenumber = '".$id."' ";
	$result = $db->query($sql);
	$rows = array();
	$row = mysqli_fetch_array($result);
		$rows[] = $row;
	
	return ($rows);
}


function getImpactData($storyId) {
	$sql = "select uniquenumber, impactpossible, targetofficial, desiredchange, ccimpactplan, impactfollowuphappening, ifnowhynot, impactprocess, impactachieved, milestone, dateofimpact,timetakenforimpact, communityscreening, noofpeoplesawvideo, detailsofscreening, videoshowntoofficials, collaborations, noofpeopleinvolved, noofpeopleimpacted, noofvillagesimpacted, videoproductionstatus, videoreviewed, approvepayment, videoapproveddate, videoreviewedby, blognotes, gifttocc, thankyoucard from impacttracker where uniquenumber = '" . 
	    $storyId . "'";
	return getData($sql);	
}

function getData($query) {
	$db=dbopen();
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($result);	
	return $row;
}
?>

