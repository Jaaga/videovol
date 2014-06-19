<?php 
include("header.php");
include("../model/StoryDB.php");

$stage = $_GET["stage"];
//$stage = "ffo";
echo "<h1>stage: " . $stage . "</h1>";
?>

<table><tr><th>ID</th><th>stage</th><th>Received Date</th><th>Issue Topic</th><th>Story Description</th></tr>

<?php



$resultArray = getBasicDataBystage($stage);
foreach ($resultArray as $row) {
		echo "<tr><td>" . $row['fid'] . "</td> <td>" .
		     $row['stage'] . "</td> <td>" .
		     $row['receiveddate'] . "</td> <td>" .
		     $row['issuetopic'] . "</td> <td>" .
		     $row['story description'] . "</td></tr>";
}


?>
</table>