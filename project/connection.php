<?php
$host="localhost";
$user="root";
$pass="";
$db="movies";//database name
$connect=mysqli_connect($host,$user,$pass);
$connection=mysqli_select_db($connect,$db);
?>
