<?php
include '../model/dbcon.php';
$db=dbopen();
$seq=$_POST['seq'];
$broll=$_POST['broll'];
$fint=$_POST['fint'];
$vo=$_POST['vo'];
$ptc=$_POST['ptc'];
$cta=$_POST['cta'];
$vd=$_POST['vd'];
$translation=$_POST['translation'];
$fid=$_POST['fid'];

$qualcheck = "update storytrack set seq='$seq',broll='$broll',fint='$fint',vo='$vo',ptc='$ptc',cta='$cta',vd='$vd',translation='$translation' where fid ='$fid'";
$qc=$db->query($qualcheck);
if(!$qc)
{
echo "data not inserted";
}
else
header("location:../public/edit.php");
//echo "data added";
//header("Location: "../$extra");
?>