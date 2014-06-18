

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
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack";
	return getBasicData($sql);
}

function getBasicDataByCCName($ccname) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where ccname = '" . 
	    $ccname . "'";
	return getBasicData($sql);	
}

function getBasicDataByIssue($issuetopic) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where issuetopic = '" . $issuetopic . "'";
	return getBasicData($sql);	
}

function getBasicDataByState($state) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where state = '" . 
		$state . "'";
	return getBasicData($sql);	
}

function getBasicDataByStage($stage) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where stage = '" . 
		$stage . "'";
	return getBasicData($sql);	
}

function getBasicDataByID($fid) {
	$sql = "select uniquenumber, fid, ccname, state, receiveddate, issuetopic, storydescription, uniquenumber, dateofstory, ccpair, program, mentor, iutopic, videotreatment, shootplan, stage, impact fid, stage, impactpossible from storytrack where fid = '" . 
		$fid . "'";
	$db=dbopen();
	$result = mysqli_query($db, $sql);
	$row = $result;	
	return $row;
}

function getBasicDataBySearch($ccname, $state, $issue) {
	$where = genSearchWhere($where, "ccname", $ccname);
	$where = genSearchWhere($where, "state", $state);
	$where = genSearchWhere($where, "issuetopic", $issue);
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack " .
		   "where " . $where;
	return getBasicData($sql);
}

function genSearchWhere($where, $field, $val) {
    if (!$val) 
      return $where;
    if ($where) 
      $where = $where . " and ";
    
    return $where . $field . " = '" . $val . "'";
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

function getFootageCheckData() {
    $sql = "select seq, broll, fint, vo, ptc, cta, vd, translation from storytrack";
    return getBasicData($sql);
}

/*
    $resultArray = getFootageCheckData();
    foreach ($resultArray as $row) {
        echo "<h1>seq: " . $row['seq'] . " broll: " . $row['broll'] . " fint: " . $row['fint'] . " vo: " . $row['vo'] . " ptc: " . $row['ptc'] . " cta: " . $row['cta'] . " vd: " .$row['vd'] . " translation: " . $row['translation'] . "</h1>";
    }
*/
?>