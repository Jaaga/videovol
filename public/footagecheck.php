<?php
include("header.php");
include("../model/StoryDB.php");
?>

<div class="login">
<a href="login.php" class="button button->rounded button-flat-royal">Login</a>
<a href="signupnewuser.php" class="button button-rounded button-flat-royal">Sign-up</a>
</div>
<div class="user">
<a href="primeuser.php" class="button button-rounded button-flat-royal">Prime User</a>
</div>

<div class="stages">
<br>
<a href="createstory1.php" class="button button-rounded button-flat-action">CreateStory</a>
<a href="login.php" class="button button-rounded button-flat-action">Junior Editor</a>
<a href="login.php" class="button button-rounded button-flat-action">Senior Editor</a>
<a href="login.php" class="button button-rounded button-flat-action">Project Manager</a>
<a href="../public/preproduction/impactview.php" class="button button-rounded button-flat-action">Impact</a>
</div>


<h2>Summary <a href="table_bootstrap.php" class="button button-rounded button-flat-primary">View All Data</a></h2>
<table class="table table-hover"><thead><tr><th>Story ID</th><th>SEQ</th><th>BROLL</th><th>FINT</th><th>VO</th><th>PTC</th><th>CTA</th><th>VD</th><th>TRANSLATION</th><tr>
</thead>
</tr>

<?php
$resultArray = getFootageCheckData();
foreach ($resultArray as $row) {
    echo "<tr>
        <td><a href=createstory1.php?id=" . urlencode($row['fid']) . ">" . 
        "Edit Story" . "</a></td><td>". 
        $row['seq'] . "</a></td>" . 
        "<td><a href=index.php?ccname=" . urlencode($row['ccname']) . ">" .
        $row['broll'] . "</a></td>" .
        "<td><a href=index.php?state=" . urlencode($row['state']) . ">" .
        $row['fint'] . "</a></td>" .
        "<td><a href=index.php?issuetopic=" . urlencode($row['issuetopic']) . ">" .
        $row['vo'] . "</a></td> <td>" .
        $row['ptc'] . "</td> <td>" .
        $row['cta'] . "</td> <td>" .
        $row['vd'] . "</td><td>" . 
        $row['translation'] . "</td></tr>";
}

?>

</table>

