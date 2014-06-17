

<?php include '../model/dbcon.php';


function getCCNames() {
	return getDistinctData("ccname");
}

function getStates() {
	return getDistinctData("state");
}

function getIssues() {
	return getDistinctData("issuetopic");
}

function getDistinctData($column) {
	$db=dbopen();
	$data = array();
	$result = mysqli_query($db, "SELECT DISTINCT " . $column . " FROM storytrack"); // Run the query
	while ($name = mysqli_fetch_array($result)[0]) {
		$data[] = $name;
	}
	return $data;
}


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
	$sql = "select fid, ccname, state, receiveddate, issuetopic, storydescription, uniquenumber, dateofstory, ccpair, program, mentor, iutopic, videotreatment, shootplan, stage, impact fid, stage, impactpossible from storytrack where fid = '" . 
		$fid . "'";
	$db=dbopen();
	$result = mysqli_query($db, $sql);
	$row = $result;	
	return $row;

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
