<?php
require("connection.php");
	
	$username=$_POST["username"];
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$password=$_POST["password"];
    $mpin=$_POST["mpin"];
	
	 
  $checkUser="SELECT * from register WHERE email='$email'";
  $checkQuery=mysqli_query($con,$checkUser);
  $rowcount=mysqli_num_rows($checkQuery);
  
  if($rowcount<=0)
  {
    $insertQuery="INSERT INTO register(username,mobile,email,password,status,mpin) VALUES('$username','$mobile','$email','$password','APPROVED','$mpin')";
    $result=mysqli_query($con,$insertQuery);
        if($result)
        {
            $response['error']="000";
            $response['message']="Register successful!";
        }
        else
        {
            $response['error']="001";
        $response['message']="Registeration failed!";
        }
  }
    else
    {
       $response['error']="002";
    $response['message']="User already exist";
    }
   
 	echo json_encode($response);
?>