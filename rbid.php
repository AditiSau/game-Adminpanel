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
						<h5>Bid History Report</h5>
							<form class="theme-form mega-form" id="getRouletteBidHistoryFrm" name="getRouletteBidHistoryFrm" method="post">
							<div class="row">
								<div class="form-group col-md-2">
									<label>Date</label>
																		<div class="date-picker">
										<div class="input-group">
										  <input class="datepicker-here form-control digits" type="text" data-language="en"  name="bid_date" id="bid_date" placeholder="Enter Batch Start Date" data-position="bottom left">
										</div>
									</div>
								</div>
								<div class="form-group col-md-4">	
									<label>Game Name</label>		
									<select id="game_name" name="game_name" class="form-control">
										<option value="">Select Game Name</option>
										<option value="0">All Games</option>	
																					<option value="1">12:00 AM-12:15 AM</option>
																						<option value="2">12:15 AM-12:30 AM</option>
																						<option value="3">12:30 AM-12:45 AM</option>
																						<option value="4">12:45 AM-1:00 AM</option>
																						<option value="5">1:00 AM-1:15 AM</option>
																						<option value="6">1:15 AM-1:30 AM</option>
																						<option value="7">1:30 AM-1:45 AM</option>
																						<option value="8">1:45 AM-2:00 AM</option>
																						<option value="9">2:00 AM-2:15 AM</option>
																						<option value="10">2:15 AM-2:30 AM</option>
																						<option value="11">2:30 AM-2:45 AM</option>
																						<option value="12">2:45 AM-3:00 AM</option>
																						<option value="13">3:00 AM-3:15 AM</option>
																						<option value="14">3:15 AM-3:30 AM</option>
																						<option value="15">3:30 AM-3:45 AM</option>
																						<option value="16">3:45 AM-4:00 AM</option>
																						<option value="17">4:00 AM-4:15 AM</option>
																						<option value="18">4:15 AM-4:30 AM</option>
																						<option value="19">4:30 AM-4:45 AM</option>
																						<option value="20">4:45 AM-5:00 AM</option>
																						<option value="21">5:00 AM-5:15 AM</option>
																						<option value="22">5:15 AM-5:30 AM</option>
																						<option value="23">5:30 AM-5:45 AM</option>
																						<option value="24">5:45 AM-6:00 AM</option>
																						<option value="25">6:00 AM-6:15 AM</option>
																						<option value="26">6:15 AM-6:30 AM</option>
																						<option value="27">6:30 AM-6:45 AM</option>
																						<option value="28">6:45 AM-7:00 AM</option>
																						<option value="29">7:00 AM-7:15 AM</option>
																						<option value="30">7:15 AM-7:30 AM</option>
																						<option value="31">7:30 AM-7:45 AM</option>
																						<option value="32">7:45 AM-8:00 AM</option>
																						<option value="33">8:00 AM-8:15 AM</option>
																						<option value="34">8:15 AM-8:30 AM</option>
																						<option value="35">8:30 AM-8:45 AM</option>
																						<option value="36">8:45 AM-9:00 AM</option>
																						<option value="37">9:00 AM-9:15 AM</option>
																						<option value="38">9:15 AM-9:30 AM</option>
																						<option value="39">9:30 AM-9:45 AM</option>
																						<option value="40">9:45 AM-10:00 AM</option>
																						<option value="41">10:00 AM-10:15 AM</option>
																						<option value="42">10:15 AM-10:30 AM</option>
																						<option value="43">10:30 AM-10:45 AM</option>
																						<option value="44">10:45 AM-11:00 AM</option>
																						<option value="45">11:00 AM-11:15 AM</option>
																						<option value="46">11:15 AM-11:30 AM</option>
																						<option value="47">11:30 AM-11:45 AM</option>
																						<option value="48">11:45 AM-12:00 PM</option>
																						<option value="49">12:00 PM-12:15 PM</option>
																						<option value="50">12:15 PM-12:30 PM</option>
																						<option value="51">12:30 PM-12:45 PM</option>
																						<option value="52">12:45 PM-1:00 PM</option>
																						<option value="53">1:00 PM-1:15 PM</option>
																						<option value="54">1:15 PM-1:30 PM</option>
																						<option value="55">1:30 PM-1:45 PM</option>
																						<option value="56">1:45 PM-2:00 PM</option>
																						<option value="57">2:00 PM-2:15 PM</option>
																						<option value="58">2:15 PM-2:30 PM</option>
																						<option value="59">2:30 PM-2:45 PM</option>
																						<option value="60">2:45 PM-3:00 PM</option>
																						<option value="61">3:00 PM-3:15 PM</option>
																						<option value="62">3:15 PM-3:30 PM</option>
																						<option value="63">3:30 PM-3:45 PM</option>
																						<option value="64">3:45 PM-4:00 PM</option>
																						<option value="65">4:00 PM-4:15 PM</option>
																						<option value="66">4:15 PM-4:30 PM</option>
																						<option value="67">4:30 PM-4:45 PM</option>
																						<option value="68">4:45 PM-5:00 PM</option>
																						<option value="69">5:00 PM-5:15 PM</option>
																						<option value="70">5:15 PM-5:30 PM</option>
																						<option value="71">5:30 PM-5:45 PM</option>
																						<option value="72">5:45 PM-6:00 PM</option>
																						<option value="73">6:00 PM-6:15 PM</option>
																						<option value="74">6:15 PM-6:30 PM</option>
																						<option value="75">6:30 PM-6:45 PM</option>
																						<option value="76">6:45 PM-7:00 PM</option>
																						<option value="77">7:00 PM-7:15 PM</option>
																						<option value="78">7:15 PM-7:30 PM</option>
																						<option value="79">7:30 PM-7:45 PM</option>
																						<option value="80">7:45 PM-8:00 PM</option>
																						<option value="81">8:00 PM-8:15 PM</option>
																						<option value="82">8:15 PM-8:30 PM</option>
																						<option value="83">8:30 PM-8:45 PM</option>
																						<option value="84">8:45 PM-9:00 PM</option>
																						<option value="85">9:00 PM-9:15 PM</option>
																						<option value="86">9:15 PM-9:30 PM</option>
																						<option value="87">9:30 PM-9:45 PM</option>
																						<option value="88">9:45 PM-10:00 PM</option>
																						<option value="89">10:00 PM-10:15 PM</option>
																						<option value="90">10:15 PM-10:30 PM</option>
																						<option value="91">10:30 PM-10:45 PM</option>
																						<option value="92">10:45 PM-11:00 PM</option>
																						<option value="93">11:00 PM-11:15 PM</option>
																						<option value="94">11:15 PM-11:30 PM</option>
																						<option value="95">11:30 PM-11:45 PM</option>
																						<option value="96">11:45 PM-12:00 AM</option>
																				</select>	
								</div>
								<div class="form-group col-md-2">
								<label>&nbsp;</label>
									<button type="submit" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;" class="btn btn-primary btn-block" id="submitBtn" name="submitBtn">Submit</button>
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

<input type="hidden" id="bidHistory_date">
<input type="hidden" id="bid_game_name">


<div class="container-fluid">
	<div class="row"> 
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Bid History List
					<button id="export_btn" style="background-color:  gold;  border:0px solid black; color: black; font-size: 16px;"class="btn btn-primary btn-sm btn-float m-r-5" onclick="geRouletteBidHistoryExcelData()">Export To Excel</button>
					</h4>
					<div class="dt-ext table-responsive">
						<table id="bidHistory" class="table table-striped table-bordered">
							<thead> 
								<tr>
									<th>User Name</th>
									<th>Bid TX ID</th>
									<th>Game Name</th>
									<th>Digit</th>
									<th>Points</th>
								</tr>
							</thead>
							<tbody id="roulette_bid_data">
						
							</tbody>
						</table>
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