<?php 

echo "<h1>in EC</h1>";

include_once '../model/PostDB.php';
if($_GET['action'] == 'update') {
	editorUpdate($_GET['un'], $_GET['editreceived'], $_GET['editor'], $_GET['editcomplete'], 
					   $_GET['subtitlestatus'],$_GET['videosent'],$_GET['editnotes']);
//else
//echo "please select all the options one or more options not selected";
//	header("Refresh: 3; url=../public/junioreditor.php?id=".$fid);
?>