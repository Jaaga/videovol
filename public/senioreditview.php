<?php
include_once ('../model/StoryDB.php');
include_once ('header.php');
?>
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
