<?php include_once('../model/dbcon.php');

function getUsers() {
	$sql = "select user, role from users";
	return getAs2DArray($sql);	
}

function addUser($user, $role, $pwhash) {
	$sql = "insert into users values('" . $user . "','" . $role . "','" . $pwhash . "')";
	$db=dbopen();
	mysqli_query($db, $sql);
	mysqli_close($db);
}

function getRole($user, $pwhash) {
	$sql = "select role from users where user = '" . $user . "'";" //' and pwhash = '" . $pwhash . "'";
	$db = dbopen();
	$role = mysqli_fetch_assoc(mysqli_query($db, $sql))['role'];
	echo "role: " . $role;
	if ($role)
		echo "<br>logged in";
	else
		echo "<br>bad login";
	return $role;
}

?>