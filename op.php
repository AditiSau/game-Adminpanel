  <?php include('sidenav.php');?>

<div class="main-content">  <div class="page-content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
    <h2>Personal & Payment Details</h2> </div>
      </div>
    </div>
   
<form method="post">
Enter Name:
<input type="text" name="t1">
<input type="submit" name="b1" value="SEARCH">
</form><br> 
						
									

<?php
if(isset($_POST["b1"]))
{
$a=$_POST["t1"];
$n=$_POST["t2"];
include('files/dbcon.php');

if($con)
{
$q="SELECT * FROM `register` where username='$a'";
$m="UPDATE `register` SET mpin='$n'";
$r=mysqli_query($con,$q);
$c=mysqli_num_rows($r);

if($c>0) // if record found
{
?>
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-flex align-items-center justify-content-between">
					<h4 class="mb-0 font-size-18">User Details</h4>

					

				</div>
			</div>
		</div>
		
		<div class="row row_col">
			<div class="col-xl-4">
				<div class="card overflow-hidden h100p">
					<div class="bg-soft-primary">
						<div class="row">
							<div class="col-7">
								<div class="text-primary p-3">
									<h5 class="text-primary">Prashanta H</h5>
									<p>9380497801																		<a href="tel:919380497801"><i class="mdi mdi-cellphone-iphone"></i></a>
									<a href="https://wa.me/919380497801" target="blank"><i class="mdi mdi-whatsapp"></i></a>
																		</p>
								</div>
							</div>
							<div class="col-5 align-center">
								<div class="p-3 text-right">
									<div class="mb-2">
									Active:
																			<a role="button" class="activeDeactiveStatus" id="success-2241-tb_user-user_id-status"><span class="badge badge-pill badge-success font-size-12">Yes</span></a>
																		</div>
									<div class="mb-2">
										Betting: 
																					<a role="button" class="activeDeactiveStatus" id="success-2241-tb_user-user_id-betting_status"><span class="badge badge-pill badge-success font-size-12">Yes</span></a>
																			</div>
									
									<div class="mb-2">
										TP: 
																					<a role="button" class="activeDeactiveStatus" id="danger-2241-tb_user-user_id-transfer_point_status"><span class="badge badge-pill badge-danger font-size-12">No</span></a>	
																			</div>
									
									<div class="mb-2">
										Logout Status: 
											<a role="button" onclick="changeLogoutStatus(2241);"><span class="badge badge-pill badge-success font-size-12">Logout Now</span></a>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="card-body pt-0">
						<div class="row">
							<div class="col-sm-4">
								<div class="avatar-md profile-user-wid mb-4">
									<img src="./View User_files/user.png" alt="" class="img-thumbnail rounded-circle">
								</div>
								
							</div>

							<div class="col-sm-8">
								<div class="pt-4">
								   
									<div class="row">
										<div class="col-6">
											<p class="text-muted mb-0">Security Pin</p>
											<h5 class="font-size-15 mb-0">1234</h5>
										</div>
										<div class="col-6">
											<button class="btn btn-primary btn-sm" id="changePin">Change</button>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="card-body border-top">
                                        
						<div class="row">
							<div class="col-sm-12">
								<div>
									<p class="text-muted mb-2">Available Balance</p>
									<h5>0</h5>
								</div>
								
							</div>
							
							<div class="col-sm-6">
								<div class="mt-3">
									<button class="btn btn-success btn-sm w-md btn-block" id="adFund">Add Fund</button>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mt-3">
									<button class="btn btn-danger btn-sm w-md btn-block" id="withdrawFund">Withdraw Fund</button>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			
			<div class="col-xl-8">
				<div class="card h100p">
					<div class="card-body">
						<h4 class="card-title mb-4">Personal Information</h4>
						<div class="table-responsive">
							<table class="table table-nowrap mb-0">
								<tbody>
									<tr>
										<th scope="row">Full Name :</th>
										<td>Prashanta H</td>
										<th scope="row">Email :</th>
										<td>prashantah17@gmail.com</td>
									</tr>
									<tr>
										<th scope="row">Mobile :</th>
										<td>9380497801																						<a href="tel:919380497801"><i class="mdi mdi-cellphone-iphone"></i></a>
											<a href="https://wa.me/919380497801" target="blank"><i class="mdi mdi-whatsapp"></i></a>
																					
										</td>
										<th scope="row">Password :</th>
										<td>9380497801</td>
									</tr>
									<tr>
										<th scope="row">District Name :</th>
										<td>N/A</td>
										<th scope="row">Flat/Plot No. :</th>
										<td>N/A</td>
									</tr>
									<tr>
										<th scope="row">Address Lane 1 :</th>
										<td>N/A</td>
										<th scope="row">Address Lane 2 :</th>
										<td>N/A</td>
									</tr>
									<tr>
										<th scope="row">Area :</th>
										<td>N/A</td>
										<th scope="row">Pin Code :</th>
										<td>N/A</td>
									</tr>
									<tr>
										<th scope="row">State Name :</th>
										<td>N/A</td>
										<th scope="row"></th>
										<td></td>
									</tr>
									<tr>
										<th scope="row">Creation Date :</th>
										<td>09 May 2022 09:21:19 PM</td>
										<th scope="row">Last Seen :</th>
										<td>09 May 2022 09:23:20 PM</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">Payment Information</h4>
						<div class="table-responsive">
							<table class="table table-nowrap mb-0">
								<tbody>
									<tr>
										<th scope="row">Bank Name :</th>
										<td>N/A</td>
										<th scope="row">Branch Address :</th>
										<td>N/A</td>
										<th scope="row"></th>
										<td></td>
										
									</tr>
									<tr>
										<th scope="row">A/c Holder Name :</th>
										<td>N/A</td>
										<th scope="row">A/c Number :</th>
										<td>N/A</td>
										<th scope="row">IFSC Code :</th>
										<td>N/A</td>
										
									</tr>
									<tr>
										<th scope="row">PhonePe No. :</th>
										<td>N/A</td>
										<th scope="row">Google Pay No. :</th>
										<td>N/A</td>
										<th scope="row">Paytm No. :</th>
										<td>N/A</td>
										
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
	