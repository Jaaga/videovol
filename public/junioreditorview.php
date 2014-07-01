
<?php
include '../model/StoryDB.php';
//include '../model/dbcon.php';
//$db=dbopen();
include ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"?>
<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->
<br>
    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-primary">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview1.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><a href="storyeditor.php" class="button button-rounded button-flat-highlight">Create New Story</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>
<table class= "table table-hover">
<tr>
<th>Unique Number</th>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
<th>Topic</th>
<th>SEQ</th>
<th>B-Roll</th>
<th>Fint</th>
<th>VO</th>
<th>PTC</th>
<th>CTA</th>
<th>VD</th>
<th>Translation</th>
<th>Quality Check</th>
</tr>
<?php
$junioreditorview = getDataForJuniorEditor();
foreach($junioreditorview as $row)
{
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ; 
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
  echo "<td><a href=\"junioreditor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>
</body>

