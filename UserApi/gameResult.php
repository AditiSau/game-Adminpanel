<?php

	require("connection.php");
	
	$select="select * from game_result";
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
		$response["results"][]=$row;
		}
	}	
	else
	{
		$response['error']="400";
		$response['message']="no data found";
	}
	echo json_encode($response);
	
?>