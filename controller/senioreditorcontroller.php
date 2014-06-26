<?php
include '../model/StoryDB.php';
$fid = $_POST['fid'];
$result = seniorEditorUpdate($_POST['uploaddate'],$_POST['publishdate'],$_POST['receivedRO'],$_POST['receivedHQ'], $fid);
if(!$result)
	{
echo "data not inserted";
}
else
header("location:../public/senioreditview.php");
?>
