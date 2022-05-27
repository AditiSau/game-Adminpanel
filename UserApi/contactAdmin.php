<?php
require("connection.php");
	
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	$date=$_POST["date"];
  $insertQuery="INSERT INTO contact_admin(name,email,phone,message,date) VALUES('$name','$email','$phone','$message','$date')";
    $result=mysqli_query($con,$insertQuery);
        if($result)
        {
            $response['Error']="000";
            $response['msg']="Your query send successfully";
        }
        else
        {
            $response['Error']="001";
        $response['msg']="Sending failed!";
        }
  
 
 	echo json_encode($response);
?>