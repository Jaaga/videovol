<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>VV Workflow Tracker</title>
<link href="./main.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="script.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="buttons/css/buttons.css">
<link rel="stylesheet" href="./jqueryui/css/ui/jquery-ui.css" />
<script src="./jqueryui/js/jquery.js"></script>
<script src="./jqueryui/js/jquery-ui.min.js"></script>
<script>
  $(function() {
  var date = $('#editRecievedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#editCompletedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#videoSentDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#footageReceivedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#approvedOnDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#editMonthDate').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#dateReceivedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#dateOfStoryDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();

    var date = $('.datepick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});
  $(function() {
var date = $('#datepick1').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

$(function() {
var datepick = $('#datepick2').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

$(function() {
var date = $('#datepick3').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});
</script>
</head>
<body>
<header>
	<div class="nav">
		<a href="index.php"><h1>VideoVolunteers</h1></a>
		<a href="index.php"><h4>Home Page</h4></a>
		<!--<a href="login.php"><h3>Log-in/Sign-up</h3></a>-->

	</div>
</header>

<!--  <div>container for advanced search
<table>
   <form method="GET" action="index.php">
   
    <tr><td valign="top"><label>Search : </label><select name="ccname"><option value="1">CCname</option>
<?php    //foreach(getCCNames() as $ccname) 
          // echo '<option value="'.$ccname.'">'.$ccname.'</option>';
?>
   </select></td>
   
<td valign="top"><select name="state"><option value="1">State</option>
<?php   //foreach(getStates() as $state) 
          // echo '<option value="'.$state.'">'.$state.'</option>';
?>
   </select></td>
       
<td valign="top"><select name="issue"><option value="1">Issue</option>'; 
<?php   //  foreach(getIssues() as $issue) 
           //echo '<option value="'.$issue.'">'.$issue.'</option>';
?>
</select></td>

        
       <td valign="top">From:<input type="text" name="fromdate" id="dateSearchFrom"></td>
       <td valign="top">To:<input type="text" name="todate" id="searchToDate"></td>
       <td><input type="submit" name="search" value="Search" /></td>
       <td><input type="submit"></td>
   
   </form>
</table>
</div> -->


<!-- <div class="stages"  > button tabs for different views
<br>
    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>
        <li><a href="impactview1.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><a href="storyeditor.php" class="button button-rounded button-flat-primary">Create New Story</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>
   -->
    

