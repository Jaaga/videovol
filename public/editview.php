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
<th>Received for Editing</th>
<th>Editor</th>
<th>Editing Completed</th>
<th>Subtitling Status</th>
<th>Complete Video Sent</th>
<th>Notes</th>
</tr>
</thead>
<?php 

$statusedit= "select * from storytrack where seq IS NOT NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['editreceived'] . "</td>"; 
  echo "<td>" . $row['editor'] . "</td>";
  echo "<td>" . $row['editcomplete'] . "</td>"; 
  echo "<td>" . $row['subtitlestatus'] . "</td>";   
  echo "<td>" . $row['videosent'] . "</td>";  
  echo "<td>" . $row['edtiornotes'] . "</td>";  
  echo "<td><a href=\"editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}

echo "</table>";
?>
