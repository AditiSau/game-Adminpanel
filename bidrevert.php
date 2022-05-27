<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php require("sidenav.php"); ?>

<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
	   <div class="row">
		  <div class="col-sm-12 col-xl-12 col-md-12">
			 <div class="row">
				<div class="col-sm-12">
				   <div class="card">
					    <div class="card-body">
						<h4 class="card-title">Bid Revert</h4>
						
						 <form class="theme-form mega-form" id="bidRevertFrm" name="bidRevertFrm" method="post" autocomplete="off">
							<div class="row">
							   <div class="form-group col-md-2">
								  <label>Date</label>
								  								  <div class="date-picker">
									 <div class="input-group">
										<input class="form-control digits" type="date" value="2022-04-29" name="bid_revert_date" id="bid_revert_date" max="2022-04-29">
									 </div>
								  </div>
							   </div>
							   <div class="form-group col-md-2">
								  <label>Game Name</label>		
								  <select id="win_game_name" name="win_game_name" class="form-control">
									 <option value="">-Select Game Name-</option>
									 									 <option value="1">RUDRAKSH MORNING</option>
									 									 <option value="2">SRIDEVI DAY</option>
									 									 <option value="3">MADHUR MORNING</option>
									 									 <option value="4">TIME BAZAR</option>
									 									 <option value="5">MADHUR DAY</option>
									 									 <option value="6">RUDRAKSH DAY</option>
									 									 <option value="7">MILAN DAY</option>
									 									 <option value="8">RAJDHANI DAY</option>
									 									 <option value="9">SUPREME DAY</option>
									 									 <option value="10">KALYAN</option>
									 									 <option value="11">SRIDEVI NIGHT</option>
									 									 <option value="12">RUDRAKSH NIGHT</option>
									 									 <option value="13">MADHUR NIGHT</option>
									 									 <option value="14">SUPREME NIGHT</option>
									 									 <option value="15">MILAN NIGHT</option>
									 									 <option value="16">KALYAN NIGHT</option>
									 									 <option value="17">RAJDHANI NIGHT</option>
									 									 <option value="18">MAIN BAZAR</option>
									 									 <option value="19">GANPATI MORNING</option>
									 									 <option value="20">GANPATI DAY</option>
									 									 <option value="21">GANPATI EVENING</option>
									 									 <option value="22">GANPATI NIGHT</option>
									 									 <option value="23">KALYAN MORNING</option>
									 									 <option value="24">MILAN MORNING</option>
									 								  </select>
							   </div>
							    
							   <div class="form-group col-md-2">
									<label>&nbsp;</label>	
									<button type="submit" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Submit</button>
								</div>
							</div>
							<div class="form-group">
							   <div id="error"></div>
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
		  <div class="col-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="card-title">Bid Revert List
				     <a class="btn btn-primary btn-sm btn-float clear_btn" href="http://aslimatka.com/aslimatka-admin/bid-revert#revertModel" role="button" data-toggle="modal" style="display: none;">Clear &amp; Refund All</a> 
				   </h4> 
					<div class="mt-3">
					  <table class="table table-striped table-bordered" id="bidRevertTable">
						 <thead>
							<tr>
							   <th>#</th>
							   <th>User Name</th>
							   <th>Bid Points</th>
							   <th>Type</th>
							</tr>
						 </thead>
						 <tbody id="bid_result_data">
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
	
</div>


<div class="modal fade" id="revertModel" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-frame modal-top modal-md">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
  </div>
	  <div class="modal-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-left">
						<h5>Are you sure you want to clean and refund bid amount...?</h5>
					</div>
					<div class="col-md-4 text-left">
						<button onclick="data_refund()" id="data_clean_date" class="btn btn-danger waves-effect waves-light">Yes</button>
						<button class="btn btn-info waves-effect waves-light" data-dismiss="modal">No</button>
					</div>
					
			</div>
	  </div>
	</div>
  </div>
</div>


<?php include("footer.php"); ?>
</body>
</html>