

<?php include_once('../model/dbcon.php');


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
	$sql = "SELECT DISTINCT " . $column . " FROM storytrack";
	$result = mysqli_query($db, $sql);
	echo $sql;
	while ($name = mysqli_fetch_array($result)) {

		$data[] = $name[$column];
				
	}
	return $data;
}
function getnumofrec($num_rec_per_page){
	$db = dbopen();
	$sql = "select * from storytrack";
	#$result = mysqli_query($db,$sql);
	#$total_records = mysqli_num_rows($result);
	#$total_pages = ceil($total_records / $num_rec_per_page); 
	return getNumberOfPages($num_rec_per_page,$sql);
}

function getAllBasicData($num_rec_per_page,$start_from) {
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage, impactpossible from storytrack limit $start_from , $num_rec_per_page";
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

function getDataByUniqueNumber($un) {
	$sql = "select fid, ccname, state, receiveddate, issuetopic, storydescription, dateofstory, ccpair, program, mentor, iutopic, videotreatment, shootplan, stage, impactpossible from storytrack where uniquenumber = '" . $un . "'";
 	return getAsAssocArray($sql);
 }

function getBasicDataBySearch($ccname, $state, $issue, $fromdate, $todate) {
	$where = genSearchWhere($where, "ccname", $ccname);
	$where = genSearchWhere($where, "state", $state);
	$where = genSearchWhere($where, "issuetopic", $issue);
	
	if ($fromdate and $where) {
		$where = $where . " and ";
		$where = $where . " receiveddate BETWEEN '" . $fromdate . "' and '" . $todate . "'";
	}
	elseif ($fromdate and !$where) {
		$where = $where . " receiveddate BETWEEN '" . $fromdate . "' and '" . $todate . "'";
	}
	
	$sql = "select uniquenumber, ccname, state, receiveddate, issuetopic, storydescription, fid, stage, impactpossible from storytrack " .

		   "where " . $where;
	return getAs2DArray($sql);
}

function genSearchWhere($where, $field, $val) {
    if (!$val) {
      return $where;
    } if ($where) {
      $where = $where . " and ";
    }
    
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

function addStory($uniquenumber, $ccname, $state, $dateReceived, $issue, $story,  
				  $storydate, $ccpair, $program, $mentor, $iutopic, $videotreatment,
				  $shootplan, $impactpossible) {
	$sql = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription,".
		    "uniquenumber,dateofstory,ccpair,program,mentor,iutopic,videotreatment,shootplan,".
		    "impactpossible) " .
			"values (UUID(),'" . $ccname . "','" . $state . "','" . $dateReceived . "','" . 
			$issue . "','" . $story . "','" . $uniquenumber . "','" . $storydate . "','" . 
			$ccpair . "','" . $program . "','" . $mentor . "','" . $iutopic . "','" . 
			$videotreatment . "','" . $shootplan . "','" . $impactpossible ."')";
	$db=dbopen();
	mysqli_query($db, $sql);
	mysqli_close($db);
}

function updateStory($un, $uniquenumber, $ccname, $state, $dateReceived, $issue, $story, 
				  $storydate, $ccpair, $program, $mentor, $iutopic, $videotreatment,
				  $shootplan, $impactpossible) {
	$sql =  "update storytrack set uniquenumber = '" . $uniquenumber . "', ccname = '" . $ccname . "', state = '" . $state . "',".
			" receiveddate = '" . $dateReceived . "', issuetopic = '" . $issue . "',".
			" storydescription = '" . $story . "'," .
			" dateofstory = '" . $storydate . "', ccpair = '" . $ccpair . "'," .
			" program = '" . $program . "', mentor = '" . $mentor . "', " .
			" iutopic = '" . $iutopic . "', videotreatment = '" . $videotreatment . "'," .
			" shootplan = '" . $shootplan . "', impactpossible = '" . $impactpossible ."'" .
			" where uniquenumber = '" . $un . "'";
	$db=dbopen();
	mysqli_query($db, $sql);
	mysqli_close($db);
}

function seniorEditorUpdate($uploaddate,$publishdate,$receivedRO,$receivedHQ,$fid){
	$sql = "update storytrack set uploaddate = '$uploaddate',publishdate = '$publishdate',receivedRO = '$receivedRO',receivedHQ  = '$receivedHQ' where fid='$fid'";
	$db = dbopen();
	$result= $db->query($sql);
	return $result;
}
function projectManagerUpdate($paymentstatus,$editStatus,$editMonth,$notes,$publishPlatform,$editorNames,$editorPayment,$fid ){
	$sql = "update storytrack set paymentstatus ='$paymentstatus',editstatus ='$editStatus',editedmonth = '$editMonth',notes = '$notes',publishplatform = '$publishPlatform',editor = '$editorNames', editorpayment = '$editorPayment' where fid ='$fid'";
	$db = dbopen();
	$result = $db->query($sql);
	return $result;
}
function getDataForSeniorEditor(){
	$sql = "select * from storytrack where seq IS NOT NULL";
	return getAs2DArray($sql);
}

function getDataForProjectManager(){
	$sql ="select * from storytrack where seq IS NOT NULL and  paymentstatus IS NULL";
	return getAs2DArray($sql);
}

?>