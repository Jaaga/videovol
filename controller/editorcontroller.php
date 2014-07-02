<?php 
include '../model/PostDB.php';
$un=$_POST['un'];
if($_POST['uniquenumber'] && $_POST['editreceived'] && $_POST['editor'] && $_POST['editcomplete'] && $_POST['subtitlestatus'] && $_POST['videosent'] && $_POST['editnotes']!='0')
{
	$result = editorUpdate($_POST['seq'],$_POST['broll'],$_POST['fint'],$_POST['vo'],$_POST['ptc'],$_POST['cta'],$_POST['vd'],$_POST['translation'],$fid);
	if(!$result)
	{
		echo "data not inserted";
	}
	else
		header('location:../public/junioreditorview.php');
}
else
echo "please select all the options one or more options not selected";
	header("Refresh: 3; url=../public/junioreditor.php?id=".$fid);
?>