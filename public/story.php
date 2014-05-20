<?php
include '../model/dbcon.php';
$db=dbopen();
$ccname=$_POST['ccname'];
$states=$_POST['states'];
$dateReceived=$_POST['dateReceived'];
$issue=$_POST['issue'];
$story=$_POST['story'];
$addstory = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription) values (UUID(),'$ccname','$states','$dateReceived','$issue','$story')";
$new = $db->query($addstory);
if(!$new)
{
	echo "story not added";
}
else
	header("location:../public/createstory.html");

?>
