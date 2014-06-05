<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123"; // Mysql password 
$db_name="videovol"; // Database name 
$tbl_name="LOGIN"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$category=$_POST['category'];
$myusername=$_POST['login']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM $tbl_name WHERE loginid ='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if(!$count){
echo "login not successful";
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