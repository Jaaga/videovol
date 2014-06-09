<?php
include '../model/dbcon.php';
$db=dbopen();
$ccname=$_POST['ccname'];
$states=$_POST['states'];
$dateReceived=$_POST['dateReceived'];
$issue=$_POST['issue'];
$story=$_POST['story'];
$Uniqueno=$_POST['unique_no'];
$dateofstory = $_POST['storydate'];
$ccpair = $_POST['cc_pair'];
$program = $_POST['program'];
$mentor = $_POST['mentor'];
$iu_topic = $_POST['iu_topic'];
$video_treatment = $_POST['video_treatment'];
$shoot_plan = $_POST['shoot_plan'];
$addstory = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription,uniquenumber,dateofstory,ccpair,program,mentor,iutopic,videotreatment,shootplan) values (UUID(),'$ccname','$states','$dateReceived','$issue','$story','$Uniqueno','$dateofstory','$ccpair','$program','$mentor','$iu_topic','$video_treatment','$shoot_plan')";
$new = $db->query($addstory);
if(!$new)
{
	echo "story not added";
}
else
	header("location:../public/dataadded.php");

?>
