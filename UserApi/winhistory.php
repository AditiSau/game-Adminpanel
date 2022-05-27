<?php

	require("connection.php");
	
	$userid=$_POST["userid"];
	$todate=$_POST["todate"];
	$fromdate=$_POST["fromdate"];
	
    $select="select * from userbid where userid='$userid' and biddate>='$todate' and biddate<='$fromdate'";
	$result=mysqli_query($con,$select);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
	    	$select2="select * from game_result where game_name='".$row["gamename"]."' and game_date='".$row["biddate"]."'";
		    $result1=mysqli_query($con,$select2);
		    while($row1=$result1->fetch_assoc())
		    {
		        $ch=strval($row1["choice"]);
		       $bet=strval($row1["bet_number"]);
		       $ball=strval($row["ballnumber"]);
		       $pos=strpos($bet,$ball);
		       $pos1=strpos($ch,$ball);
		  	    if ($pos1==false || $pos==false) 
		  	    {
                     $response['error']="400";
                     $response['message']="No Data Found"; 
                }
                else
                {
                    $response['bids'][]=$row;
                    $response['error']="200";
                    $response['message']="Success";
                }
		    }
		}
	
    }
    else{
    
      $response['error']="400";
      $response['message']="No Data Found";
 
    }
	echo json_encode($response);
?>