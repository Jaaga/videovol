<?php
include_once ('../model/StoryDB.php');
include_once ('header.php');
?>

<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->

    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditview.php" class="button button-rounded button-flat-primary">Senior Editor View</a></li>
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
<th>Upload Date</th>
<th>Publish Date</th>
<th>Recieved at RO</th>
<th>Recieved at HQ</th>
<th>Upload Edit</th>
</tr>
</thead>
<?php 
$senioreditordata = getDataForSeniorEditor();
foreach($senioreditordata as $row)
{
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['uploaddate'] . "</td>"; 
  echo "<td>" . $row['publishdate'] . "</td>";
  echo "<td>" . $row['receivedRO'] . "</td>"; 
  echo "<td>" . $row['receivedHQ'] . "</td>";   
  echo "<td><a href=\"senior-editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}

echo "</table>";
?>

<?php 
    include_once ('footer.php');
?>>
