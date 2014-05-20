<?php
include'../model/dbcon.php';
$db=$dbopen();
echo "<table border='1'>
<tr>
<th></th>
<th>state</th>
<th>receiveddate</th>
<th>issuetopic</th>
<th>qualitycheck</th>
</tr>";
$toedit= "select fid,ccname , state , receiveddate , issuetopic from storytrack where seq IS NULL";
$result = $db->query($toedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td><a href=\"editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>


?>