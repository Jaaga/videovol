<?php
include '../model/dbcon.php';
$db=dbopen();
$category=$_POST['signupcategory'];
$name=$_POST['signupname'];
$loginid=$_POST['signuplogin'];
$password=$_POST['signuppassword'];
//$story=$_POST['story'];
$signup = "insert into LOGIN(category, name, loginid, password) values ('$category','$name','$loginid','$password')";
$new = $db->query($signup);
if(!$new)
{	
	echo "signup not successful";
}
elseif ($category=='ccmentor') {
	
	header("location:../public/createstory.php");
}
elseif ($category=='Junioreditor') {
	
	header("location:../public/edit.php");
}
elseif ($category=='Senioreditor') {
	
	header("location:../public/senioreditview.php");
}
elseif ($category=='Projectmanager') {
	
	header("location:../public/pmview.php");
}
?>