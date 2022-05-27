<?php

	require("connection.php");
	
	$select="select * from game_rate";
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
		$response["rates"][]=$row;
    	$response['error']="200";
		$response['message']="fetching data";
		}
    }
    else{
    
      $response['error']="400";
      $response['message']="No Data Found";
 
    }
	echo json_encode($response);
?>