<?php
include_once('../model/StoryDB.php');

echo $_GET['dateReceived'];

$fid = $_GET['fid'];
if ($fid) {
	updateStory($fid, $_GET['ccname'], $_GET['state'], $_GET['dateReceived'], $_GET['issue'], 
			$_GET['story'], $_GET['unique_no'], $_GET['storydate'], $_GET['cc_pair'],
			$_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 	$_GET['shoot_plan'], $_GET['impactpossible']);
} else {
	addStory($_GET['ccname'], $_GET['state'], $_GET['dateReceived'], $_GET['issue'], 
			$_GET['story'], $_GET['unique_no'], $_GET['storydate'], $_GET['cc_pair'],
			$_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 	$_GET['shoot_plan'], $_GET['impactpossible']);
}
?>
