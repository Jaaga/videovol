<?php 

echo "<h1>in JEC</h1>";

include_once '../model/PostDB.php';
if($_GET['action'] == 'update') {
	juniorEditorUpdate($_GET['un'], $_GET['footagereceived'], $_GET['wherereceived'], $_GET['reviewedby'], 
					   $_GET['seq'],$_GET['broll'],$_GET['fint'],$_GET['vo'],$_GET['ptc'],
					   $_GET['cta'],$_GET['vd'],
		               $_GET['translation'],$_GET['paymentapproved'], $_GET['approvedon']);
}
//else
//echo "please select all the options one or more options not selected";
//	header("Refresh: 3; url=../public/junioreditor.php?id=".$fid);
?>