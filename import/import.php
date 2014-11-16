
<form action="import.php" method="post" enctype="multipart/form-data">
    Select CSV file:
    <input type="file" name="upload">
    Select TYPE:
    <select name=type>
    	<option value=post>Post Production Tracker</option>
    	<option value=story>Stroy Tracker</option>
    </select>	
    <input type="submit">
</form>

<?php

function dbopen() {
	return new mysqli("localhost", "root", "123", "videovol");
	if ($db->connect_errno) {
	    printf("Connect failed: %s\n", $db->connect_error);
	    exit();
	}
}

function insertUID($db, $uid) {
	$result = $db->query("insert into tracker (uid) values ('$uid')");
	if ($result === TRUE) {
		echo "created new uid in db - $uid<br>";
	}
}

function updateSQL($field, $value) {
	if (!empty($value)) return " $field = '$value', ";
}

function updatePostSQL($data) {
	$sql = "update tracker set " . updateSQL("ccname", $data[1]) . 
			updateSQL("state", $data[2]) .
			updateSQL("footageinstate", $data[3]) . 
			updateSQL("footagefromstate", $data[4]) .
			updateSQL("editedvideofromstate", $data[5]) .
			updateSQL("roughcutdate", $data[6]) .
			updateSQL("editdate", $data[7]) .
			updateSQL("issue", $data[8]) .
			updateSQL("description", $data[9]) .
			updateSQL("videofoldertitle", $data[10]) .  // K
			updateSQL("roughcutreview", $data[11]) .	
			updateSQL("finalvideorating", $data[12]) .
			updateSQL("finalvideoreview", $data[13]) .
			updateSQL("youtubedate", $data[14]) .
			updateSQL("iupublishdate", $data[15]) .
			updateSQL("youtubeurl", $data[16]) .
			updateSQL("videotitle", $data[17]) .
			updateSQL("bonus", $data[18]) .
			updateSQL("subtitleneeded", $data[19]) .  // in db change this to hassubtitles
			updateSQL("secondaryiuissue", $data[20]) .
  			updateSQL("storytype", $data[21]);
  	return substr($sql, 0, -2); // remove trailing comma
}

if (!isset($_FILES['upload'])) {
	echo "!upload";
	return;
}

if (move_uploaded_file($_FILES['upload']['tmp_name'], "upload.csv")) {
    echo "The file ".  basename( $_FILES['upload']['name']). 
    " has been uploaded";
} else {
    echo "There was an error uploading the csv file, please try again!";
    return;
}

echo "<h1>READ CSV update DB</h1>";

$row = 1;
$db = dbopen();

if (($handle = fopen("upload.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 10000, ",", '"')) !== FALSE) {
    	$num = count($data);
    	echo $num;
    	$uid = $data[0];
    	if ($uid[2] != '_') {
    		echo "$row malformed uid - $uid. skipping<p>";
    		$row++;
    		continue;
    	}
    	if ($_POST['type'] == 'post') {
	        if ($num != 22) {
	        	echo "problem parsing line $row. skipping.";
	        	$row++;
			} else {
				insertUID($db, $uid);
				$sql = updatePostSQL($data);
			}    		
    	}
    	$sql = $sql . " where uid = '$uid'";
    	echo $row . " | " . $sql . "<p>";
		$result = $db->query($sql);
		if (!$result) {
    		echo "failed to update $uid <br>";
    		printf("Error: %s\n<br>", $db->error);
		}
    }
    fclose($handle);
    mysqli_close($db);
}
?>



