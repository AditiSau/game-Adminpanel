<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
 <?php include('sidenav.php');?>

<div class="main-content">	<div class="page-content">
	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-6 col-md-6 mr-auto ml-auto">

				<div class="card">

				  <div class="card-body">

				  <h4 class="card-title">Send Notification</h4>

				<form id="sendNotificationFrm" name="sendNotificationFrm" action="notification.php"method="post">


				<div class="">
			

						<div class="form-group">

						<label >User Name</label>

						<input type="text"class="form-control" name="name" placeholder="Enter user name">
					</div>	

					
					<div class="form-group">

						<label >Notice Title</label>

						<input type="text" name="noticetitle" id=" " class="form-control" placeholder="Enter Title">

					</div>	
			

					<div class="form-group">

						<label>Notification Content</label>

						<textarea class="form-control" name="content" rows="5" id="notification_content"></textarea>

					</div>
		

					<div class="form-group">

						<button type="submit" class="btn btn-primary btn-block"style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" id="" name="">Submit</button>


					</div>

				</div>

				


			</form>


				</div></div></div></div></div></div></div>
	
<?php include('footer.php');?>
</body>
</html>