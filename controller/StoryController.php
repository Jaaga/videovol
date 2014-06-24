<?php
include_once('../model/StoryDB.php');

echo "<h1>StoryController</h1>";

echo "state: " . $_GET['state'] . " \n";
echo "dateReceived: " . $_GET['dateReceived'] . "\n";

addStory($_GET['ccname'], $_GET['state'], $_GET['dateReceived'], $_GET['issue'], 
		 $_GET['story'], $_GET['unique_no'], $_GET['storydate'], $_GET['cc_pair'],
		 $_GET['program'], $_GET['mentor'], $_GET['iu_topic'], $_GET['video_treatment'],
		 $_GET['shoot_plan'], $_GET['impactpossible']);

?>
