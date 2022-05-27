<?php
require("connection.php");
	
	$userid=$_POST["userid"];
	$transaction_id=$_POST["transaction_id"];
	$date=$_POST["date"];
	$mobile=$_POST["mobile"];
	
    $insertQuery="INSERT INTO photos(userid,transaction_id,date,mobile)values('$userid','$transaction_id','$date','$mobile')";
    $result=mysqli_query($con,$insertQuery);
        if($result)
        {
            $response['error']="000";
            $response['message']="Details send";
        }
        else
        {
            $response['error']="001";
        $response['message']="Failed to send details";
        }
  
   
 	echo json_encode($response);
?>