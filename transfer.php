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

						<div class="card-body">
						<h5>Transfer Point Report</h5>

							<form class="theme-form mega-form" id="transferReportFrm" name="transferReportFrm" method="post">

							<div class="row">
                                   <div class="form-group col-md-4">
										<label>Date</label>
																				<div class="date-picker">
											<div class="input-group">
											  <input class="form-control digits" type="date" value="" name="transfer_date" id="transfer_date" max="2022-04-21">
											</div>
										</div>
									</div>
							
								<div class="form-group col-md-2">
									<label>&nbsp;</label>
									<button type="submit" class="btn btn-primary btn-block" id="" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"name="">Submit</button>

								</div>
	</div>
							</form></div>

								<div class="form-group">

									<div id=""></div>

								</div>

							

						</div>

                    </div>

                </div>

			</div>

		</div>

	</div>




<div class="container-fluid">

	<div class="row"> 

		<div class="col-12">

			<div class="card">

				<div class="card-body">

					<h4 class="card-title d-flex align-items-center justify-content-between">Transfer List
					<button class="btn btn-primary btn-small" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;">Total Transfer Amount:<h3>0</h3></button>
					</h4>

					<div class="dt-ext table-responsive">

						<table id="" class="table table-striped table-bordered">

							<thead> 

								<tr>
								<th>SL</th>

									<th>Sender Name</th>

									

									<th>Receiver Name</th>
									<th>Amount</th>
									<th>Date</th>
								</tr>

							</thead>

							<tbody id="">

							

							</tbody>

						</table>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>
</div></div>
 <?php include('footer.php');?>
</body>
</html>