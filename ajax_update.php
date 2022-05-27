<?php 
include 'files/dbcon.php';
// echo"<pre>";
// print_r($_POST);
// die();
$sid= $_POST['gid1'];
$fn= $_POST['an'];
$ln= $_POST['cn'];
$b=$_POST['day'];
$sql= "UPDATE game_list set a_time = '{$fn}' , c_time = '{$ln}', day='{$b}' WHERE game_id = '{$sid}'";
if(mysqli_query($con,$sql)){
    echo "1";
}else{
echo "0";
}