<?php
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y');
$time= date('h:i');

include('files/dbcon.php');

if(isset($_POST['submit']))
{
     $name = $_POST['name'];


     $email = $_POST['email'];


     $phone = $_POST['phone'];

     $m = $_POST['message'];

     $reg ="INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `message`,`m_date`,`m_time`) VALUES ('','$name','$email','$phone','$m','$date','$time')";
     $iquery=mysqli_query($con,$reg);
     if($iquery)
     {
         ?>
         <script>
             alert("Your Request Is Successfully Sent To The Admin");
         </script>
         <?php
      }
      else
      {
           ?>
         <script>
             alert("Your Request Send Failed");
         </script>
         <?php
      }
      $URL="contact.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
}
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"><style type="text/css">
	
	:root{

				--bg-color: linear-gradient(to right,black, gold) ;
				--bg-hover: linear-gradient(to right,gold,black);



			}
button{

				  background-image: var(--bg-color) ;
			}

			button:hover{

				  background-image: var(--bg-hover) ;
				

			}

			form{

				border-radius: 10px;
				margin:  15% 0%;
			}

			
label{

				font-weight: 600;
				
			}
</style></head>
<body>
    <?php include('sidenav.php');?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
<div class="container">
			<div class="row">
				<div class="col-11 col-md-3 col-lg-3"></div>
				<div class="col-11 col-md-6 col-lg-6">
					
					<form method="POST" class="bg-light px-5 pb-4 " >

						<h1 class="text-center py-4 text-dark">Contact</h1>
						<div class="mb-3">
							
							<input type="text" class="form-control"  placeholder="UserName" name="name">
							
						</div>
				
						<div class="mb-3">
							
							<input type="email" class="form-control" id="" placeholder="email" name="email">
						</div>
						
								<div class="mb-3">
							
							<input type="phone" class="form-control" id="exampleInputPassword1" placeholder="phone" name="phone">
						</div>
								<div class="mb-3">
							
							<input type="message" class="form-control" id="exampleInputPassword1" placeholder="message" name="message">
						</div>
						
						<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg w-100" >
					
						 
 
						
					</form>
				</div>

</div></div></div>
			</div>
		</div></div>

</body></html>