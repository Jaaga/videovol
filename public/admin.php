<?php
if (isset($_GET['user'])) {
    include_once("../controller/UserController.php");
}

include_once("../model/UserDB.php");
$resultArray = getUsers();

foreach ($resultArray as $row) {
	echo $row['user'] . "  " . $row['role'] . "\r\n<br>";
}
?>

<form action=admin.php>
<input type=text name=user><br>
	<select name="role">
		<option value="ccmentor">CC MENTOR</option>
		<option value="Junioreditor">JUNIOR EDITOR</option>
		<option value="Senioreditor">SENIOR EDITOR</option>
		<option value="Projectmanager">PROJECT MANAGER</option>
	</select><br><br>
<input type=password name=pwhash><br>
<input type=submit>
</form>

