<?php
include_once("../model/StoryDB.php");
if($_GET['action']) {
    include_once("../controller/StoryController.php");
}

include_once("header.php");

?>

<!--
<div class="login">
<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
</div>
<div class="user">
<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
</div>
-->

<table class="table table-hover"><thead><tr><th></th><th>ID</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><th>View Impact</th><tr>
</thead>

<?php

if ($_GET['search']) {
	echo "<h1>SEARCH</h1>";
	$ccname = $_GET['ccname'];
	if ($ccname == "1") 
		unset($ccname);
	$state = $_GET['state'];
	if ($state == "1")
		unset($state);
	$issue = $_GET['issue'];
	if ($issue == "1")
		unset($issue);
    $fromdate = $_GET['fromdate'];
    $todate = $_GET['todate'];
    if ($fromdate == "1" or $todate == "1")
        unset($fromdate, $todate);
	$resultArray = getBasicDataBySearch($ccname, $state, $issue, $fromdate, $todate);
} else {
    $resultArray = getAllBasicData();
}

foreach ($resultArray as $row) {
if ($row['impactpossible']=="Yes"){
echo "<tr>
        <td><a href=storyeditor.php?id=" . urlencode($row['fid']) . ">" . 
        "Edit Story" . "</a></td>
        <td>". $row['fid'] . "</td>" . 
        "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" .
        $row['ccname'] . "</a></td>" .
        "<td><a href=index.php?state=" . urlencode($row['state']) . ">" .
        $row['state'] . "</a></td>" .
        "<td><a href=index.php?issuetopic=" . urlencode($row['issuetopic']) . ">" .
        $row['issuetopic'] . "</a></td> 
        <td>" .$row['receiveddate'] . "</td> 
        <td>" .$row['storydescription'] . "</td>" .
        "<td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
        $row['stage'] . "</a></td>".
        "<td><a href=preproduction/impact_team.php?id=" . urlencode($row['uniquenumber']) .">" . 
        "Impact" . "</a></td></tr>";
        }

 else {
 echo "<tr>
        <td><a href=storyeditor.php?id=" . urlencode($row['fid']) . ">" . 
        "Edit Story" . "</a></td>
        <td>". $row['fid'] . "</td>" . 
        "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" .
        $row['ccname'] . "</a></td>" .
        "<td><a href=index.php?state=" . urlencode($row['state']) . ">" .
        $row['state'] . "</a></td>" .
        "<td><a href=index.php?issuetopic=" . urlencode($row['issuetopic']) . ">" .
        $row['issuetopic'] . "</a></td> 
        <td>" .$row['receiveddate'] . "</td> 
        <td>" .$row['storydescription'] . "</td>" .
        "<td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
        $row['stage'] . "</a></td>
        <td>" .$row['impactpossible'] . "</td></tr>";
        }   
 }       

?>

<link rel="stylesheet" href="./jqueryui/css/ui/jquery-ui.css" />
<script src="./jqueryui/js/jquery.js"></script>
<script src="./jqueryui/js/jquery-ui.min.js"></script>
<script>
 $(function(){
        $("#dateSearchFrom").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#searchToDate").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#searchToDate").datepicker( "option", "minDate", minValue );
        })
    });
 
</script>
</table>
</body>
</html>