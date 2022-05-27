<?php
require("connection.php");
	$id=$_REQUEST["id"];
	$pwd=$_POST["newpwd"];
	
	$insertQuery="Update register set password='$pwd'  where id='$id'";
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