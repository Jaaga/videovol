
<?php 
include("header.php");
include("../model/StoryDB.php");
?>

<table><tr><th>ID</th><th>CCName</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th></tr>

<?php
$resultArray = getAllBasicData();
foreach ($resultArray as $row) {
		echo "<tr><td>" . $row['fid'] . "</td>" . 
			 "<td><a href=ccnameview.php?ccname=" . $row['ccname'] . ">" . 
			 $row['ccname'] . "</a></td>" .
			 "<td><a href=issueview.php?issue=" . $row['issuetopic'] . ">" .
		     $row['issuetopic'] . "</a></td> <td>" .
		     $row['receiveddate'] . "</td> <td>" .
		     $row['storydescription'] . "</td></tr>";
}

?>
</table>

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
	
	</div>


</body>
</html>
