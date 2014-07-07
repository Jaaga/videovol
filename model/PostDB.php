 <?php include_once('../model/dbcon.php');

function getJuniorEditorDataByUniqueNumber($uniquenumber) {
    $sql = "select footagereceived , wherereceived, reviewedby, seq, broll," .
    	   " fint, vo, ptc, cta, vd, translation from posttrack where uniquenumber = '" . 
    	   $uniquenumber . "'";
 	$array = getAsAssocArray($sql);
 	return $array;
}

function getEditorDataByUniqueNumber($uniquenumber) {
    $sql = "select uniquenumber, editreceived, editor, editcomplete, 
			subtitlestatus, videosent, editnotes from posttrack where uniquenumber = '" . 
    	   $uniquenumber . "'";
   	echo $sql;
 	$array = getAsAssocArray($sql);
 	echo "\neditor is: " . $array['editor'];
 	return $array;
}

function getSeniorEditorDataByUniqueNumber($uniquenumber) {
    $sql = "select goareceived , subtitlerequired, subtitledone, cleaningrequired, cleaningdone," .
    	   " feedback, seniornotes, uploaded, published, publishplatform from posttrack where uniquenumber = '" . 
    	   $uniquenumber . "'";
   	echo $sql;
 	$array = getAsAssocArray($sql);
 	return $array;
}

function getJuniorEditorData() {
	$sql ="select uniquenumber, footagereceived , wherereceived, reviewedby, seq, broll," .
	      " fint, vo, ptc, cta, vd, translation, paymentapproved, approvedon from posttrack";
	return getAs2DArray($sql);
}

function getEditorData() {
	$sql ="uniquenumber, editreceived, editor, editcomplete, 
			subtitlestatus, videosent, editnotes from posttrack";
	return getAs2DArray($sql);
}

function getSeniorEditorData() {
	$sql ="select uniquenumber, goareceived, subtitlerequired, subtitledone, cleaningrequired,".
		  "cleaningdone, feedback, seniornotes, uploaded, published, publishplatform " .
		  "from posttrack";
	return getAs2DArray($sql);	
}

function juniorEditorAddOrUpdate($uniquenumber, $footagereceived, $wherereceived, $reviewedby, 
							$seq, $broll, $fint, $vo, $ptc, $cta, $vd, $translation, $paymentapproved, 
							$approvedon) {
	$sql =  "insert into posttrack (uniquenumber, footagereceived, wherereceived, reviewedby, " .
		   	"seq, broll, fint, vo, ptc, cta, vd, translation, paymentapproved, approvedon) values ('".
 			$uniquenumber . "', '" . $footagereceived . "', '" . $wherereceived . "', '" . $reviewedby .
 			"', '" . $seq . "', '" . $broll . "', '" . $fint . "', '" . $vo . "', '" . $ptc . "', '" . 
 			$cta . "', '" . $vd . "', '" . $translation . "', '" . $paymentapproved . "', '" . $approvedon . 
			"') on duplicate key update footagereceived = '" . $footagereceived .
		   "', wherereceived='" . $wherereceived . "',reviewedby='" . $reviewedby .
		   "', seq='" . $seq . "', broll='" . $broll . "', fint='" . $fint . 
		   "',vo='" . $vo . "',ptc='" . $ptc . "',cta='" . $cta . "',vd='" . $vd .
		   "',translation='" . $translation . "', paymentapproved='" . $paymentapproved . 
		   "',approvedon='" . $approvedon . "'";

	$db = dbopen();
	$result= $db->query($sql);
	mysqli_close($db);
	return $result;
}

function editorUpdate($uniquenumber, $editreceived, $editor, $editcomplete, 
					   $subtitlestatus, $videosent, $editnotes) {
	
	$sql = "update posttrack set editreceived = '" . $editreceived .
		   "', editor='" . $editor . "',editcomplete='" . $editcomplete .
		   "', subtitlestatus='" . $subtitlestatus . "', videosent='" . $videosent . 
		   "',editnotes='" . $editnotes . "' where uniquenumber = '" . $uniquenumber . "'";
	$db = dbopen();
	$result= $db->query($sql);
	mysqli_close($db);
	return $result;
}

function seniorEditorUpdate($uniquenumber, $goareceived, $subtitlerequired, $subtitledone, 
							$cleaningrequired, $cleaningdone, $feedback, $seniornotes, $uploaded, 
							$published, $publishplatform) {
	
	$sql = "update posttrack set goareceived = '" . $goareceived .
		   "', subtitlerequired='" . $subtitlerequired . "',subtitledone='" . $subtitledone .
		   "', cleaningrequired='" . $cleaningrequired . "', cleaningdone='" . $cleaningdone . 
		   "', feedback='" . $feedback . "',seniornotes='" . $seniornotes . 
		   "', uploaded='" . $uploaded . "',published='" . $published . 
		   "', publishplatform='" . $publishplatform .
		   "' where uniquenumber = '" . $uniquenumber . "'";
	$db = dbopen();
	$result= $db->query($sql);
	mysqli_close($db);
	return $result;
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






?>