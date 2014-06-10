<?php
include ('../../model/dbcon.php');
$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"
echo "<table border='1'>
<tr>
<th>uniqueno</th>
<th>ccname</th>
<th>state</th>
<th>receiveddate</th>
<th>issuetopic</th>
<th>mentor</th>
<th>videotreatment</th>
<th>shootplan</th>
<th>impactflow</th>
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


echo "</table>";
?>
