<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"
$state = $_POST['state'];?>
<table class="table table-hover">
<tr>
<th>CC Name</th>
<th>State</th>
<th>Received on Date</th>
<th>Topic</th>
<th>SEQ</th>
<th>B Roll</th>
<th>Fint</th>
<th>VO</th>
<th>PTC</th>
<th>CTA</th>
<th>VD</th>
<th>Translation</th>
<th>Edit Status</th>
</tr>

<?php
$statusedit= "select * from storytrack where state = '$state'";
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
  echo "</tr>";
}

?>
</table>