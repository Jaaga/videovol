<?php
include_once("../model/StoryDB.php");
$num_rec_per_page = 8;
#mysql_connect('localhost','root','123');
#mysql_select_db('videovol');
if (isset($_POST['login'])) {
    include_once("../controller/UserController.php");
} else if (isset($_GET['search'])) {
    include_once("../controller/SearchController.php");
    // $resultArray gets set by SearchController
} else if(isset($_GET['action'])) {
    include_once("../controller/StoryController.php");
}
if(isset($_GET['page'])){ 
    $page = $_GET['page']; 
} 
else { 
    $page = 1;
};

$start_from = ($page -1) * $num_rec_per_page;

$resultArray = getAllBasicData($num_rec_per_page, $start_from);

include_once("header.php");

?>

<br>
<div><!-- container for advanced search -->
    <table class="table table-bordered">
        <form method="GET" action="index.php">
             <tr><td><label>Search : </label></td>
             <td>
                <select name="ccname" class="form-control form-color">
                    <option value="1">CCname</option>
                        <?php foreach(getCCNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                        ?>
                </select>
                </td>

    
                <td valign="top">
                    <select name="state" class="form-control form-color">
                        <option value="1">State</option>
                             <?php   foreach(getStates() as $state) 
                            echo '<option value="'.$state.'">'.$state.'</option>';
                            ?>
                    </select>
                </td>
        
                <td valign="top">
                    <select name="issue" class="form-control form-color"><option value="1">Issue</option>'; 
                        <?php foreach(getIssues() as $issue) 
                            echo '<option value="'.$issue.'">'.$issue.'</option>';
                        ?>
                    </select>
                </td>

         
                <td valign="top"><input type="text" name="fromdate" class="datepick form-control form-color" placeholder="From (enter Date)"></td>
                <td valign="top"><input type="text" name="todate" class="datepick form-control form-color" placeholder="To (enter Date)"></td>
                <td><input type="submit" name="search" value="Search" class="form-control form-color" /></td>

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
        <li><a href="newStoryView.php" class="button button-rounded button-flat-highlight" style="margin-left:3em;">New Story</a></li>
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
};
?>
</table>
<?php
$total_pages = storyPaginate($num_rec_per_page);  //count number of records
?>
<div class = "pagination-icon" style="text-align:center;">
<?php echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            
            echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=".$i."'>".$i."</a> "; 
            
} 
echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>
</div>
</html>
