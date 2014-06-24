

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
	while ($name = mysqli_fetch_array($result)) {
		$data[] = $name;
	}
	return $data;
}


function getAllBasicData() {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack";
	return getAs2DArray($sql);
}

function getBasicDataByCCName($ccname) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where ccname = '" . 
	    $ccname . "'";
	return getAs2DArray($sql);	
}

function getBasicDataByIssue($issuetopic) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where issuetopic = '" . $issuetopic . "'";
	return getAs2DArray($sql);	
}

function getBasicDataByState($state) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where state = '" . 
		$state . "'";
	return getAs2DArray($sql);	
}

function getBasicDataByStage($stage) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage from storytrack where stage = '" . 
		$stage . "'";
	return getAs2DArray($sql);	
}

function getDataByID($fid) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, uniquenumber, dateofstory, ccpair, program, mentor, iutopic, videotreatment, shootplan, stage, impactpossible from storytrack where fid = '" . $fid . "'";
 	return getAsAssocArray($sql);
 }

function getBasicDataBySearch($ccname, $state, $issue) {
	$where = genSearchWhere($where, "ccname", $ccname);
	$where = genSearchWhere($where, "state", $state);
	$where = genSearchWhere($where, "issuetopic", $issue);
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage, impactpossible from storytrack " .
		   "where " . $where;
	return getAs2DArray($sql);
}

function genSearchWhere($where, $field, $val) {
    if (!$val)
      return $where;
    if ($where) 
      $where = $where . " and ";
    
    return $where . $field . " = '" . $val . "'";
}

function getAllFootageCheckData() {
    $sql = "select fid, seq, broll, fint, vo, ptc, cta, vd, translation from storytrack";
    return getAs2DArray($sql);
}

function getFootageCheckDataById($id) {
    $sql = "select seq, broll, fint, vo, ptc, cta, vd, translation from storytrack where fid = '" . $id . "'";
 	return getAsAssocArray($sql);
}

function addStory($ccname, $state, $receiveddate, $issue, $story, $uniquenumber, 
				  $storydate, $ccpair, $program, $mentor, $iutopic, $videotreatment,
				  $shootplan, $impactpossible) {
	$sql = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription,uniquenumber,dateofstory,ccpair,program,mentor,iutopic,videotreatment,shootplan,impactpossible) " .
			"values (UUID(),'" . $ccname . ',' . $states . ',' . $dateReceived . ',' . 
			$issue . ',' . $story . ',' . $uniquenumber . ',' . $storydate . ',' . $ccpair . ',' .
			$program . ',' . $mentor . ',' . $iu_topic . ',' . $video_treatment . ',' . 
			$shoot_plan . ',' . $impactpossible ."')";
	$db=dbopen();
	mysqli_query($db, $sql);
	dbclose();
}

 /*
    $resultArray = getFootageCheckDataById(9);
    echo "array[0]: " . $resultArray[0];
    echo "array['seq']: " . $resultArray['seq'];

    foreach ($resultArray as $field) {
        echo "<h1>QQQQseq: " . $field['seq'] . " broll: " . $field['broll'] . " fint: " . $row['fint'] . " vo: " . $row['vo'] . " ptc: " . $row['ptc'] . " cta: " . $row['cta'] . " vd: " .$row['vd'] . " translation: " . $row['translation'] . "</h1>";
    }
*/
?>