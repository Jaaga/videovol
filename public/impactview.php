<?php

include_once("header.php");
include'../controller/ImpactController.php';
include_once("../model/ImpactDB.php");
if(isset($_GET['page'])){ 
    $page = $_GET['page']; 
} 
else { 
    $page = 1;
};
$num_rec_per_page = 1;// declaring number of records to be shown in a page 
$start_from = ($page -1) * $num_rec_per_page;
$total_pages = impactPagi($num_rec_per_page);//function to retrive the number of pages 
?>

<!-- tabs  -->
<div class="stages"  > <!-- button tabs for different views -->

    <ul id="tabs">
        <li><a href="index.php" class="button button-rounded button-flat-action">Story View</a></li>
        <li><a href="junioreditorview.php" class="button button-rounded button-flat-action">Footage Check</a></li>
        <li><a href="editview.php" class="button button-rounded button-flat-action">Editor View</a></li>
        <li><a href="senioreditorview.php" class="button button-rounded button-flat-action">Senior Editor View</a></li>
        <!--<a href="pmview.php" class="button button-rounded button-flat-action">Project Manager View</a>-->
        <li><a href="impactview.php" class="button button-rounded button-flat-primary">Impact View</a></li>
        <li><small><a href="viewalldata.php" style="float:right">View All Data</a></small></li>
    </ul>
</div>

<!--<h2>Summary <a href="table_bootstrap.php" class="button button-rounded button-flat-primary">View All Data</a></h2>-->
<table class="table"><thead><tr><th>Edit</th><th>UniqueNumber</th><th>CCName</th><th>State</th><th>Received Date</th><th>Issue Topic</th><th>Story Description</th><th>Targetofficial</th><th>Desiredchange</th><th>CCImpactplan</th><th>Impactprocess</th><tr>
</thead>

<?php
$resultArray = getStoryAndImpact($num_rec_per_page, $start_from);
foreach ($resultArray as $row) {
echo "<tr>
        
       <td><a href=impacteditor.php?un=" . urlencode($row['uniquenumber']) . ">" . 
        "Edit Impact" . "</a></td> <td>" . 
        $row['uniquenumber'] . "</td> ". 
        "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" .
        $row['ccname'] . "</a></td>" .
        "<td><a href=index.php?state=" . urlencode($row['state']) . ">" .
        $row['state'] . "</a></td>" .
        "<td><a href=index.php?issuetopic=" . urlencode($row['issuetopic']) . ">" .
        $row['receiveddate'] . "</a></td> <td>" .
        $row['issuetopic'] . "</td> <td>" .
        $row['storydescription'] . "</td> <td>" .
        $row['targetofficial'] . "</td> <td>" .
        $row['desiredchange'] . "</td> <td>" .
        $row['ccimpactplan'] . "</td> <td>" .
        $row['impactprocess'] . "</td>" 
        //" <td><a href=index.php?stage=" . urlencode($row['stage']) . ">" .
        //$row['stage'] . "</a></td>"
        //"<td><a href=preproduction/impact_team.php?id=" . urlencode($row['uniquenumber']) .">" . 
        /*"Create Impact" . "</a></td></tr>"*/;
        }

?>

</table>
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
