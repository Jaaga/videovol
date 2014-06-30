<?php include_once('../model/StoryDB.php'); ?>

<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>VV Workflow Tracker</title>
</head>
<link href="./main.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="buttons/css/buttons.css">


<header>
	<div class="nav">
		<a href="index.php"><h1>VideoVolunteers</h1></a>
		<a href="index.php"><h4>Home Page</h4></a>
		<!--<a href="login.php"><h3>Log-in/Sign-up</h3></a>-->

	</div>
</header>

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

         
        <td valign="top">From:<input type="text" name="fromdate" id="dateSearchFrom"></td>
        <td valign="top">To:<input type="text" name="todate" id="searchToDate"></td>
        <td><input type="submit" name="search" value="Search" /></td>
        <!--<td><input type="submit"></td>-->
    
    </form>
</table>
</div>


<div class="stages"> <!-- button tabs for different views -->
<br>
<a href="index.php" class="button button-rounded button-flat-primary">Story View</a>
<a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a>
<a href="editview.php" class="button button-rounded button-flat-action">Editor View</a>
<a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor View</a>
<!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
<a href="impactview1.php" class="button button-rounded button-flat-action">Impact View</a>
<small><a href="viewalldata.php">View All Data</a></small>
<a href="storyeditor.php" class="button button-rounded button-flat-primary">Create New Story</a>
</div>

