<?php
include'../model/dbcon.php';
$db=dbopen();
$uploaddate = $_POST['uploaddate'];
$publishdate = $_POST['publishdate'];
$receivedRO = $_POST['receivedRO'];
$receivedHQ = $_POST['receivedHQ'];
$fid = $_POST['fid'];
$update = "update storytrack set uploaddate = '$uploaddate',publishdate = '$publishdate',receivedRO = '$receivedRO',receivedHQ  = '$receivedHQ' where fid='$fid'";
$se=$db->query($update);
if(!$se)
{
echo "data not inserted";
}
else
header("location:../public/senioreditview.php");
?>

?>