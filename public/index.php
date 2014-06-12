
<?php 
include("header.php");
include("../model/StoryDB.php");
?>
	<div class="login">
	<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
	<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
	</div>
	<div class="user">
	<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
	</div>	
	<div class="stages">
	<br>
	<a href="createstory1.php" class="button button-rounded button-flat-action">CreateStory</a>
	<a href="login.php" class="button button-rounded button-flat-action">Junior Editor</a>
	<a href="login.php" class="button button-rounded button-flat-action">Senior Editor</a>
	<a href="login.php" class="button button-rounded button-flat-action">Project Manager</a>
	<a href="../public/preproduction/impactview.php" class="button button-rounded button-flat-action">Impact</a>
	
	</div>

<h2>Summary <a href="table_bootstrap.php" class="button button-rounded button-flat-primary">View All Data</a></h2>
<table class="table table-hover"><thead><tr><th>ID</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><tr>
								</thead>
<?php

if ($_GET['issue']) {
	echo "<h1>Issue: " . $_GET['issue'] . "</h1>";
	$resultArray = getBasicDataByIssue($_GET['issue']);
} else if ($_GET['ccname']) {
	echo "<h1>CCNAME: " . $_GET['ccname'] . "</h1>";
	$resultArray = getBasicDataByCCName($_GET['ccname']);	
} else if ($_GET['stage']) {
	echo "<h1>STAGE: " . $_GET['stage'] . "</h1>";
	$resultArray = getBasicDataByStage($_GET['stage']);	
} else if ($_GET['state']) {
	echo "<h1>STATE: " . $_GET['state'] . "</h1>";
	$resultArray = getBasicDataByState($_GET['state']);	
} else if ($_GET['fid']) {
	echo "<h1>ID: " . $_GET['fid'] . "</h1>";
	$resultArray = getBasicDataById($_GET['fid']);
}
  else {
    $resultArray = getAllBasicData();
}

foreach ($resultArray as $row) {
		echo "<tr><td><a href=index.php?fid=" . urlencode($row['fid']) . ">" . 
			 $row['fid'] . "</a></td>" . 
			 "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" . 
			 $row['ccname'] . "</a></td>" .
			 "<td><a href=index.php?state=" . urlencode($row['state']) . ">" . 
			 $row['state'] . "</a></td>" .
			 "<td><a href=index.php?issue=" . urlencode($row['issuetopic']) . ">" .
		     $row['issuetopic'] . "</a></td> <td>" .
		     $row['receiveddate'] . "</td> <td>" .
		     $row['storydescription'] . "</td>" .
		     " <td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
		     $row['stage'] . "</a></td></tr>";
}

?>
</table>




</body>
</html>
