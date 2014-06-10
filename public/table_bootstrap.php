<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php') ?> 
<body>


    <table class="table table-hover">

       <?php echo"<thead>

            <tr>

                
				<th>Unique No.</th>
				<th>CC Name</th>
				<th>State</th>
				<th>Received On Date</th>
				<th>Topic</th>
				<th>Story Description</th>
				<th>SEQ</th>
				<th>B-Roll</th>
				<th>Fint</th>
				<th>VO</th>
				<th>PTC</th>
				<th>CTA</th>
				<th>VD</th>
				<th>Translation</th>
				<th>Payment Status</th>
				<th>Edit Status</th>
				<th>Month edited </th>
				<th>Notes</th>
				<th>Publish Platform</th>
				<th>Editor</th>
				<th>Editor Payment</th>
				<th>Upload Date</th>
				<th>Publish Date</th>
				<th>Received RO</th>
				<th>Received HQ</th>


            </tr>

        </thead>";
?>
        <tbody>
<?php

$statusedit= "select * from storytrack ";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
echo"<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ;
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
 echo"</tr>";}
 ?>





        </tbody>

    </table>


</body>
</html>