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
	$row =array();
	while($row = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}	
	return ($rows);
}


function getStoryAndImpact()
{
	$db = dbopen();
	$sql = "select st.fid,st.ccname , st.state , st.receiveddate,st.issuetopic,st.storydescription,st.uniquenumber,it.targetofficial,it.desiredchange,it.ccimpactplan ,it.impactprocess from storytrack as st left join impacttracker as it on st.uniquenumber = it.uniquenumber where st.impactpossible = 'yes'";
	return getData($sql);
}
 
 function insertAndUpdateImpact($uno,$targetofficial,$desiredchange,$ccimpactplan,$impactfollowuphappening,$ifnowhynot,$impactprocess,$impactachieved,$milestone,$dateofimpact,$timetakenforimpact,$communityscreening,$noofpeoplesawvideo,$detailsofscreening,$videoshowntoofficials,$noofofficials,$detailsofscreeningofficials,$collaborations,$noofpeopleinvolved,$noofpeopleimpacted,$noofvillagesimpacted,$videoproductionstatus,$videoreviewed,$approvepayment,$videoapproveddate,$videoreviewedby,$blognotes,$gifttocc,$thankyoucard)
{
	$db = dbopen();
	$sql = "insert into impacttracker(uniquenumber,targetofficial,desiredchange,ccimpactplan,impactfollowuphappening,ifnowhynot,impactprocess,impactachieved,milestone,dateofimpact,timetakenforimpact,communityscreening,noofpeoplesawvideo,detailsofscreening,videoshowntoofficials,noofofficials,detailsofscreeningofficials,collaborations,noofpeopleinvolved,noofpeopleimpacted,noofvillagesimpacted,videoproductionstatus,videoreviewed,approvepayment,videoapproveddate,videoreviewedby,blognotes,gifttocc,thankyoucard) values ('$uno','$targetofficial','$desiredchange','$ccimpactplan','$impactfollowuphappening','$ifnowhynot','$impactprocess','$impactachieved','$milestone','$dateofimpact','$timetakenforimpact','$communityscreening','$noofpeoplesawvideo','$detailsofscreening','$videoshowntoofficials','$noofofficials','$detailsofscreeningofficials','$collaborations','$noofpeopleinvolved','$noofpeopleimpacted','$noofvillagesimpacted','$videoproductionstatus','$videoreviewed','$approvepayment','$videoapproveddate','$videoreviewedby','$blognotes','$gifttocc','$thankyoucard') on duplicate key update targetofficial ='$targetofficial',desiredchange = '$desiredchange',ccimpactplan = '$ccimpactplan',impactfollowuphappening = '$impactfollowuphappening',ifnowhynot = '$ifnowhynot',impactprocess = '$impactprocess',impactachieved ='$impactchieved' ,milestone = '$milestone',dateofimpact ='$dateofimpact',timetakenforimpact = '$timetakenforimpact',communityscreening = '$communityscreening',noofpeoplesawvideo = '$noofpeoplesawvideo',detailsofscreening = '$detailsofscreening',videoshowntoofficials = '$videoshowntoofficials',noofofficials = '$noofofficials',detailsofscreeningofficials = '$detailsofscreeningofficials',collaborations = '$collaborations',noofpeopleinvolved = '$noofpeopleinvolved',noofpeopleimpacted = '$noofpeopleimpacted',noofvillagesimpacted = '$noofvillagesimpacted',videoproductionstatus ='$videoproductionstatus',videoreviewed  = '$videoreviewed',approvepayment = '$approvepayment',videoapproveddate = '$videoapproveddate',videoreviewedby = '$videoreviewedby',blognotes = '$blognotes',gifttocc = '$gifttocc',thankyoucard = '$thankyoucard'";
$result=$db->query($sql);
if(!$result)
{
	echo "data not inserted";
}
else
header('location:../public/impactview1.php');
}
//sertAndUpdateImpact();
?>