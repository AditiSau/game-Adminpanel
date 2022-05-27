<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
 <?php include('sidenav.php');?>
<div class="main-content">	 <div class="page-content">
 <div class="container-fluid">

	<div class="row">

		<div class="col-sm-12 col-xl-12 col-md-12">

            <div class="row">

				<div class="col-sm-12">

                    <div class="card">

						<div class="card-header p-t-15 p-b-15">

							<h5>Starline Sell Report</h5>

						</div>

						<div class="card-body">

							<form class="theme-form mega-form" id="starlineSellFrm" name="starlineSellFrm" method="post">

							<div class="row">
																<div class="form-group col-md-2">

                                    <label>Date</label>
																				<div class="date-picker">
											<div class="input-group">
											  <input class="form-control digits" type="date" value="2022-04-25" name="start_date" id="start_date" max="2022-04-25">
											</div>
								<!--<label>Date</label>

									<div class="date-picker">

										<div class="input-group">

										  <input class="datepicker-here form-control digits" type="text" data-language="en" value="2022-04-25" name="start_date" id="start_date" placeholder="Enter Start Date" data-position="bottom left">

										</div>-->

									</div>

								</div>
								 
								
								
								<div class="form-group col-md-2">	
									<label>Game Name</label>		
									<select id="game_name" name="game_name" class="form-control">
										<option value="">-Select Game Name-</option>
																					<option value="1">10:00 AM</option>
																						<option value="2">11:00 AM</option>
																						<option value="3">12:00 PM</option>
																						<option value="4">1:00 PM</option>
																						<option value="5">2:00 PM</option>
																						<option value="6">3:00 PM</option>
																						<option value="7">4:00 PM</option>
																						<option value="8">5:00 PM</option>
																						<option value="9">6:00 PM</option>
																						<option value="10">7:00 PM</option>
																						<option value="11">8:00 PM</option>
																						<option value="12">9:00 PM</option>
																						<option value="13">10:00 PM</option>
																				</select>	
								</div>
								
									
								<div class="form-group col-md-2">	
									<label>Game Type</label>		
									<select id="game_type" name="game_type" class="form-control" onchange="getSession(this.value);">
										<option value="0">All</option>
											<option value="Single Digit">Single Digit</option>
											<option value="Single Pana">Single Pana</option>
												<option value="Double Pana">Double Pana
											</option>
											<option value="Triple Pana">Triple Pana</option>
											 
									</select>	
								</div>
								
								
								
								<input type="hidden" name="market_status" id="market_status" value="Open">
								 
								
								<div class="form-group col-md-2">
									<label>&nbsp;</label>
									<button type="submit" class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Submit</button>

								</div>

							</div>

								<div class="form-group">

									<div id="msg"></div>

								</div>

							</form>
							
						</div>

                    </div>

                </div>

			</div>

		</div>

	</div>

</div>
<div class="container-fluid">
	<div class="row">
	<!-- Zero Configuration  Starts-->	
		<div class="col-sm-12">
			<div class="card">
			  <div class="card-body">
			 
				 <div class="mytable">
				 </div>
				 
				
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>