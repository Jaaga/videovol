
<form action="importPost.php" method="post" enctype="multipart/form-data">
    Select Post Production CSV file:
    <input type="file" name="post">
    <input type="submit" name="upload">
</form>

<?php
if (!isset($_POST['upload'])) {
	return;
}
echo "<h1>POST</h1>";
if (move_uploaded_file($_FILES['post']['tmp_name'], "post.csv")) {
    echo "The file ".  basename( $_FILES['post']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the post csv file, please try again!";
}

echo "<h1>READ CSV update DB</h1>";
$db = new mysqli("localhost", "root", "123", "videovol");
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$row = 1;
function updateSQL($field, $value) {
	if (!empty($value)) return " $field = '$value', ";
}

 if (($handle = fopen("post.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 10000, ",", '"')) !== FALSE) {
   		$uid = $data[0];
    	if ($uid != "Unique ID") {
    		$result = $db->query("insert into tracker (uid) values ('$uid')");
	    	if ($result === TRUE) {
	    		echo "created new uid in db - $uid<br>";
		    	$result->close();
	    	}

	    	$sql = "update tracker set " . updateSQL("ccname", $data[1]) . 
	    			updateSQL("state", $data[2]) .
					updateSQL("footageinstate", $data[3]) . 
					updateSQL("footagefromstate", $data[4]) .
	    			updateSQL("editedvideofromstate", $data[5]) .
	    			updateSQL("roughcutdate", $data[6]) .
	    			updateSQL("editdate", $data[7]) .
	    			updateSQL("issue", $data[8]) .
	    			updateSQL("description", $data[9]) .
	    			updateSQL("videofoldertitle", $data[10]) .
	    			updateSQL("roughcutreview", $data[11]) .	
	    			updateSQL("finalvideoreview", $data[13]) .
	    			updateSQL("youtubedate", $data[14]) .
	    			updateSQL("iupublishdate", $data[14]) .
	    			updateSQL("youtubeurl", $data[16]) .
	    			updateSQL("videotitle", $data[17]) .
	    			updateSQL("bonus", $data[18]) .
	    			updateSQL("subtitleneeded", $data[19]) .  // in db change this to hassubtitles
	    			updateSQL("secondaryiuissue", $data[20]) .
		  			updateSQL("storytype", $data[21]);
			if (empty($data[12]))
		  		$sql = substr($sql, 0, -2); // strip the final comma
		  	else
				$sql = $sql . "finalvideorating = $data[12]"; // no '' on INT field

			$sql = $sql . " where uid = '$uid'";
	    	echo 'original update sql: ' . $sql . "<br>";	    	
    		$result = $db->query($sql);
    		if ($result) {
    			$result->close();
    		} else {
	    		echo "failed to update $uid <br>";
        		printf("Error: %s\n<br>", $db->error);
    		}
    		echo "<p>";
	    } // not header (UniqueId)
    }
    fclose($handle);
    mysqli_close($db);
}
?>



