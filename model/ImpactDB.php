<?php
include 'dbcon.php';
function getImpactData($id)
{
	$db =dbopen();
	$sql = "select * from impacttracker where uniquenumber = '".$id."' ";
	$result = $db->query($sql);
		$rows= array();
	$row = mysqli_fetch_array($result);
	
	$rows[] = $row;
	 
return ($rows);
}
//$row = getImpactData("23");
//var_dump($row);
?>