<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"
$ccname = $_POST['ccname'];
$state = $_POST['state'];
$issue = $_POST['issue'];

if ($ccname == "1" && $state == "1" && $issue == "1") {
  echo "choose atleast one field";
}
else if ($ccname == "1" && $state == "1") {
  $status = "SELECT * FROM storytrack WHERE issuetopic = '$issue'";
}

else if ($ccname == "1" && $issue == "1") {
  $status = "SELECT * FROM storytrack WHERE state = '$state'";
}
else if ($issue == "1" && $state == "1") {
  $status = "SELECT * FROM storytrack WHERE ccname = '$ccname'";
}
else if ($ccname == "1") {
  $status = "SELECT * FROM storytrack WHERE state = '$stat' AND issuetopic = '$issue'";
}
else if ($state == "1") {
  $status = "SELECT * FROM storytrack WHERE ccname = '$ccname' AND issuetopic = '$issue'";
}
else if ($issue == "1") {
  $status = "SELECT * FROM storytrack WHERE state = '$state' AND ccname = '$ccname'";
}
else {
  $status = "SELECT * FROM storytrack WHERE ccname = '$ccname' AND state = '$state' AND issuetopic = '$issue'";  
}

?>
<table class="table table-hover">
<tr>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
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
$result = $db->query($status);
//$result = mysql_query($status);
//if (!$result) {
//  echo "sdasdsd";
//}
//echo "No matches found";
//else {
$i = 0;
while($row = mysqli_fetch_array($result)) {
      $i = $i + 1;
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
if ($i == 0) {
  echo "<h1>No matches found</h1>";
}
//}//}

?>
</table>