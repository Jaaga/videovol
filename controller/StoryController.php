<?php
include_once('../model/StoryDB.php');
#include_once('../model/ImpactDB.php');

echo $_GET['dateReceived'];


if ($_GET['action'] == 'update') {
	updateStory($_GET['un'], $_GET['uniquenumber'], $_GET['ccname'], $_GET['state'], 
			$_GET['dateReceived'], $_GET['issuetopic'], 
			$_GET['story'], $_GET['dateofstory'], $_GET['cc_pair'],
			$_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 	$_GET['shoot_plan'], $_GET['impactpossible'],$_GET['targetofficial'],$_GET['desiredchange'],$_GET['ccimpactplan']);
} else {
	addStory($_GET['uniquenumber'], $_GET['ccname'], $_GET['state'], $_GET['program'],$_GET['iutheme'],$_GET['storydescription'], $_GET['dateofstorypitched'],$_GET['ccpair'],$_GET['mentor'],$_GET['storytype'],$_GET['shootplan'],$_GET['impactpossible'],$_GET['targetofficial'],$_GET['desiredchange'],$_GET['impactplan']);
}
/*echo "impact?";
if ($_GET['impactpossible'] == 'Yes') {
	echo "yes";
	insertOrUpdateImpactCore($_GET['uniquenumber'], $_GET['targetofficial'], $_GET['ccimpactplan'], $_GET['desiredchange']);
}*/
?>
