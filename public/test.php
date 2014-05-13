<?php
include '../model/dbcon.php';
$db=dbopen();
$ccname=$_POST['ccname'];
$states=$_POST['states'];
$ccname=$_POST['ccname'];

$addstory = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription) values (UUID(),'amar','karnataka',now(),'health','myhealth is not well today')";
$new = $db->query($addstory);
if(!$new)
{
	echo "story not added";
}
else
	echo "story added";
?>
