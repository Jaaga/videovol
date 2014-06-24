<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');

//$data = "select * from storytrack where datereceived = '1986-12-23'"
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
$statusedit= "select * from storytrack where seq IS NOT NULL and publishdate IS NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
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