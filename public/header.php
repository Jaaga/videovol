<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>VV Workflow Tracker</title>
<link href="./main.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="script.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="buttons/css/buttons.css">
<link rel="stylesheet" href="./jqueryui/css/ui/jquery-ui.css" />
<style>
  .form-color{
    background-color:#e7e6dd;
;

  }


</style>
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
    var date = $('#impactMonthOrYearOfImpactDatepick').datepicker({ dateFormat: 'yy-mm-dd' }).val(); //currently placed in story-and-impact-tracker.php (recently-Nov-2014)
    var date = $('#dateFootageReceivedBySc').datepicker({ dateFormat: 'yy-mm-dd' }).val(); //currently placed in story-and-impact-tracker.php (recently-Nov-2014)
    var date = $('#dateFootageReceivedByScForReview').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('.datepick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#dateStoryPitched').datepicker({ dateFormat: 'yy-mm-dd' }).val();//in newStoryView.php
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

//This is from story-and-impact-tracker.php
// which displays a text box when a particular select option is selected

  
    function showOther(fieldObj, otherFieldID)
        {
                    
          var fieldValue = fieldObj.options[fieldObj.selectedIndex].value;
          var otherFieldObj = document.getElementById(otherFieldID);

          otherFieldObj.style.visibility = (fieldValue=='other') ? '' : 'hidden';

          return;
        }
//------------------------------------------------------



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

