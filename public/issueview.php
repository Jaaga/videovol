<?php 
include("header.php");
include("../model/StoryDB.php");

$issue = $_GET["issue"];
echo "<h1>Issue: " . $issue . "</h1>";
?>

<table><tr><th>ID</th><th>CCName</th><th>Received Date</th><th>Issue Topic</th><th>Story Description</th></tr>

<?php

$resultArray = getBasicDataByIssue($issue);
foreach ($resultArray as $row) {
		echo "<tr><td>" . $row['fid'] . "</td> <td>" .
		     $row['ccname'] . "</td> <td>" .
		     $row['receiveddate'] . "</td> <td>" .
		     $row['issuetopic'] . "</td> <td>" .
		     $row['story description'] . "</td></tr>";
}


?>
</table>