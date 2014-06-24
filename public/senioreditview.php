<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"?>
<table class="table table-hover">
<tr>
<th>ccname</th>
<th>state</th>
<th>receiveddate</th>
<th>issuetopic</th>
<th>seq</th>
<th>broll</th>
<th>fint</th>
<th>vo</th>
<th>ptc</th>
<th>cta</th>
<th>vd</th>
<th>translation</th>
<th>statusedit</th>
</tr>
<?php
$statusedit= "select * from storytrack where seq IS NOT NULL and publishdate IS NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['seq'] . "</td>"; 
  echo "<td>" . $row['broll'] . "</td>";
  echo "<td>" . $row['fint'] . "</td>"; 
  echo "<td>" . $row['vo'] . "</td>";
  echo "<td>" . $row['ptc'] . "</td>"; 
  echo "<td>" . $row['cta'] . "</td>";
  echo "<td>" . $row['vd'] . "</td>";
  echo "<td>" . $row['translation'] . "</td>";     
  echo "<td><a href=\"senior-editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}