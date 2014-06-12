<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"
echo "<table border='1';>
 
    <tr>
    <th>ccname</th>
    <th>state </th>
    <th>receiveddate</th>
    <th>issuetopic</th>
    <th>storydescription</th>
    <th>seq</th>
    <th>broll</th>
    <th>fint</th>
    <th>vo</th>
    <th>ptc</th>
    <th>cta</th>
    <th>vd</th>
    <th>translation</th>
    <th>paymentstatus</th>
    <th>editstatus</th>
    <th>editedmonth</th>
    <th>notes</th>
    <th>publishplatform</th>
    <th>editor</th>
    <th>editorpayment</th>
    <th>uploaddate</th>
    <th>publishdate</th>
    <th>receivedRO</th>
    <th>receivedHQ</th>
    </tr>
";
$statusedit= "select * from storytrack ";
$result = $db->query($statusedit);

while($row = mysqli_fetch_array($result)) {


  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['storydescription'] . "</td>"; 
  echo "<td>" . $row['seq'] . "</td>"; 
  echo "<td>" . $row['broll'] . "</td>";
  echo "<td>" . $row['fint'] . "</td>"; 
  echo "<td>" . $row['vo'] . "</td>";
  echo "<td>" . $row['ptc'] . "</td>"; 
  echo "<td>" . $row['cta'] . "</td>";
  echo "<td>" . $row['vd'] . "</td>";
  echo "<td>" . $row['translation'] . "</td>";
  echo "<td>" . $row['paymentstatus'] . "</td>";
  echo "<td>" . $row['editstatus'] . "</td>";
  echo "<td>" . $row['editedmonth'] . "</td>";
  echo "<td>" . $row['notes'] . "</td>";
  echo "<td>" . $row['publishplatform'] . "</td>";
  echo "<td>" . $row['editor'] . "</td>";
  echo "<td>" . $row['editorpayment'] . "</td>";
  echo "<td>" . $row['uploaddate'] . "</td>";
  echo "<td>" . $row['publishdate'] . "</td>";
  echo "<td>" . $row['receivedRO'] . "</td>";
  echo "<td>" . $row['receivedHQ'] . "</td>";
 // echo "<td><a href=\"project-manager.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>
 
