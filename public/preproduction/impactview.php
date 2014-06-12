<?php
include ('../../model/dbcon.php');
$db=dbopen();
include ('../header.php');
?>
<form method="get" action="../index.php">
    
</form>
<table class="table table-hover">
<?php
echo "<thead>
<tr>
<th>Unique No.</th>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
<th>Topic</th>
<th>Mentor</th>
<th>Video Treatment</th>
<th>Shoot Plan</th>
<th>Impact Flow</th>
</tr>";
$statusedit= "select * from storytrack where impactpossible ='yes' ";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['mentor'] . "</td>";
  echo "<td>" . $row['videotreatment'] . "</td>"; 
  echo "<td>" . $row['shootplan'] . "</td>";   
  echo "<td><a href=\"../preproduction/impact_team.php?id=$row[uniquenumber]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}



?>
</table>
