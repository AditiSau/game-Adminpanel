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
						<div class="col-12 col-md-12">		<div class="row">					<div class="col-sm-12">
									<div class="card">
					<div class="card-body">
		<h4 class="card-title">Bid History Report</h4>
						<form method="post">
							<div class="row">
				<div class="form-group col-md-2">
									<label>Date</label>
					<div class="date-picker">
										<div class="input-group">
												<input type="date">
							</div>
										</div>
													</div>
<div class="form-group col-md-4">
	<label>Game Name</label>
	<select id="" name="" class="form-control">
		<option value="">Select Game Name</option>
		
		
	</select>
</div>
<div class="form-group col-md-4">
	<label>Game Type</label>
	<select id="" name="" class="form-control">
		<option value="">Select Game Type</option>
		<option value="all">All Type</option>
		<option value="1">Single Digit</option>
		<option value="2">Jodi Digit</option>
		<option value="3">Single Pana</option>
		<option value="4">Double Pana</option>
		<option value="5">Triple Pana</option>
		<option value="6">Half Sangam</option>
		<option value="7">Full Sangam</option>
	</select>
</div>
<div class="form-group col-md-2">
	<label>&nbsp;</label>
	<button type="submit" class="btn btn-primary btn-block" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"id="" name="">Submit</button>
</div>
</div>
<div class="form-group">
<div id=""></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<input type="hidden" id="bidHistory_date">
<input type="hidden" id="bid_game_name">
<input type="hidden" id="bid_game_type">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
	<h4 class="card-title">Bid History List</h4>
<div class="dt-ext table-responsive">
	<table id="bidHistory" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User Name</th>
				<th>Bid TX ID</th>
				<th style="width:15%">Game Name</th>
				<th>Game Type</th>
				<th>Session</th>
				<th>Open Paana</th>
				<th>Open Digit</th>
				<th>Close Paana</th>
				<th>Close Digit</th>
				<th>Points</th>
				<th>Action</th>
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
</div>
</div>

</body>
</html>