<?php

 include 'files/dbcon.php';

 
  $id=$_GET['id'];
  
  if(isset($_POST['submit'])){
      $b=$_POST['b'];
      $c=$_POST['c'];
       $d=$_POST['d'];
  
  
   $updatequery="UPDATE `game_list` SET `a_time`='$b',`c_time`='$c',`game_status`='ON',`day`='$d' WHERE game_id='$id'";
   $query=mysqli_query($con,$updatequery);
  
  
  if($query)
  {
      ?>
        <script>
            alert("Game Activate SuccessFull");
        </script>
      <?php
  }
  else
  {
      ?>
        <script>
            alert("Game Activate UnsuccessFull");
        </script>
      <?php
  }

  //header('location:product.php');
     $URL="gamename.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
  }
?>



<!DOCTYPE html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
     <link rel="shortcut icon" href="files/logo1.jpg" />
    <style>
               
                           

	
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

         <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
 
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
 
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
        
  </head>
   <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
  <body>
      
<?php require("sidenav.php")?>
<div class="main-content">  <div class="page-content">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
           

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
                    <div class="row">
                      <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <!--value="<?php echo $r; ?>"-->
                          <!--<h6 class="font-weight-light">Change Your UPI ID</h6>-->
                          <form class="pt-3" Method="POST">
                            <!--<div class="form-group">-->
                            <!--  <input type="text" class="form-control form-control-lg" value="<?php echo $row['name']?>" placeholder="Enter Amount" name="a" required=""><br>-->
                            <!--  <input type="text" class="form-control form-control-lg" value="<?php echo $row['email']?>" placeholder="Enter Gateway" name="b" required="" ><br>-->
                            <!--  <input type="text" class="form-control form-control-lg" value="<?php echo $row['phone_no']?>" placeholder="Enter User ID" name="c" required=""><br>-->
                            <!--  <input type="text" class="form-control form-control-lg" value="<?php echo $row['whatsapp_no']?>" placeholder="Enter User Name" name="d" required=""><br>-->
                            <!--  <input type="text" class="form-control form-control-lg" value="<?php echo $row['address']?>" placeholder="Enter Phone Number" name="e" required=""><br>-->
                              
                            <!--</div>-->
                            <!--<div class="mt-3">-->
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                            <!--  <input type="submit" name="submit" onClick="return confirm('Do you really want to Update Admin Login Details??');" value="Update" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">-->
                            <!--</div>-->
                            
                            <div class="card h100p">
					<div class="card-body">
						<h4 class="card-title">Change Game Schedule</h4>
						<form class="theme-form mega-form" id="adminUPIFrm" name="adminUPIFrm" method="post">
							<!--<input type="hidden" name="a" value="<?php echo $row['email']?>">-->
							
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Active Game</label>
									<input class="form-control" type="text" name="" id="google_upi_payment_id" value="<?php echo $id;?>" placeholder="Enter New Security Pin" readonly="readonly">
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Active Time</label>
									<input class="form-control" type="time" name="b" id="phonepay_upi_payment_id"  >
								</div>
							</div>
							
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">Close Time</label>
									<input class="form-control" type="time" name="c" id="" value="" >
								</div>
							</div>
						<div class="row">
								<div class="form-group col-12" >	<label class="col-form-label">Day:</label>

<select  class="form-control" name="d" >
    <option value="">Choose Day</option> 
  <option value="sunday">Sunday</option>
  <option value="monday">Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednessday">Wednesday</option>
  <option value="thursday">Thursday</option>
  <option value="friday">Friday</option>
  <option value="saturday">Saturday</option>
  <option value="Allday">All Day</option>
</select>
						</div>
							</div>		
							<div class="form-group">
								<input type="submit" class="btn btn-primary waves-light m-t-10" id="upiSubmitBtn" name="submit" onClick="return confirm('Do you really want to Update The Schedule??');" value="Update">
							</div>
							<div class="form-group">
								<div id="error_upi"></div>
							</div>
						</form>
					</div>
				</div>
                            
                            
                          </form>
                        </div>
                      </div>
                    </div>
               </div>
              </div>
            </div>
           
                   
                   
                            
                   
 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © jssuppliers.com 2021</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
    </form>
  </div></div></div></div></div></div></div>
  <?php include("footer.php")  ?>
</body>
</html>