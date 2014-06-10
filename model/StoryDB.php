<h1>hello</h1>

<?php include '../model/dbcon.php';

function getAllBasicData() {
	$db=dbopen();
	$sql = "select ccname, state, receiveddate, issuetopic, storydescription, fid from storytrack";
	$result = mysqli_query($db, $sql);	

	//$rows = array();
	while($row = mysqli_fetch_array($result)) {
    	echo $row;
    	$rows[] = $row;

	}
	return $rows;
}
var_dump($rows);
$res = getAllBasicData();
echo $res['ccname'];
?>
