
<?php 
session_start();
include('files/dbcon.php');
$id=$_SESSION['id'];
$sql="select * from admin_login where id='$id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);
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
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
          <h2>USER LIST</h2>

        </div>
      </div>
    </div>


<div class="col-12">
			<div class="card">
				<div class="card-body">
			
     
       
			  <!--<h4 class="card-title d-flex align-items-center justify-content-between">Users Query List</h4>-->
               <div class="row"><div class="col-sm-12">
<div class="dt-ext table-responsive demo-gallery">
                <table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
					<thead>
					  <tr  role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 88.6px;">Sl.No</th>
					  <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 238.6px;">Name</th>
					  <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 238.6px;">Mobile</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Email ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">User Password</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Pin</th>
					<!--<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Approve</th>-->
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Delete User</th>
			 <th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="activate to sort column ascending" style="width: 88.6px;" id="myBtn">Profile</th>
				</tr>
					</thead>
			  <tbody>
                          <tr>
                        <?php $ret=mysqli_query($con,"select * from register");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>
                              <tr>
                                  <td align="center"><?php echo $cnt;?></td>
                                  <td align="center"><?php echo $row['username'];?></td>
                                  <td align="center"><?php echo $row['mobile'];?></td>
                                  <td align="center"><?php echo $row['email'];?></td>
                                  <td align="center"><?php echo $row['password'];?></td>
                                  <td align="center"><?php echo $row['mpin'];?></td>
                                 <!--<td align="center"> <a href="approve.php?ep=<?php echo $row['mobile'];?>"-->
                                 <!--    button id="ap" class="p-1 btn-danger" onClick="return confirm('Do you really want to Approve The User');">Approve</button></a>-->
                                 <!-- </td>-->
                                  <td align="center"> <a href="delete1.php?id=<?php echo $row['mobile'];?>"
                                     button  class="btn btn-danger" onClick="return confirm('Do you really want to delete');">Delete</button></a>
                                  </td>
                                  <td>
                                     <!--<button type="submit" class="btn btn-primary "  id ="myBtn"><a href=fd.php?n=<?php echo $row['username'];?>&m=<?php echo $row['mobile'];?>&e=<?php echo $row['email'];?>&p=<?php echo $row['password'];?>&mpin=<?php echo $row['mpin'];?>>view</a></button>-->
                                     <button type="submit" class="btn btn-primary "  id ="myBtn"><a href=fd.php?e=<?php echo $row['email'];?>&m=<?php echo $row['mobile'];?>>view</a></button>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                            
                          
                        </tbody>
				</div>
			
	</div>
       
       
 </table></div></div></table></div></div></div></div></div></div></div>
       
 <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
                          <?php $ret=mysqli_query($con,"select * from register");
                            
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
		<div class="row row_col">
			<div class="col-xl-4">
				<div class="card overflow-hidden h100p">
				
						<div class="row">
							<div class="col-7">
								<div class="text-primary p-3">
									<h5 class="text-primary"><?php echo $row['username'];?></h5>
									<p><?php echo $row['mobile'];?></p>
								</div>
							</div>
						
							</div>
						</div>
					</div>
					<div class="card-body pt-0">
						<div class="row">
							<div class="col-sm-4">
							 <div class="col-5 align-self-end">
                <img src="files/logo1.jpg" alt=""  class="img-fluid">
              </div>
								
							<div class="row">
										<div class="col-6">
											<p class="text-muted mb-0">Security Pin</p>
											<h5 class="font-size-15 mb-0"><?php echo $row['mpin'];?></h5>
										</div>
										<div class="col-6">
											<button class="btn btn-primary btn-sm" id="changePin">Change</button>
										</div>
									</div>
									
										<div class="col-sm-6">
								<div class="mt-3">
									<button class="btn btn-success btn-sm w-md btn-block" id="adFund">Add Fund</button>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mt-3">
									<button class="btn btn-warning btn-sm w-md btn-block" id="withdrawFund">Withdraw Fund</button>
								</div>
							</div>
									</div>

							
                                        
					
							
						
					
					
					
				
    <div class="col-xl-8">
				<div class="card h100p">
					<div class="card-body">
					    
					    
						<h4 class="card-title mb-4">Personal & Payment Details</h4>
						<div class="table-responsive">
							<table class="table table-nowrap mb-0">
								<tbody>
									<tr>
										<th scope="row">Full Name :</th>
										<td><?php echo $row['username'];?></td>
										<th scope="row">Email :</th>
										<td><?php echo $row['email'];?></td>
									</tr>
									<tr>
										<th scope="row">Mobile :</th>
										<td><?php echo $row['mobile'];?>										
										</td>
										<th scope="row">Password :</th>
										<td><?php echo $row['password'];?></td>
									</tr>
									<tr>
										
									<th scope="row">Address :</th>
										<td>N/A</td>
									</tr>
									<tr>
									<th scope="row">Bank Name :</th>
										<td>N/A</td>
                                        <th scope="row">Branch Name :</th>
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
										<td>09 May 2022 09:21:19 PM</td>
										<th scope="row">Last Seen :</th>
										<td><?php echo date(" jS \of F Y h:i:s A") ;?></td>
									</tr>
									 <?php }?>
								</tbody>
							</table>
						</div>
				</p>	</div>
				</div>
			</div>
			
		
<script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
     
                   
 


 <?php include('footer.php');?>
 </body>
</html>