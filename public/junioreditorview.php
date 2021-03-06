
<?php
include_once ('../model/PostDB.php');
include_once ('header.php');
include ('../controller/JuniorEditorController.php');

if(isset($_GET['page'])){ 
    $page = $_GET['page']; 
} 
else { 
    $page = 1;
};
$num_rec_per_page = 8;
$start_from = ($page -1) * $num_rec_per_page;
$total_pages = footAndJuniorPagi($num_rec_per_page);
//$data = "select * from storytrack where datereceived = '1986-12-23'"?>
<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->
<br>
    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-primary">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditorview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview.php" class="button button-rounded button-flat-action">Impact View</a></li>
        <li><a href="junioreditor.php" class="button button-rounded button-flat-highlight" style="margin-left:3em;">New Footage</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>
<table class= "table">
<tr>
<th>Unique Number</th>
<th>Footage Received</th>
<th>Where Received</th>
<th>Reviewed By</th>
<th>SEQ</th>
<th>B-Roll</th>
<th>Fint</th>
<th>VO</th>
<th>PTC</th>
<th>CTA</th>
<th>VD</th>
<th>Translation</th>
<th>Approved For Payment</th>
<th>Approved On</th>
</tr>
<?php
$jdata = getJuniorEditorData($num_rec_per_page, $start_from);
foreach($jdata as $row)
{
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ; 
  echo "<td>" . $row['footagereceived'] . "</td>";
  echo "<td>" . $row['wherereceived'] . "</td>"; 
  echo "<td>" . $row['reviewedby'] . "</td>"; 
  echo "<td>" . $row['seq'] . "</td>"; 
  echo "<td>" . $row['broll'] . "</td>"; 
  echo "<td>" . $row['fint'] . "</td>"; 
  echo "<td>" . $row['vo'] . "</td>";
  echo "<td>" . $row['ptc'] . "</td>"; 
  echo "<td>" . $row['cta'] . "</td>";  
  echo "<td>" . $row['vd'] . "</td>"; 
  echo "<td>" . $row['translation'] . "</td>"; 
  echo "<td>" . $row['paymentapproved'] . "</td>"; 
  echo "<td>" . $row['approvedon'] . "</td>"; 
  echo "<td><a href='junioreditor.php?un=" . $row['uniquenumber'] . "'><input type='submit' value='Edit' /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>

<div class = "pagination-icon" style="text-align:center;">
<?php echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            
            echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=".$i."'>".$i."</a> "; 
            
} 
echo "<a href='" .htmlentities($_SERVER['PHP_SELF']). "?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>
</div>
</body>
</html>
