<?php
include '../model/dbcon.php';
$db=dbopen();
$category=$_POST['category'];
$loginid=$_POST['login'];
$password=$_POST['password'];
$query = "SELECT * FROM LOGIN WHERE loginid = '$login' AND password = '$password'";
$login = $db->query($query);
$categ = mysqli_fetch_array($login);
if(!$login)
{
	echo "LOGIN not successful";
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