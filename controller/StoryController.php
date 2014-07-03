<?php
include_once('../model/StoryDB.php');

echo $_GET['dateReceived'];


if ($_GET['action'] == 'update') {
	updateStory($_GET['un'], $_GET['uniquenumber'], $_GET['ccname'], $_GET['state'], $_GET['dateReceived'], $_GET['issue'], 
			$_GET['story'], $_GET['storydate'], $_GET['cc_pair'],
			$_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 	$_GET['shoot_plan'], $_GET['impactpossible']);
} else {
	addStory($_GET['uniquenumber'], $_GET['ccname'], $_GET['state'], $_GET['dateReceived'], $_GET['issue'], 
			$_GET['story'], $_GET['storydate'], $_GET['cc_pair'],
			$_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 	$_GET['shoot_plan'], $_GET['impactpossible']);
}
?>
