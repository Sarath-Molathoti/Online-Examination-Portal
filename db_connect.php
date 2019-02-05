<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_db='online_exam';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
if (mysqli_connect_errno())
{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>