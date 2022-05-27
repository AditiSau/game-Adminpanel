<?php

$con=mysqli_connect("localhost","u712415935_localhost","Admin@123");
mysqli_select_db($con,"u712415935_lotus");


$name = $_POST['user'];


$pass = $_POST['password'];



$s="select * from users where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {

echo"Already registered";

}else{

$reg ="INSERT INTO `users` (`name`, `password`) VALUES('$name','$pass')";
mysqli_query($con,$reg);

header('Location:index.php');
 }

?>