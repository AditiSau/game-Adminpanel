<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style> <link rel="shortcut icon" href="files/logo1.jpg" /></style>
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

									<div class="form-group col-md-2">

										<label>Date</label>

										
										<div class="date-picker">

											<div class="input-group">

				<input class="form-control digits" type="date" value="" name="" id="" max="2022-04-21">

											</div>

										</div>

									</div>
										<div class="form-group col-md-4">	
										<label>Game Name</label>		
										<select id="win_game_name" name="win_game_name" class="form-control">
											<option value="">Select Game Name</option></select></div>

			<div class="form-group col-md-4">	
										<label>Market Time</label>		
										<select id="" name="" class="form-control">
											<option value="">Select Market Time</option>
												<option value="">Open Market</option>
												<option value="">Close Market</option>
												
										</select>
									</div>
				<div class="form-group col-md-2">
										<label>&nbsp;</label>	
										<button type="submit" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"class="btn btn-primary btn-block" id="" name="">Submit</button>
									</div>

										





		<div class="row"> 

			<div class="col-12">

			

						<h4 class="card-title">Winning History List</h4>

						<div class="dt-ext table-responsive">

							<table id="" class="table table-striped table-bordered">

								<thead> 

									<tr>

										<th>User Name</th>

										

										<th>Game Name</th>
										<th>Game Type</th>
										<th>Open Pana</th>
										<th>Open digit</th>
										<th>Close Pana</th>
										<th>Close Digit</th>
										<th>Points</th>
										<th>Amount</th>
										<th>Tx Id</th>
										<th>Tx Date</th>

									</tr>

								</thead>

								<tbody id="result_data">

								

								</tbody>

							</table>

						</div>

					</div>


	</div>
</div></div></form></div></div></div></div></div></div></div></div></div>
 <?php include('footer.php');?>
</body>
</html>