<?php
include_once ('dbcon.php');

function getImpactDataByUniqueNumber($un)
{
	$sql = "select * from impacttracker where uniquenumber = '".$un."' ";
	return getAsAssocArray($sql);
}

function getCoreImpactDataByUniqueNumber($un) 
{
	$sql = "select uniquenumber, targetofficial, desiredchange, ccimpactplan from impacttracker where uniquenumber = '".$un."' ";
	return getAsAssocArray($sql);	
}

function getImpactDataByStoryId($fid) {
	$sql = "select uniquenumber, impactpossible, targetofficial, desiredchange, ccimpactplan, impactfollowuphappening, ifnowhynot, impactprocess, impactachieved, milestone, dateofimpact,timetakenforimpact, communityscreening, noofpeoplesawvideo, detailsofscreening, videoshowntoofficials, collaborations, noofpeopleinvolved, noofpeopleimpacted, noofvillagesimpacted, videoproductionstatus, videoreviewed, approvepayment, videoapproveddate, videoreviewedby, blognotes, gifttocc, thankyoucard from impacttracker where fid = '" . 
	    $fid . "'";
	return getAsAssocArray($sql);	
}

function getnumofrec($num_rec_per_page){
	$db = dbopen();
	$sql = "select * from impacttracker";
	#$result = mysqli_query($db,$sql);
	#$total_records = mysqli_num_rows($result);
	#$total_pages = ceil($total_records / $num_rec_per_page); 
	return getNumberOfPages($num_rec_per_page,$sql);
}

function getStoryAndImpact($num_rec_per_page, $start_from)
{
	$db = dbopen();
	$sql = "select st.fid,st.ccname , st.state , st.receiveddate,st.issuetopic,st.storydescription,st.uniquenumber,it.targetofficial,it.desiredchange,it.ccimpactplan ,it.impactprocess from storytrack as st left join impacttracker as it on st.uniquenumber = it.uniquenumber where st.impactpossible = 'yes' limit $start_from , $num_rec_per_page";
	return getAs2DArray($sql);
}

// core fields - targetOfficial, desired change, ccimpactplan 
function insertOrUpdateImpactCore($un, $targetofficial, $desiredchange, $ccimpactplan) 
{
	echo "inside insert update core";
	$db = dbopen();
	$sql = "insert into impacttracker(uniquenumber, targetofficial, desiredchange, ccimpactplan)
			values ('" . $un . "','" . $targetofficial . "','" . $desiredchange . "','" . $ccimpactplan . 
			"') on duplicate key update targetofficial = " . $targetofficial . 
			', desiredchange = ' . $desiredchange . ', ccimpactplan = ' . $ccimpactplan;
	echo "insert update impacttracker core " . $sql;
	$result=$db->query($sql);
	return $result;
}
function insertAndUpdateImpact($un,$targetofficial,$desiredchange,$ccimpactplan,$impactfollowuphappening,$ifnowhynot,$impactprocess,$impactachieved,$milestone,$dateofimpact,$timetakenforimpact,$communityscreening,$noofpeoplesawvideo,$detailsofscreening,$videoshowntoofficials,$noofofficials,$detailsofscreeningofficials,$collaborations,$noofpeopleinvolved,$noofpeopleimpacted,$noofvillagesimpacted,$videoproductionstatus,$videoreviewed,$approvepayment,$videoapproveddate,$videoreviewedby,$blognotes,$gifttocc,$thankyoucard)
{
	$db = dbopen();
	$sql = "insert into impacttracker(uniquenumber,targetofficial,desiredchange,ccimpactplan,impactfollowuphappening,ifnowhynot,impactprocess,impactachieved,milestone,dateofimpact,timetakenforimpact,communityscreening,noofpeoplesawvideo,detailsofscreening,videoshowntoofficials,noofofficials,detailsofscreeningofficials,collaborations,noofpeopleinvolved,noofpeopleimpacted,noofvillagesimpacted,videoproductionstatus,videoreviewed,approvepayment,videoapproveddate,videoreviewedby,blognotes,gifttocc,thankyoucard)
			values ('". $un . "','" . $targetofficial . "','" . $desiredchange . "','" . 
					$ccimpactplan . "','" . 
					$impactfollowuphappening . "','" . $ifnowhynot . "','". $impactprocess . 
					"','" . 
				    $impactachieved . "','" . $milestone . "','" . $dateofimpact . "','" . $timetakenforimpact . "','" .
				    $communityscreening . "','" . $noofpeoplesawvideo . "','" . $detailsofscreening . "','" . 
				    $videoshowntoofficials . "','" . $noofofficials . "','" . $detailsofscreeningofficials . "','" .
				    $collaborations . "','" . $noofpeopleinvolved . "','" . $noofpeopleimpacted . "','" . 
				    $noofvillagesimpacted . "','" . $videoproductionstatus . "','" . $videoreviewed . "','" .
				    $approvepayment . "','" . $videoapproveddate . "','" . $videoreviewedby . 
				    "','" . $blognotes . "','" . 
				    $gifttocc . "','" . $thankyoucard .
				    "') on duplicate key update targetofficial ='" . $targetofficial . 
					"', desiredchange = '" . $desiredchange . 
					"', ccimpactplan = '" . $ccimpactplan . 
					"', impactfollowuphappening = '" . $impactfollowuphappening . 
					"', ifnowhynot = '" . $ifnowhynot .
					"', impactprocess = '" . $impactprocess . 
					"', impactachieved ='" . $impactachieved .
					"', milestone = '" . $milestone . 
					"', dateofimpact ='" . $dateofimpact . 
					"', timetakenforimpact = '" . $timetakenforimpact . 
					"', communityscreening = '" . $communityscreening .
					"', noofpeoplesawvideo = '" . $noofpeoplesawvideo . 
					"', detailsofscreening = '" . $detailsofscreening .
					"', videoshowntoofficials = '" . $videoshowntoofficials . 
					"',noofofficials = '" . $noofofficials . 
					"', detailsofscreeningofficials = '" . $detailsofscreeningofficials . 
					"', collaborations = '" . $collaborations .
					"', noofpeopleinvolved = '" . $noofpeopleinvolved . 
					"', noofpeopleimpacted = '" . $noofpeopleimpacted .
					"', noofvillagesimpacted = '" . $noofvillagesimpacted . 
					"', videoproductionstatus ='" . $videoproductionstatus .
					"', videoreviewed  = '" . $videoreviewed . 
					"',approvepayment = '" . $approvepayment . 
					"', videoapproveddate = '" . $videoapproveddate . 
					"', videoreviewedby = '" . $videoreviewedby .
					"', blognotes = '" . $blognotes . 
					"', gifttocc = '" . $gifttocc . 
					"', thankyoucard = '" . $thankyoucard . "'";
	echo "insert update impacttracker " . $sql;
	$result=$db->query($sql);
	return $result;
}
?>
