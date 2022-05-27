<?php

	require("connection.php");
	
	$select="select * from game_list";
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
		    $select2="select bet_number,choice from demo where game_name='".$row["game_name"]."'";
		    $result1=mysqli_query($con,$select2);
		    if($row1=$result1->fetch_assoc())
		    {
		      	//$bet_number=$row1["bet_number"];
		      	$arr1 = array('bet_number' => $row1["bet_number"].$row1["choice"]);
		      
		    }
		    else
		    {
		        	$arr1 = array('bet_number' => "XXX-XX-XXX");
		    }
		$array=$arr1+$row;
		$response["games"][]=$array;
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