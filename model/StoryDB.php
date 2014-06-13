

<?php include '../model/dbcon.php';

function getAllBasicData() {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack";
	return getBasicData($sql);
}

function getBasicDataByCCName($ccname) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where ccname = '" . 
	    $ccname . "'";
	return getBasicData($sql);	
}

function getBasicDataByIssue($issuetopic) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where issuetopic = '" . $issuetopic . "'";
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

function getBasicDataByID($fid) {
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where fid = '" . 
		$fid . "'";
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
