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
			<div class="col-sm-12 col-xl-12 col-md-12">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header p-t-15 p-b-15">
								<h5>Winning History Report</h5>
							</div>
							<div class="card-body">
								<form class="theme-form mega-form" id="" name="" method="post">
								<div class="row">
									<div class="form-group col-md-4">
										<label>Date</label>
																				<div class="date-picker">
											<div class="input-group">
											  <input class="form-control digits" type="date" value="" name="" id="" max="2022-04-21">
											</div>
										</div>
									</div>
										<div class="form-group col-md-4">	
										<label>Game Name</label>		
										<select id="" name="" class="form-control"><option value="">-Select Game Name-</option>
										</select>
									</div>
									<div class="form-group col-md-2">
										<label>&nbsp;</label>	
										<button type="submit" class="btn btn-primary btn-block" id="" name=""style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;">Submit </button>
									</div></div></form></div></div></div></div></div></div></div></div></div>
<?php include('footer.php');?>
</body>
</html>