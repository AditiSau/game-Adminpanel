<?php

require("connection.php");
	
	$uid=$_POST["uid"];	
	$select="select * from withdrawal where uid='$uid'";
	$result=mysqli_query($con,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
		$response["wallet"]=$row["amount"];
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