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
<form action="signup.php" method="post">
	<b> SIGN-UP </b><br><br>
	<select name="signupcategory">
		<option value="ccmentor">CC MENTOR</option>
		<option value="Junioreditor">JUNIOR EDITOR</option>
		<option value="Senioreditor">SENIOR EDITOR</option>
		<option value="Projectmanager">PROJECT MANAGER</option>
	</select><br><br>
	Name :<input type = "text" name = "signupname"/></br><br>
	Login-id :<input type = "text" name = "signuplogin"/></br><br>
	Password :<input type = "password" name = "signuppassword"/></br><br>
	<input type = "submit" value = "Sign-up"/><br><br>
</form>
</div>
</body>
</html>	
?>
