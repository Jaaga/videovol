<?php
include '../model/dbcon.php';
$db=dbopen();
$paymentstatus = $_POST['paymentStatus'];
$editStatus = $_POST['editStatus'];
$editMonth = $_POST['editMonth'];
$notes= $_POST['notes'];
$publishPlatform = $_POST['publishPlatform'];
$editorNames = $_POST['editorNames'];
$editorPayment = $_POST['editorPayment'];
$fid =$_POST['fid'];
$update = "update storytrack set paymentstatus ='$paymentStatus',editstatus ='$editStatus',editedmonth = '$editMonth',notes = '$notes',publishplatform = '$publishPlatform',editor = '$editorNames', editorpayment = '$editorPayment' where fid ='$fid'";
$pm=$db->query($update);
if(!$pm)
{
echo "data not inserted";
}
else
header("location:../public/pmview.php");
?>