
<?php

$host="localhost";
$user="u712415935_localhost";
$password="Admin@123";
$database="u712415935_lotus";
$con=mysqli_connect($host,$user,$password,$database);
if (!$con)
{
    die ('could not connect'.mysql_error());
} 

?>