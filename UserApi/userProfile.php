<?php

	require("connection.php");
	
	$select="select * from register";
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
		$response["users"][]=$row;
		}
	}	
	echo json_encode($response);
	
?>