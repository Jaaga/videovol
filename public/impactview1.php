<?php
include("header.php");
include("../model/ImpactDB.php");
?>

<div class="login">
<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
</div>
<div class="user">
<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
</div>

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
</body>
</html>
