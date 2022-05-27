<?php
// session_start();
require("files/dbcon.php");

$name = $_POST['user'];
$pass = $_POST['password'];
$sql="SELECT * FROM `admin_login` where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows(($result));
if($num == 1)
 {
header('Location:dashboard.php');
}
else
{
echo"try again";
}

?>