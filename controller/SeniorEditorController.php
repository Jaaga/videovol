<?php

include_once '../model/PostDB.php';
if($_GET['action'] == 'update') {
	seniorEditorUpdate($_GET['un'], $_GET['goareceived'], $_GET['subtitlerequired'], $_GET['subtitledone'], 
					   $_GET['cleaningrequired'],$_GET['cleaningdone'],$_GET['feedback'],$_GET['seniornotes'],
					   $_GET['uploaded'], $_GET['published'],$_GET['publishplatform']);
}
?>
