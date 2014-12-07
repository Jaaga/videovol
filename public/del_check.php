<?php
	include_once('../model/dbcon.php');
	$sql = "select UID,ccname,state,program,iutheme,description,storydate,ccpair,mentor,storytype,shootplan,impactpossible,targetofficial,desiredchange,impactplan from tracker where UID = JH_151;
?>