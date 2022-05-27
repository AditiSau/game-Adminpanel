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
								<h5>Clear Data</h5>
							</div>
							<div class="card-body">
								<form class="theme-form mega-form" id="clearDataFrm" name="clearDataFrm" method="post">
								<div class="row">
									<div class="form-group col-md-2">
										<label>Date To</label>
																				<div class="date-picker">
											<div class="input-group">
											  <input class="form-control digits" type="date" value="2022-04-22" name="result_date" id="result_date" max="2022-04-22">
											</div>
										</div>
									</div>
									<!--<div class="form-group col-md-2">
										<label>&nbsp;</label>	
										<button type="submit" class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Submit</button>
									</div>-->
									<div class="form-group col-md-3">
										<label>&nbsp;</label>	
										<button type="submit"style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Download Bid History</button>
									</div>
									<div class="form-group col-md-3">
										<label>&nbsp;</label>	
										<button type="button"style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" class="btn btn-primary btn-block">Download Wallet History</button>
									</div>
									<div class="form-group col-md-3">
										<label>&nbsp;</label>	
										<button type="button" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Clean Data</button>
									</div>
									
								</div>
									<div class="form-group">
										<div id="error_msg"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>