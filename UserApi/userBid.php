<?php
	require("connection.php");
	
	$userid=$_POST["userid"];
	$gameid=$_POST["gameid"];
	$gamename=$_POST["gamename"];
	$ballnumber=$_POST["ballnumber"];
	$bidprice=$_POST["bidprice"];
	$biddate=$_POST["biddate"];
	$beton=$_POST["beton"];
	$choice=$_POST["choice"];
	$mobile=$_POST["mobile"];
	$close=$_POST["close_pana"];
	$open=$_POST["open_pana"];
//	$biddate=date();
	$insertQuery="INSERT INTO userbid(userid,gameid,gamename,digit,bidprice,biddate,beton,choice,mobile,open_pana,close_pana) values('$userid','$gameid','$gamename','$ballnumber','$bidprice','$biddate','$beton','$choice','$mobile','$open','$close')";
	$result=mysqli_query($con,$insertQuery);
	
	if($result)
	{
		$response["error"]="000";
		$response["message"]="Register Successfully";
	}
	else
	{
		$response["error"]="001";
		$response["message"]="Bid failed";
	}

	echo json_encode($response);
?>