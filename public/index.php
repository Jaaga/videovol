<?php
include_once("../model/StoryDB.php");

if (isset($_POST['login'])) {
    include_once("../controller/UserController.php");
} else if (isset($_GET['search'])) {
    include_once("../controller/SearchController.php");
    // $resultArray gets set by SearchController
} else if(isset($_GET['action'])) {
    include_once("../controller/StoryController.php");
}
$resultArray = getAllBasicData();

include_once("header.php");

?>
<br>
<div><!-- container for advanced search -->
    <table class="table table-bordered">
        <form method="GET" action="index.php">
             <tr><td valign="top"><label>Search : </label></td>
             <td>
                <select name="ccname">
                    <option value="1">CCname</option>
                        <?php foreach(getCCNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                        ?>
                </select>
                </td>

    
                <td valign="top">
                    <select name="state">
                        <option value="1">State</option>
                             <?php   foreach(getStates() as $state) 
                            echo '<option value="'.$state.'">'.$state.'</option>';
                            ?>
                    </select>
                </td>
        
                <td valign="top">
                    <select name="issue"><option value="1">Issue</option>'; 
                        <?php foreach(getIssues() as $issue) 
                            echo '<option value="'.$issue.'">'.$issue.'</option>';
                        ?>
                    </select>
                </td>

         
                <td valign="top">From:<input type="text" name="fromdate" class="datepick"></td>
                <td valign="top">To:<input type="text" name="todate" class="datepick"></td>
                <td><input type="submit" name="search" value="Search" /></td>

            </tr>
    
        </form>
    </table>
</div>
<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->

    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-primary">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditorview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><a href="storyeditor.php" class="button button-rounded button-flat-highlight" style="margin-left:3em;">New Story</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>
  


<!--
<div class="login">
<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
</div>
<div class="user">
<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
</div>
-->

<table class="table table-hover">
    <thead><tr><th></th><th>Unique Number</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><th>Impact / Footage</th><tr>
    </thead>

<?php

foreach ($resultArray as $row) {
	echo "<tr>
	    <td><a href=storyeditor.php?un=" . urlencode($row['uniquenumber']) . ">" . 
	    "Edit Story" . "</a></td>
	    <td>". $row['uniquenumber'] . "</td>" . 
	    "<td><a href=index.php?search=true&ccname=" . urlencode($row['ccname']) . ">" .
	    $row['ccname'] . "</a></td>" .
	    "<td><a href=index.php?search=true&state=" . urlencode($row['state']) . ">" .
	    $row['state'] . "</a></td>" .
	    "<td><a href=index.php?search=true&issue=" . urlencode($row['issuetopic']) . ">" .
	    $row['issuetopic'] . "</a></td> 
	    <td>" .$row['receiveddate'] . "</td> 
	    <td>" .$row['storydescription'] . "</td>" .
	    "<td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
	    $row['stage'] . "</a></td>
	    <td>";

	if ($row['impactpossible']=="Yes") {
		echo "<a href=impacteditor.php?un=" . urlencode($row['uniquenumber']) .
			 ">Impact</a><br>";
	} 

	echo "<a href=junioreditor.php?un=" . urlencode($row['uniquenumber']) .">" . 
	        	"Footage" . "</a></td></tr>";
}
?>
