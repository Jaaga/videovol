<?php
include_once ('../model/PostDB.php');
include_once ('header.php');
include_once ('../controller/SeniorEditorController.php');
?>

<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->

    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditorview.php" class="button button-rounded button-flat-primary">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>

<table class="table">
<thead>
<tr>
<th>Unique Number</th>
<th>Received in Goa</th>
<th>Subtitling Required</th>
<th>Subtitling Completed On</th>
<th>Cleaning Required</th>
<th>Cleaning Completed On</th>
<th>Feedback</th>
<th>Notes</th>
<th>Uploaded On</th>
<th>Published On</th>
<th>Publish Platform</th>
<th><!-- edit --></th>
</tr>
</thead>

<?php 
$senioreditordata = getSeniorEditorData();
foreach($senioreditordata as $row)
{
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ; 
  echo "<td>" . $row['goareceived'] . "</td>";
  echo "<td>" . $row['subtitlerequired'] . "</td>";
  echo "<td>" . $row['subtitledone'] . "</td>"; 
  echo "<td>" . $row['cleaningrequired'] . "</td>"; 
  echo "<td>" . $row['cleaningdone'] . "</td>";
  echo "<td>" . $row['feedback'] . "</td>"; 
  echo "<td>" . $row['seniornotes'] . "</td>";   
  echo "<td>" . $row['uploaded'] . "</td>";   
  echo "<td>" . $row['published'] . "</td>";   
  echo "<td>" . $row['publishplatform'] . "</td>";   
  echo "<td><a href=\"senioreditor.php?un=" . $row['uniquenumber'] . 
       "\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}

echo "</table>";
?>

<?php 
    include_once ('footer.php');
?>
