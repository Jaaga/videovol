<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');


//$data = "select * from storytrack where datereceived = '1986-12-23'"
?>

<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->
<br>
    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-primary">Editor View</a></li>
        <li><a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview1.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><a href="storyeditor.php" class="button button-rounded button-flat-highlight">Create New Story</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>

<table class="table table-hover">
<thead>
<tr>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
<th>Issue Topic</th>
<th>Received for Editing</th>
<th>Editor</th>
<th>Editing Completed</th>
<th>Subtitling Status</th>
<th>Complete Video Sent</th>
<th>Notes</th>
</tr>
</thead>
<?php 

$statusedit= "select * from storytrack where seq IS NOT NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['editrecieve'] . "</td>"; 
  echo "<td>" . $row['editorName'] . "</td>";
  echo "<td>" . $row['editcomplete'] . "</td>"; 
  echo "<td>" . $row['subtitleStatus'] . "</td>";   
  echo "<td>" . $row['videosent'] . "</td>";  
  echo "<td>" . $row['notes'] . "</td>";  
  echo "<td><a href=\"editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}

echo "</table>";
?>
