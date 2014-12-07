<?php include_once('../model/dbcon.php');


function getNames() {
	return getCCData("name");
}
function getstate() {
	return getCCData("state");
}

function getCCData($column) {
	$db=dbopen();
	$data = array();
	$sql = "SELECT DISTINCT " . $column . " FROM ccdata";
	$result = mysqli_query($db, $sql);
	echo $sql;
	while ($name = mysqli_fetch_array($result)) {

		$data[] = $name[$column];
				
	}
	return $data;
}
?>