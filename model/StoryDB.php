<h1>hello</h1>

<?php
include '../model/dbcon.php';

function getAllBasicData() {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack";
	return getBasicData($sql);
}

function getBasicDataByCCName($ccName) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where ccname = '" . 
	    $ccName . "'";
	return getBasicData($sql);	
}

function getBasicDataByIssue($issue) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where issuetopic = '" . $issue . "'";
	return getBasicData($sql);	
}

function getBasicDataByState($state) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where state = '" . 
		$state . "'";
	return getBasicData($sql);	
}

function getBasicDataByStage($stage) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where stage = '" . 
		$stage . "'";
	return getBasicData($sql);	
}


function getBasicData($query) {
	$db=dbopen();
	$result = mysqli_query($db, $query);	

	$rows = array();
	while($row = mysqli_fetch_array($result)) {
    	$rows[] = $row;
	}
	return $rows;	
}
?>
