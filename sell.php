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
<h4 class="card-title">Customer Sell Report</h4>
<form id="customerSellFrm" name="customerSellFrm" method="post">
	<div class="row">
		<div class="form-group col-md-2">
			<label>Date</label>
			<div class="date-picker">
				<div class="input-group">

<input class="form-control digits" type="date" value="2022-04-20" name="start_date" id="start_date" max="2022-04-20">
</div>
</div>
</div>
									 
									
<div class="form-group col-md-3">
	<label>Game Name</label>
	<select id="" name="" class="form-control">
		<option value="">Select Game Name</option>
	</select>
</div>


<div class="form-group col-md-3">
	<label>Game Type</label>
	<select id="" name="" class="form-control" >
		<option value="0">All</option>
		<option value="Single Digit">Single Digit</option>
		<option value="Jodi Digit">Jodi Digit</option>
		
		
	</select>
</div>
<div class="form-group col-md-2 session_get">
	<label>Session</label>
	<select id="" name="" class="form-control">
		<option value="">Select Session</option>
		<option value="Open">Open</option>
		<option value="Close">Close</option>
		
	</select>
</div>


<div class="form-group col-md-2">
	<label>&nbsp;</label>
	<button type="submit" class="btn btn-primary btn-block" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" id="" name="">Submit</button>
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
	
 	
	<!-- 
		  <div class="modal-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h5>Total Bid Amount : <b><span id="total_bid">0</span></b></h5>
						<h5>Total Winning Amount : <b><span id="total_winneing_amt">0</span></b></h5>
						
						<div class="dt-ext table-responsive" style="max-height: 400px;overflow-y: scroll;">

							<table class="table table-striped table-bordered">

								<thead> 

									<tr>

										<th>SL</th>
										<th>User Name</th>
										<th>Bid Points</th>
										<th>Winning Amount</th>
										<th>Type</th>
										<th>Bid TX ID</th>

									</tr>

								</thead>

								<tbody >
								
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
	 -->

 <?php include('footer.php');?>
 </body>
</html>