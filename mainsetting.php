

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
 <?php include('sidenav.php');?>


<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row row_col">
			<div class="col-sm-12 col-xl-6">
				<div class="card h100p">
					<div class="card-body">
						<h4 class="card-title">Add Bank Details</h4>
						<form class="theme-form mega-form" id="adminsettingFrm" name="adminsettingFrm" method="post">
							<input type="hidden" name="account_id" value="1">
							<div class="form-group">
								<label class="col-form-label">Account Holder Name</label>
								<input class="form-control" type="text" name="ac_name" id="ac_name" value="" placeholder="Enter Account Holder Name">
							</div>
							<div class="form-group">
								<label class="col-form-label">Account Number</label>
								<input class="form-control" type="Number" name="ac_number" id="ac_number" value="" placeholder="Enter Account Number">
							</div>
							<div class="form-group">
								<label class="col-form-label">IFSC Code</label>
								<input class="form-control" type="text" name="ifsc_code" id="ifsc_code" value="" placeholder="Enter ">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary waves-light m-t-10" id="submitBtn" name="buysubmitBtn">Submit</button>
							</div>
							<div class="form-group">
								<div id="error"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card h100p">
					<div class="card-body">
						<h4 class="card-title">Add App Link</h4>
						<form class="theme-form mega-form" id="appLinkFrm" name="appLinkFrm" method="post">
							<input type="hidden" name="id" value="1">
							<div class="form-group">
								<label class="col-form-label">App Link</label>
								<input class="form-control" type="text" name="app_link" id="app_link" value="https://play.google.com/store/apps/details?id=com.e.Matka" placeholder="Enter APP Link">
							</div>
							<div class="form-group">
								<label class="col-form-label">Share Message</label>
								<textarea class="form-control" name="content" rows="4" id="content">Hi, I found this app for the best and fast Matka Game App. Download and register account now. 
https://play.google.com/store/apps/details?id=com.e.Matka</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary waves-light m-t-10" id="submitMobileBtn">Submit</button>
							</div>
							<div class="form-group">
								<div id="error_msg"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card h100p">
					<div class="card-body">
						<h4 class="card-title">Add UPI ID</h4>
						<form class="theme-form mega-form" id="adminUPIFrm" name="adminUPIFrm" method="post">
							<input type="hidden" name="account_id" value="1">
							
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Google UPI Payment Id</label>
									<input class="form-control" type="text" name="google_upi_payment_id" id="google_upi_payment_id" value="ajayk444335@oksbi" placeholder="Enter google upi payment id">
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Phone Pe UPI Payment Id</label>
									<input class="form-control" type="text" name="phonepay_upi_payment_id" id="phonepay_upi_payment_id" value="7878734623@ybl" placeholder="Enter phonepay upi payment id">
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Other UPI Payment Id</label>
									<input class="form-control" type="text" name="upi_payment_id" id="upi_payment_id" value="7878734623@paytm" placeholder="Enter upi payment id">
								</div>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary waves-light m-t-10" id="upiSubmitBtn" name="upiSubmitBtn">Submit</button>
							</div>
							<div class="form-group">
								<div id="error_upi"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card h100p">
					<div class="card-body">
						<h4 class="card-title">App Maintainence</h4>
						<form class="theme-form mega-form" id="appMaintainenceFrm" name="appMaintainenceFrm" method="post">
							<input type="hidden" name="value_id" value="1">
							<div class="form-group">
								<label class="col-form-label">Share Message</label>
								<textarea class="form-control" name="app_maintainence_msg" rows="4" id="app_maintainence_msg">Our app is under maintenance. We will back to you very soon..</textarea>
							</div>
							<div class="form-group col-6" style="margin-top:30px;">
								<div class="media">
									 <div class="custom-control custom-switch mb-3" dir="ltr">
										<input type="checkbox" class="custom-control-input" id="maintainence_msg_status" name="maintainence_msg_status" value="1">
										<label class="custom-control-label" for="maintainence_msg_status">Show Msg (ON/OFF)</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary waves-light m-t-10" id="submitBtnAppMaintainece" name="submitBtnAppMaintainece">Submit</button>
							</div>
							<div class="form-group">
								<div id="error_maintainence"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-12">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xl-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add Value's</h4>
								<form class="theme-form mega-form" id="adminvaluesettingFrm" name="adminvaluesettingFrm" method="post">
									<input type="hidden" name="value_id" value="1">
								<div class="row">
									<div class="form-group col-md-4">
										<label class="col-form-label">Minimum Deposite</label>
										<input class="form-control" type="number" min="0" name="min_deposite" id="min_deposite" value="500" placeholder="Enter Min. Deposite Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Maximum Deposite</label>
										<input class="form-control" type="number" min="0" name="max_deposite" id="max_deposite" value="100000" placeholder="Enter Max Deposite Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Minimum Withdrawal</label>
										<input class="form-control" type="number" min="0" name="min_withdrawal" id="min_withdrawal" value="1000" placeholder="Enter Min Withdrawal Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Maximum Withdrawal</label>
										<input class="form-control" type="number" min="0" name="max_withdrawal" id="max_withdrawal" value="50000" placeholder="Enter Max Withdrawal Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Minimum Transfer</label>
										<input class="form-control" type="number" min="0" name="min_transfer" id="min_transfer" value="50" placeholder="Enter Min Transfer Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Maximum Transfer</label>
										<input class="form-control" type="number" min="0" name="max_transfer" id="max_transfer" value="100000" placeholder="Enter Max Transfer Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Minimum Bid Amount</label>
										<input class="form-control" type="number" min="0" name="min_bid_amt" id="min_bid_amt" value="10" placeholder="Enter Min Bid Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Maximum Bid Amount</label>
										<input class="form-control" type="number" min="0" name="max_bid_amt" id="max_bid_amt" value="10000" placeholder="Enter Max Bid Amount">
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">Welcome Bonus</label>
										<input class="form-control" type="number" min="0" name="welcome_bonus" id="welcome_bonus" value="0" placeholder="Enter Welcome Bonus Amount">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
												<label for="open_time">Withdraw Open Time</label>

												  <input name="withdraw_open_time" id="withdraw_open_time" class="form-control digits" value="05:05" type="time">
												
									</div>
									<div class="form-group col-2">
												<label for="close_time">Withdraw Close Time</label>
												  <input name="withdraw_close_time" id="withdraw_close_time" class="form-control digits" type="time" value="08:00">
												
									</div>
									<div class="form-group col-2" style="margin-top:30px;">
												
												<div class="media">
												
												 <div class="custom-control custom-switch mb-3" dir="ltr">
													<input type="checkbox" class="custom-control-input" id="global_batting_status" name="global_batting_status" checked="" value="1">
													<label class="custom-control-label" for="global_batting_status">Global Batting</label>
												</div>
											
											  </div>
												
												
								   </div>
								   </div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary waves-light m-t-10" id="submitValueBtn" name="submitValueBtn">Submit</button>
									</div>
									<div class="form-group">
										<div id="alert"></div>
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


<div class="modal fade" id="upiUpdateModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-frame modal-top modal-md">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title">UPI Update</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
  </div>
	  <div class="modal-body">
		<form class="theme-form mega-form" id="UPIOTPConfirmFrm" name="UPIOTPConfirmFrm" method="post">
			<input type="hidden" name="account_id" value="1">
			<input type="hidden" name="upi_id" id="upi_id" value="">
			<input type="hidden" name="up_google_upi_payment_id" id="up_google_upi_payment_id" value="">
			<input type="hidden" name="up_phonepay_upi_payment_id" id="up_phonepay_upi_payment_id" value="">
			<div class="form-group">
				<h6 id="otp_number">OTP Sent To :- 7903175215</h6>
			</div>
			<div class="form-group">
				<label class="col-form-label">OTP Code</label>
				<input class="form-control" type="text" name="otp_code" id="otp_code" value="" placeholder="Enter OTP">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary waves-light m-t-10" id="otpSubmitBtn" name="otpSubmitBtn">Submit</button>
			</div>
			<div class="form-group">
				<div id="error_upi_otp"></div>
			</div>
		</form>
	  </div>
	</div>
  </div>
</div>

		
<?php include('footer.php');?>
</body>
</html>