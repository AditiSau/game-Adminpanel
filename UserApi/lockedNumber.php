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
		    /*	$date=substr($row["biddate"],0,10);
		    	if($date==$biddate)
		    	{ */
		            $response["bids"][]=$row;
		            $response['error']="200";
		            $response['message']="fetching data";
		    /*	}
		    	 else
		        {
                    $response['error']="400";
                    $response['message']="No Data Found";
                } */
		}
    }
    else{
      $response['error']="400";
      $response['message']="No Data Found";
    }
	echo json_encode($response);
	?>