
<?php

$host="localhost";
$user="root";
$password="";
$database="lotus";
$con=mysqli_connect($host,$user,$password,$database);
if (!$con)
{
    die ('could not connect'.mysql_error());
} 

?>