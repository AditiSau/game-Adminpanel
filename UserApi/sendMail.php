<?php
if(isset($_POST["email"])&& isset($_POST["code"])
{
	$to=$_POST["email"];
	$subject="Verify Code";
	$message="Your Verification code is ".$_POST["code"];
	mail($to,$subject,$message);
	echo "send Successfully";
}

?>