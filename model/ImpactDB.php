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
	$sql = "select st.fid,st.ccname , st.state , st.receiveddate,st.issuetopic,st.storydescription,it.uniquenumber,it.targetofficial,it.desiredchange,it.ccimpactplan ,it.impactprocess from storytrack  as st inner join impacttracker as it on  st.uniquenumber = it.uniquenumber";
	return getData($sql);
}
 
/*$result = getstoryforImpact();
foreach($result as $row)
{
	echo "<h1> ccname: " . $row['ccname'] . " state: " . $row['state'] . " receiveddate: " . $row['receiveddate'] . " issuetopic: " . $row['issuetopic'] . "</h1>";
}*/
?>