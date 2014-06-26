<?php 
include '../model/StoryDB.php';
$fid=$_POST['fid'];
if($_POST['seq'] && $_POST['broll'] && $_POST['fint'] && $_POST['vo'] && $_POST['ptc'] && $_POST['cta'] && $_POST['vd'] && $_POST['translation'] !='0')
{
	$result = juniorEditorUpdate($_POST['seq'],$_POST['broll'],$_POST['fint'],$_POST['vo'],$_POST['ptc'],$_POST['cta'],$_POST['vd'],$_POST['translation'],$fid);
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