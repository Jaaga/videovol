<?php
include "../model/StoryDB.php"
$result = projectManagerUpdate($_POST['paymentStatus'],$_POST['editStatus'],$_POST['editMonth'],$_POST['notes'],$_POST['publishPlatform'],$_POST['editorNames'],$_POST['editorPayment'],$fid);
if(!$result)
{
echo "data not inserted";
}
else
	header("location:../public/pmview.php");

?>