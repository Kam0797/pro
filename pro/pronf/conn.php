<?php 
//echo phpinfo();

error_reporting(E_ALL);
ini_set('display_errors',1);
//echo "no";
//connecting to MySQL
$conn=mysqli_connect('localhost','nou','x123','samplenf');
//var_dump($conn);
if (mysqli_connect_error()==true) {
   print("Connect failed: ");
   exit();
}
echo ".conn<hr>";
//else
//{echo "success<br>";}   just chkin'





/*$name=1;
$email=2;
$sql = "INSERT INTO USERS(name, email) VALUES(".$name.",".$email.")";
var_dump($sql);*/




?>
