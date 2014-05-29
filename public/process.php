<?php
include '../model/dbcon.php';
$db=dbopen();
$category=$_POST['category'];
$loginid=$_POST['login'];
$password=$_POST['password'];
//var_dump($_POST);
//echo $loginid;
//echo $password;
$quer = "SELECT * FROM LOGIN WHERE loginid='$loginid' and password='$password'";
$new = $db->query($quer);
echo $new;
echo '123';
//$log = mysqli_query($quer);
//$count = mysql_num_rows($log);
if(!$new)
{
	
	echo "LOGIN not successful";	
}
/*elseif ($category=='ccmentor') {
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
}*/
?>