<?php
	require("connection.php");
	
	$userid=$_POST["userid"];
	$transactionid=$_POST["transactionid"];
	$imagepath=$_POST["imagepath"];
	$dates=$_POST["dates"];
	$imagepath="";
	$insertQuery="INSERT INTO  transaction_detail ( userid ,  transactionid ,  imagepath ,  dates ) VALUES ('$userid','$transactionid','$imagepath','$dates')";
	$result=mysqli_query($con,$insertQuery);
	
	if($result)
	{
		$response["error"]="000";
		$response["message"]="Details added Successfully";
	}
	else
	{
		$response["error"]="001";
		$response["message"]="Record insertion  failed";
	}
	
	echo json_encode($response);
?>
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");



$response = array();
$upload_dir = 'uploads/';
$server_url = 'http://127.0.0.1:8000';

if($_FILES['avatar'])
{
    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

    if($error > 0){
        $response = array(
            "status" => "error",
            "error" => true,
            "message" => "Error uploading the file!"
        );
    }else 
    {
        $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);
    
        if(move_uploaded_file($avatar_tmp_name , $upload_name)) {
            $response = array(
                "status" => "success",
                "error" => false,
                "message" => "File uploaded successfully",
                "url" => $server_url."/".$upload_name
              );
        }else
        {
            $response = array(
                "status" => "error",
                "error" => true,
                "message" => "Error uploading the file!"
            );
        }
    }



    

}else{
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "No file was sent!"
    );
}

echo json_encode($response);
