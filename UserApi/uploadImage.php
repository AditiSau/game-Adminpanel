<?php
  require_once('connection.php');
 if($_SERVER['REQUEST_METHOD']=='POST')
 { 

 $image = $_POST['image'];
  $userid=$_POST['userid'];
 $transaction_id=$_POST['transaction_id']; 
 
 
 $sql ="SELECT id FROM photos ORDER BY id ASC";
 
 $res = mysqli_query($con,$sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res))
 {
 $id = $row['id'];
 }
 
 $path = "upload/$id.png";
 $now="sddsfds";
 $actualpath = "https://www.pushpamatka.in/UserApi/$path";
 
  $sql = "INSERT INTO photos (userid,transaction_id,image,date) VALUES ('1','111','$actualpath','$now')";
 
 if(mysqli_query($con,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 else
 {
     echo "error";
 }
 
 mysqli_close($con);
 }else{
 echo "Error";
 } 
 ?>