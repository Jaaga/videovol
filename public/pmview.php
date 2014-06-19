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
$statusedit= "select * from storytrack where seq IS NOT NULL and  paymentstatus IS NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['paymentStatus'] . "</td>"; 
  echo "<td>" . $row['editStatus'] . "</td>";
  echo "<td>" . $row['editMonth'] . "</td>"; 
  echo "<td>" . $row['notes'] . "</td>";
  echo "<td>" . $row['publishPlatform'] . "</td>"; 
  echo "<td>" . $row['editorName'] . "</td>";
  echo "<td>" . $row['editorPayment'] . "</td>";    
  echo "<td><a href=\"project-manager.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>
