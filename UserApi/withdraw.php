<?php
	require("connection.php");	
	$userid=$_POST["userid"];
	$mobile=$_POST["mobile"];
	$amount=$_POST["amount"];	
	$date=$_POST["date"];
	$status=$_POST["status"];
  $insertQuery="INSERT INTO withdraw(userid,mobile,amount,date,status) VALUES('$userid','$mobile','$amount','$date','$status')";
  $result=mysqli_query($con,$insertQuery); 
  if($result){
 
    $response['error']="000";
    $response['message']="withdraw successful!";
  }
  else
  {
    $response['error']="001";
    $response['message']="withdraw failed!";
  }
 	echo json_encode($response);
?>