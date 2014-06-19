<?php 
include("header.php");
include("../model/StoryDB.php");

$ccname = $_GET["ccname"];
//$ccname = "ffo";
echo "<h1>CCName: " . $ccname . "</h1>";
?>

<table><tr><th>ID</th><th>CCName</th><th>Received Date</th><th>Issue Topic</th><th>Story Description</th></tr>

<?php



$resultArray = getBasicDataByCCName($ccname);
foreach ($resultArray as $row) {
		echo "<tr><td>" . $row['fid'] . "</td> <td>" .
		     $row['ccname'] . "</td> <td>" .
		     $row['receiveddate'] . "</td> <td>" .
		     $row['issuetopic'] . "</td> <td>" .
		     $row['story description'] . "</td></tr>";
}


?>
</table>