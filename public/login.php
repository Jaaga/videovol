<?php
include ('header.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VV Workflow Tracker</title>
</head>
<body>
<div class = "log">
<form action="process.php" method = "post">
	<b> LOGIN </b><br><br>
	<select name="category">
		<option value="ccmentor">CC MENTOR</option>
		<option value="Junioreditor">JUNIOR EDITOR</option>
		<option value="Senioreditor">SENIOR EDITOR</option>
		<option value="Projectmanager">PROJECT MANAGER</option>
	</select><br><br>
	Login-id :<input type = "text" name = "login"/></br><br>
	Password :<input type = "password" name = "password"/></br><br>
	<input type = "submit" value = "Login"/><br><br>
</form>
<a href="signupnewuser.php" class="button button-rounded button-flat-action">Sign-up</a>
</div>

</body>
</html>	

