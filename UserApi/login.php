<?php
    require 'connection.php';
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
 
  $checkUser="SELECT * FROM register WHERE mobile='$mobile'";
 
  $result=mysqli_query($con,$checkUser);
 
 
 
  if(mysqli_num_rows($result)>0){ 
 
    $checkUserquery="SELECT id, username,mobile, email,password,status,mpin FROM register WHERE mobile='$mobile' and password='$password'";
    $resultant=mysqli_query($con,$checkUserquery);
 
    if(mysqli_num_rows($resultant)>0){
 
      if($row=$resultant->fetch_assoc())
      {
      
          if($row["status"]=="APPROVED")
          {
            $response['user']=$row;
            $response['error']="200";
            $response['message']="login success";
          }
          else
          {
            $response['user']=(object)[];
            $response['error']="400";
            $response['message']="Your Request is pending, Please Login after sometime";
          }
      }
   
    }
    else{
      $response['user']=(object)[];
      $response['error']="400";
      $response['message']="Invalid password";
    }
  }
  else{
    $response['user']=(object)[];
    $response['error']="400";
    $response['message']="Mobile number not registered";
  }
  echo json_encode($response);
  ?>