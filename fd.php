<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
include('files/dbcon.php');
$email=$_GET['e'];
$mobi=$_GET['m'];

$sql="SELECT * FROM `register` WHERE email='$email'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);

//   $name=$_GET['n'];
//   $mobile=$_GET['m'];
// $email=$_GET['e'];
//   $password=$_GET['p'];
//   $mpin=$_GET['mpin'];

?>
<?php
if(isset($_POST['update']))
{
        //   $a=$_POST['a'];
        $b=$_POST['mob'];
        $c=$_POST['amt'];
        
        $updatequery="UPDATE `withdraw` SET `date`='$date',`status`='DONE' WHERE mobile='$b' AND `status`='Pending'";
        $sql="UPDATE `withdrawal` SET `amount`=`amount`-'$c' WHERE phone='$b'";
        $rs=mysqli_query($con,$sql);
        $rs1=mysqli_query($con,$updatequery);
        if($rs && $rs1)
        {
        ?>
        <script>
        alert("Withdrawl Update SuccessFull");
        </script>
        <?php
        }
        else
        {
        ?>
        <script>
        alert("Update Failed!!");
        </script>
        <?php
        }
        $URL="usermanagement.php";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  exit();
        
}
?>

<!--//add money//-->
<?php
if(isset($_POST['update1']))
{
        //   $a=$_POST['a'];
        $mobile=$_POST['mobile'];
        $amount=$_POST['amount'];
        
       // $updatequery="UPDATE `withdraw` SET `date`='$date',`status`='DONE' WHERE mobile='$b' AND `status`='Pending'";
        $sql="UPDATE `withdrawal` SET `amount`=`amount`+'$amount' WHERE phone='$mobile'";
        $rs=mysqli_query($con,$sql);
        //$rs1=mysqli_query($con,$updatequery);
        if($rs)
        {
        ?>
        <script>
        alert("Add Money Update SuccessFull");
        </script>
        <?php
        }
        else
        {
        ?>
        <script>
        alert("Update Failed!!");
        </script>
        <?php
        }
        $URL="usermanagement.php";
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  exit();
        
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<style type="text/css">
		<link rel="shortcut icon" href="files/logo1.jpg" />
		</style>
	</head>
	<body>
		<?php include('sidenav.php');?>
		
		<div class="main-content">  <div class="page-content">
			<div class="container-fluid">
			    <div class="dt-ext table-responsive demo-gallery">
					  <div id="fundRequestList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
				<div class="row">
					<div class="col-12">
						<div class="page-title-box d-flex align-items-center justify-content-between">
						<h4 class="mb-0 font-size-18">User Details</h4></div>
					</div>
					<div class="card-body pt-0">
						<div class="row">
							<div class="col-sm-4">
								<div class="avatar-md profile-user-wid mb-4">
									<img src="files/user.png" alt="" class="img-thumbnail rounded-circle">
									<h3><?php echo $row['username'];?></h3>
									
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-12">
							<div class="pt-4">
								<div class="card-body pt-4">
									<div class="card h100p">
										<div class="card-body">
											
											<div class="row">
												<div class="col-12">
													<p class="text-muted mb-0">Security Pin</p>
													<h5 class="font-size-15 mb-0"><?php echo $row['mpin'];?></h5>
												</div>
												<div class="col-md-4">
													<!--<button class="btn btn-primary btn-sm" id="changePin">Change</button>-->
													<a href = "change_pin.php?s=<?php echo $row['email']; ?>" class="btn btn-primary btn-sm" id="changePin">Change</a>
												</div>
												
											
													
												</div>
											</div>
											
											
											
											
											
											
											
											
											
											
											
											
											<div class="col-md-12">
												
												
												<div class="card h100p">
													<div class="card-body">
														
														
														<h4 class="card-title mb-4">Personal & Payment Details</h4>
														<div class="table-responsive">
															<table class="table table-nowrap mb-0">
																<tbody>
																	<tr>
																		<th scope="row">Full Name : &nbsp <?php echo $row['username'];?></th>
																		<td></td>
																		<th scope="row">Email :&nbsp <?php echo $row['email'];?></th>
																		<td></td>
																	</tr>
																	<tr>
																		<th scope="row">Mobile :&nbsp <?php echo $row['mobile'];?></th>
																		<td>
																		</td>
																		<th scope="row">Password :&nbsp <?php echo $row['password'];?></th>
																		<td></td>
																	</tr>
																	<tr>
																		
																		<th scope="row">Address : </th>
																		<td>N/A</td>
																	</tr>
																	<tr>
																		<th scope="row">Bank Name : </th>
																		<td>N/A</td>
																		<th scope="row">Branch Name : </th>
																		<td>N/A</td>
																	</tr>
																	<tr>
																		<th scope="row">A/c Holder Name :</th>
																		<td>N/A</td>
																		<th scope="row">IFSC Code :</th>
																		<td>N/A</td>
																		
																	</tr>
																	<tr>
																		<th scope="row">A/c Number :</th>
																		<td>N/A</td>
																		<th scope="row">Phonepe/Google Pay Number :</th>
																		<td>N/A</td>
																	</tr>
																	<tr>
																		<th scope="row">Creation Date :</th>
																		<td><?php echo $row['created_at'];?></td>
																		<th scope="row">Last Seen :</th>
																		<td><?php echo date(" jS \of F Y h:i:s A") ;?></td>
																	</tr>
																	
																</tbody>
															</table><br>

															<div class="col-6">
															     <!--<a href="addfund.php"<button  type="button" class="btn btn-primary">Add Amount</button></a>-->
															     <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal1">
													Add Money
													</button>
													
													<!-- Modal -->
													<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Add Money</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form class="pt-3" Method="POST">
																		<div class="form-group">
																			
																			<h5>Add Amount</h5>
																			<input type="text" class="form-control form-control-lg" value=""  placeholder="Enter The Add Amount" name="amount" required="" ><br>
																			<input type="text" class="form-control form-control-lg" value="<?php echo $mobi; ?>"  placeholder="Enter The Add Amount" name="mobile" required="" hidden>
																			
																		</div>
																		<div class="mt-3">
																			<!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
																			<input type="submit" name="update1" onClick="return confirm('Do you really want to Add User Amount ??');" value="Update" class="btn btn-primary">
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	<!--<button type="button" class="btn btn-primary">Save changes</button>-->
																</div>
															</div>
														</div>
													</div>
													
													
													
															     </div>	
															<br> <div class="col-6">
													
													<!--<button class="btn btn-primary btn-sm" id="changePin">Change</button>-->
													<!-- Button trigger modal -->
													
													<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
													Withdrawl Money
													</button>
													<!-- Modal -->
													<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Withdrawl Money</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form class="pt-3" Method="POST">
																		<div class="form-group">
																			
																			<h5>Withdrawl Amount</h5>
																			<input type="text" class="form-control form-control-lg" value=""  placeholder="Enter The Withdrawl Amount" name="amt" required="" ><br>
																			<input type="text" class="form-control form-control-lg" value="<?php echo $mobi; ?>"  placeholder="Enter The Withdrawl Amount" name="mob" required="" hidden>
																			
																		</div>
																		<div class="mt-3">
																			<!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
																			<input type="submit" name="update" onClick="return confirm('Do you really want to Withdrawl User Amount ??');" value="Update" class="btn btn-primary">
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	<!--<button type="button" class="btn btn-primary">Save changes</button>-->
																</div>
															</div>
														</div>
													</div>
														</div>
													</div>
												</div>
											</div>
										 
										 
										 	
										 
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
       <!--User Bet Details-->
			  <h4 class="card-title d-flex align-items-center justify-content-between"><?php 
$sql="SELECT * FROM `register` WHERE email='$email'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs); echo $row['username'];?>'s Betting Status</h4>
               <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
					<thead>
					  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">User ID</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Game ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Game Name</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Betting Number</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;">Betting Price</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Betting Date Time</th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Betting Status Time</th>
						<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Choise</th>
							<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Mobile</th>
				
				</tr>
					</thead>
				<tbody>
				    <?php 
				    $sql="SELECT * from userbid Where mobile='$mobi'";
				    $query=mysqli_query($con,$sql);
               $nums=mysqli_num_rows($query);
             
             
                while($res=mysqli_fetch_array($query))
                {?>
                
                
                <tr><td><?php echo $res['userid']; ?></td>
                <td><?php echo $res['gameid']; ?></td>
                <td><?php echo $res['gamename']; ?></td>
                <td><?php echo $res['ballnumber']; ?></td>
                <td><?php echo $res['bidprice']; ?></td>
                <td><?php echo $res['biddate']; ?></td>
                <td><?php echo $res['beton']; ?></td>
                <td><?php echo $res['choice']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                
                
                </tr><?php }?>
				</tbody>
					</table>
					
					
					</div>
														</div>
													</div>
												</div>
											</div>
										 
										  <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
          <h4 class="card-title d-flex align-items-center justify-content-between"><?php 
          
$sql="SELECT * FROM `register` WHERE email='$email'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs); echo $row['username'];?>'s Withdrawl Request Status</h4>
          <div class="dt-ext table-responsive demo-gallery">
                    <div>
                      <table class="table table-bordered">
                        <thead>
					  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">Sl.No</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Date</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Amount</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">User ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;">Phone</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Status</th>
					<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Payment</th>-->
					<!--	<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Reject</th>-->
				</tr>
					</thead>
                        <tbody>
                        <?php $ret=mysqli_query($con,"select * from `withdraw` WHERE mobile=$mobi AND `status`='Pending'");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td align="center"><?php echo $cnt;?></td>
                                  <!-- <td><?php echo $row['sl'];?></td> -->
                                  <td align="center"><?php echo $row['date'];?></td>
                                  <td align="center"><?php echo $row['amount'];?></td>
                        
                                  <td align="center"><?php echo $row['userid'];?></td>
                                  
                                  <td align="center"><?php echo $row['mobile'];?></td>
                                  <td align="center"><?php echo $row['status'];?></td>
                                  <!--<td align="center"> <a href="due.php?id=<?php echo $row['userid'];?>&ep=<?php echo $row['amount']; ?>"-->
                                  <!--   button  class="p-1 btn-danger" onClick="return confirm('Do you really want to Paid ?');">Pay</button></a>-->
                                  <!--</td>-->
                                  <!--<td align="center"> <a href="reject.php?id=<?php echo $row['userid'];?>"-->
                                  <!--   button  class="p-1 btn-danger" onClick="return confirm('Do you really want to Paid ?');">Reject</button></a>-->
                                  <!--</td>-->
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                         
                        </tbody>
                      </table>
                    </div></div></div></div></div>
                    
                    
										  <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
     <h4 class="card-title d-flex align-items-center justify-content-between"><?php 
			  
			  
$sql="SELECT * FROM `register` WHERE email='$email'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);

			  echo $row['username'];?>'s Add Fund Request Status </h4>

          <div class="dt-ext table-responsive demo-gallery">
                    <div>
                      <table class="table table-bordered">
                        <thead>
					  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">Sl.No</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">User ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Transaction ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Date</th>
				<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;">Phone</th>-->
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Mobile</th>
					<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Payment</th>-->
					<!--	<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Reject</th>-->
				</tr>
					</thead>
                        <tbody>
                        <?php $ret=mysqli_query($con,"select * from `photos` WHERE mobile=$mobi");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td align="center"><?php echo $cnt;?></td>
                                  <!-- <td><?php echo $row['sl'];?></td> -->
                                  <td align="center"><?php echo $row['userid'];?></td>
                                  <td align="center"><?php echo $row['transaction_id'];?></td>
                        
                                  <!--<td align="center"><?php echo $row['image'];?></td>-->
                                  
                                  <td align="center"><?php echo $row['date'];?></td>
                                  <td align="center"><?php echo $row['mobile'];?></td>
                                  <!--<td align="center"> <a href="due.php?id=<?php echo $row['userid'];?>&ep=<?php echo $row['amount']; ?>"-->
                                  <!--   button  class="p-1 btn-danger" onClick="return confirm('Do you really want to Paid ?');">Pay</button></a>-->
                                  <!--</td>-->
                                  <!--<td align="center"> <a href="reject.php?id=<?php echo $row['userid'];?>"-->
                                  <!--   button  class="p-1 btn-danger" onClick="return confirm('Do you really want to Paid ?');">Reject</button></a>-->
                                  <!--</td>-->
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                         
                        </tbody>
                      </table>
                    </div>
										</div></div></div></div>
										
										  <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
       <!--User Bet Details-->
       
			  <h4 class="card-title d-flex align-items-center justify-content-between"><?php 
			  
			  
$sql="SELECT * FROM `register` WHERE email='$email'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);

			  echo $row['username'];?>'s Wallet Status </h4>
               <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
					<thead>
					  <tr>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Name</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Date</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 164.6px;">Amounnt</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Gateway</th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">User ID</th>
						
							<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Mobile</th>
				
				</tr>
					</thead>
				<tbody>
				    <?php 
				    $sql="SELECT * from withdrawal Where phone='$mobi'";
				    $query=mysqli_query($con,$sql);
               $nums=mysqli_num_rows($query);
             
             
                while($res=mysqli_fetch_array($query))
                {?>
                
                
                <tr>
                <td><?php echo $res['sl']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['date']; ?></td>
                <td><?php echo $res['amount']; ?></td>
                <td><?php echo $res['getway']; ?></td>
                <td><?php echo $res['uid']; ?></td>
    
                <td><?php echo $res['phone']; ?></td>
                
                
                </tr><?php }?>
				</tbody>
					</table>
					
					
					</div>
														</div>
													</div>
												</div>
											</div>
										</div></div></div></div></div></div></div>
										
										<?php require('footer.php');?>
									</body></html>