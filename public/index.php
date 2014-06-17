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
<div><!--container for search option-->
<table>
    <form method="POST" action="search.php">
    
    <!--form for ccname search-->
        
        <?php
        $query = mysql_query("SELECT DISTINCT ccname FROM storytrack"); // Run the query

        echo '<tr><td valign="top"><label>Search : </label><select name="ccname"><option value="1">CCname</option>'; // Opens the drop down box

        // Loops through the query results, outputing the options one by one
        while ($search = mysql_fetch_array($query)) {
           echo '<option value="'.$search['ccname'].'">'.$search['ccname'].'</option>';
        }

        echo '</select></td>';// Closes drop down box
        ?>
    
    <!--search for state search-->

        
        <?php
        $query = mysql_query("SELECT DISTINCT state  FROM storytrack"); // Run the query

        echo '<td valign="top"><select name="state"><option value="1">State</option>';
        // Opens the drop down box</

        // Loops through the query results, outputing the options one by one
        while ($search = mysql_fetch_array($query)) {
        echo '<option value="'.$search['state'].'">'.$search['state'].'</option>';
        }
        echo '</select></td>';// Closes drop down box
        ?>
        
    
    <!-- search for issuetopic search-->

        <?php
        $query = mysql_query("SELECT DISTINCT issuetopic FROM storytrack"); // Run the query

        // Opens the drop down box
        echo '<td valign="top"><select name="issue"><option value="1">Issue</option>'; 

        // Loops through the query results, outputing the options one by one
        while ($search = mysql_fetch_array($query)) {
           echo '<option value="'.$search['issuetopic'].'">'.$search['issuetopic'].'</option>';
        }

        // Closes drop down box
        echo '</select></td>';
        ?>
        <td><input type="hidden" name="searching" value="yes" /></td>
        <td><input type="submit" name="search" value="Search" /></td>
        <!--<td><input type="submit"></td>-->
    
    </form>



</table>

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
<table class="table table-hover"><thead><tr><th></th><th>ID</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><th>Impact Possible</th><tr>
</thead>

<?php

if ($_GET['issuetopic']) {
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
}
  else {
    $resultArray = getAllBasicData();
}

foreach ($resultArray as $row) {
echo "<tr>
        <td><a href=createstory1.php?id=" . urlencode($row['fid']) . ">" . 
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
        "<td><a href=preproduction/impact_team.php?id=" . urlencode($row['fid']) .">" . 
        "Create Impact" . "</a></td></tr>";
        }

?>
</table>




</body>
</html>