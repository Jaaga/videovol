<?php
include_once('../model/UserDB.php');

if (isset($_POST['login'])) {
	echo "ROLE: " . getRole($_POST['user'], password_hash($_POST['pwhash'], PASSWORD_DEFAULT));
} else 
//echo "add user: " . $_GET['user'] . " role: " . $_GET['role'] . " hash: " . password_hash($_GET['pwhash'], PASSWORD_DEFAULT) . "\r\n<br>";
addUser($_GET['user'], $_GET['role'], password_hash($_GET['pwhash'], PASSWORD_DEFAULT));
?>
