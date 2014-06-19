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

function close() {
	mysqli_close($db);
}

function getAsAssocArray($sql) {
	$db=dbopen();
	$data = array();
	$result = mysqli_query($db, $sql); // Run the query
	$data = mysqli_fetch_assoc($result);
	return $data;
}

// TODO: understand whether this should be fetch_assoc
function getAs2DArray($sql) {
	$db=dbopen();
	$result = mysqli_query($db, $sql);	

	$rows = array();
	while($row = mysqli_fetch_array($result)) {    	
    	$rows[] = $row;
	}
	return $rows;
}


?>
