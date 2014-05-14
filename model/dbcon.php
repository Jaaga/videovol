<?php
function dbopen(){
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="videovol"; // Database name 

	
	$db= new mysqli($host, $username, $password, $db_name);
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	return($db);
}


function close(){
	mysqli_close($db);
	}

?>
