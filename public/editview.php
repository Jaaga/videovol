<?php
include_once ('../model/PostDB.php');
include_once ('header.php');
include ('../../controller/editorcontroller.php')


//$data = "select * from storytrack where datereceived = '1986-12-23'"
?>

<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->

    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-primary">Editor View</a></li>
        <li><a href="senioreditorview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>

<table class="table">
<thead>
<tr>
<th>Unique Number</th>
<th>Received for Editing</th>
<th>Editor</th>
<th>Editing Completed</th>
<th>Subtitling Status</th>
<th>Complete Video Sent</th>
<th>Notes</th>
</tr>
</thead>
<?php 

$editordata = getEditorData();
foreach($editordata as $row)
{ 
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ; 
  echo "<td>" . $row['editreceived'] . "</td>"; 
  echo "<td>" . $row['editor'] . "</td>";
  echo "<td>" . $row['editcomplete'] . "</td>"; 
  echo "<td>" . $row['subtitlestatus'] . "</td>";   
  echo "<td>" . $row['videosent'] . "</td>";  
  echo "<td>" . $row['editnotes'] . "</td>";  
  echo "<td><a href='editor.php?un=". $row['uniquenumber']."' ><input type='submit' value='Edit' /></a></td>";
  echo "</tr>";
}

echo "</table>";
?>

<?php 
    include_once ('footer.php');
?>
