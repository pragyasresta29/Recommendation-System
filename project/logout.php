<?php
session_start();
session_destroy();
include ("connection.php");
$query="update user set Active=0;";
$rr=mysqli_query($connect,$query);
$result=mysqli_num_rows($rr);
header('Location:index.php');

?>