<?php
require("connection.php");
	$id=$_REQUEST["id"];
	$username=$_POST["username"];
	$email=$_POST["email"];

	
	$insertQuery="Update register set username='$username',email='$email' where id='$id'";
	$result=mysqli_query($con,$insertQuery);
	
	if($result)
	{
		$response["error"]="000";
		$response["message"]="Update Successfully";
	}
	else
	{
		$response["error"]="001";
		$response["message"]="Update failed";
	}
	
	echo json_encode($response);
?>