<?php
include '../model/StoryDB.php';
include ('header.php');
?>
<table class="table table-hover">
<thead>
<tr>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
<th>Issue Topic</th>
<th>Payment Status</th>
<th>Edit Status</th>
<th>Edit Month</th>
<th>Notes</th>
<th>Publish Platform</th>
<th>Editor Name</th>
<th>Editor Payement</th>
<th>Status Edit</th>
</thead>
</tr>
<?php 
$rows = getDataForProjectManager();
foreach($rows as $row)
 {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['paymentstatus'] . "</td>"; 
  echo "<td>" . $row['editstatus'] . "</td>";
  echo "<td>" . $row['editedmonth'] . "</td>"; 
  echo "<td>" . $row['notes'] . "</td>";
  echo "<td>" . $row['publishplatform'] . "</td>"; 
  echo "<td>" . $row['editor'] . "</td>";
  echo "<td>" . $row['editorpayment'] . "</td>";    
  echo "<td><a href=\"project-manager.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>
