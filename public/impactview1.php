<?php
include_once("header.php");
include_once("../model/ImpactDB.php");
?>

<!--<h2>Summary <a href="table_bootstrap.php" class="button button-rounded button-flat-primary">View All Data</a></h2>-->
<table class="table table-hover"><thead><tr><th>Edit</th><th>UniqueNumber</th><th>CCName</th><th>State</th><th>Received Date</th><th>Issue Topic</th><th>Story Description</th><th>Targetofficial</th><th>Desiredchange</th><th>CCImpactplan</th><th>Impactprocess</th><tr>
</thead>

<?php
$resultArray = getStoryAndImpact();
foreach ($resultArray as $row) {
echo "<tr>
        
       <td><a href=preproduction/impact_team.php?id=" . urlencode($row['uniquenumber']) . ">" . 
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
<link rel="stylesheet" href="./jqueryui/css/ui/jquery-ui.css" />
<script src="./jqueryui/js/jquery.js"></script>
<script src="./jqueryui/js/jquery-ui.min.js"></script>
<script>
 $(function(){
        $("#dateSearchFrom").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#searchToDate").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#searchToDate").datepicker( "option", "minDate", minValue );
        })
    });
</script>
</body>
</html>