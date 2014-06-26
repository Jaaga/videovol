<?php
include_once("header.php");
include_once("../model/StoryDB.php");

if($_GET['action']) {
    include_once("../controller/StoryController.php");
}
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

<div><!--container for advanced search-->
<table>
    <form method="GET" action="index.php">
    
 	<tr><td valign="top"><label>Search : </label><select name="ccname"><option value="1">CCname</option>
<?php	foreach(getCCNames() as $ccname) 
            echo '<option value="'.$ccname.'">'.$ccname.'</option>';
?>
    </select></td>
    
<td valign="top"><select name="state"><option value="1">State</option>
<?php   foreach(getStates() as $state) 
        	echo '<option value="'.$state.'">'.$state.'</option>';
?>
	</select></td>
        
<td valign="top"><select name="issue"><option value="1">Issue</option>'; 
<?php 	foreach(getIssues() as $issue) 
        	echo '<option value="'.$issue.'">'.$issue.'</option>';
?>
</select></td>

         
        <td valign="top">From:<input type="date" name="fromdate" id="dateSearchFrom"></td>
        <td valign="top">To:<input type="date" name="todate" id="searchToDate"></td>
        <td><input type="submit" name="search" value="Search" /></td>
        <!--<td><input type="submit"></td>-->
    
    </form>
</table>
</div>


<div class="stages">
<br>
<a href="storyeditor.php" class="button button-rounded button-flat-primary">Create New Story</a>
<a href="junioreditorview.php" class="button button-rounded button-flat-action">Mentor View</a>
<a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor View</a>
<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>
<a href="impactview1.php" class="button button-rounded button-flat-action">Impact View</a>
<small><a href="viewalldata.php">View All Data</a></small>
</div>

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
$(function() {
$( "#dateSearchFrom" ).datepicker();
});

$(function() {
$( "#searchToDate" ).datepicker();
});
</script>
</table>
</body>
</html>
