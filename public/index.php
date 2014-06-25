<?php
include_once("header.php");
include_once("../model/StoryDB.php");

if($_GET['action']) {
    include_once("../controller/StoryController.php");
}
?>

<div class="login">
<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
</div>
<div class="user">
<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
</div>


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

         
        <td valign="top">From:<input type="date" name="fromdate"></td>
        <td valign="top">To:<input type="date" name="todate"></td>
        <td><input type="submit" name="search" value="Search" /></td>
        <!--<td><input type="submit"></td>-->
    
    </form>
</table>
</div>


<div class="stages">
<br>
<a href="storyeditor.php" class="button button-rounded button-flat-action">CreateStory</a>
<a href="junioreditorview.php" class="button button-rounded button-flat-action">Junior Editor</a>
<a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor</a>
<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager</a>
<a href="impactview1.php" class="button button-rounded button-flat-action">Impact</a>
</div>


<h2>Summary <a href="viewalldata.php" class="button button-rounded button-flat-primary">View All Data</a></h2>
<table class="table table-hover"><thead><tr><th></th><th>ID</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><th>Impact Possible</th><tr>
</thead>

<?php
/*
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
} else if ($_GET['issuetopic']) {
	echo "<h1>Issue: " . $_GET['issuetopic'] . "</h1>";
	$resultArray = getBasicDataByIssue($_GET['issuetopic']);
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
} else {
    $resultArray = getAllBasicData();
}
*/
    $resultArray = getAllBasicData();

foreach ($resultArray as $row) {
echo "<tr>
        <td><a href=storyeditor.php?id=" . urlencode($row['fid']) . ">" . 
        "Edit Story" . "</a></td><td>". 
        $row['fid'] . "</a></td>" . 
        "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" .
        $row['ccname'] . "</a></td>" .
        "<td><a href=index.php?state=" . urlencode($row['state']) . ">" .
        $row['state'] . "</a></td>" .
        "<td><a href=index.php?issuetopic=" . urlencode($row['issuetopic']) . ">" .
        $row['issuetopic'] . "</a></td> <td>" .
        $row['receiveddate'] . "</td> <td>" .
        $row['storydescription'] . "</td>" .
        " <td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
        $row['stage'] . "</a></td>" .
        "<td><a href=preproduction/impact_team.php?id=" . urlencode($row['uniquenumber']) .">" . 
        "Create Impact" . "</a></td></tr>";
        }

?>
</table>
</body>
</html>
