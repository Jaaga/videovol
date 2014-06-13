<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');
include ('index.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"
$ccnam = $_post['ccname'];
$stat = $_post['state'];
$issuetopi = $_post['issuetopic'];
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
if ($ccnam == "unselected" and $stat == "unselected" and $issuetopi = "unselected") {
  echo "choose atleast one field";
}
else if ($ccnam == "unselected" and $stat = "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE issuetopic = '$issuetopi'";
}

else if ($ccnam == "unselected" and $issuetopi = "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE state = '$stat'";
}
else if ($issuetopi == "unselected" and $stat = "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE ccname = '$ccnam'";
}
else if ($ccnam == "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE state = '$stat' AND issuetopic = '$issuetopi'";
}
else if ($stat == "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE ccname = '$ccnam' AND issuetopic = '$issuetopi'";
}
else if ($issuetopi == "unselected") {
  $statusedi = "SELECT * FROM storytrack WHERE state = '$stat' AND ccname = '$ccnam'";
}
else {
  $statusedi = "SELECT * FROM storytrack WHERE ccname = '$ccnam' AND state = '$stat' AND issuetopic = '$issuetopi'";  
}
  $result = $db->query($statusedi);
//if (!$result) {
//  echo "no matching data";
//}
//else {
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
}//}

?>
</table>