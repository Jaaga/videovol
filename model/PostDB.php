 <?php include_once('../model/dbcon.php');

function getJuniorEditorDataByUniqueNumber($uniquenumber) {
    $sql = "select uniquenumber, footagereceived , wherereceived, reviewedby, seq, broll," .
    	   " fint, vo, ptc, cta, vd, translation from storytrack where uniquenumber = '" . 
    	   $uniquenumber . "'";
   	echo $sql;
 	$array = getAsAssocArray($sql);
 	echo "\nreviewed by: " . $array['reviewedby'];
}

function getJuniorEditorData() {
	$sql ="select uniquenumber, footagereceived , wherereceived, reviewedby, seq, broll," .
	      " fint, vo, ptc, cta, vd, translation, paymentapproved, approvedon from posttrack";
	return getAs2DArray($sql);
}

function addJuniorEditorData($ccname, $state, $dateReceived, $issue, $story, $uniquenumber, 
				  $storydate, $ccpair, $program, $mentor, $iutopic, $videotreatment,
				  $shootplan, $impactpossible) {
	$sql = "insert into storytrack(fid,ccname,state,receiveddate,issuetopic,storydescription,".
		    "uniquenumber,dateofstory,ccpair,program,mentor,iutopic,videotreatment,shootplan,".
		    "impactpossible) " .
			"values (UUID(),'" . $ccname . "','" . $state . "','" . $dateReceived . "','" . 
			$issue . "','" . $story . "','" . $uniquenumber . "','" . $storydate . "','" . 
			$ccpair . "','" . $program . "','" . $mentor . "','" . $iutopic . "','" . 
			$videotreatment . "','" . $shootplan . "','" . $impactpossible ."')";
	$db=dbopen();
	mysqli_query($db, $sql);
	mysqli_close($db);
}

function juniorEditorUpdate($uniquenumber, $footagereceived, $wherereceived, $reviewedby, 
							$seq, $broll, $fint, $vo, $ptc, $cta, $vd, $translation, $paymentapproved, 
							$approvedon) {
	
	$sql = "update posttrack set footagereceived = '" . $footagereceived .
		   "', wherereceived='" . $wherereceived . "',reviewedby='" . $reviewedby .
		   "', seq='" . $seq . "', broll='" . $broll . "', fint='" . $fint . 
		   "',vo='" . $vo . "',ptc='" . $ptc . "',cta='" . $cta . "',vd='" . $vd .
		   "',translation='" . $translation . "' where uniquenumber = '" . $uniquenumber . "'";
	$db = dbopen();
	$result= $db->query($sql);
	mysqli_close($db);
	return $result;
}

?>