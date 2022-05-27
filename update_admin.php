<?php
        include "files/dbcon.php";
    	$sql="SELECT * FROM `admin_login`";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($rs);
        
        
        //update details
        if(isset($_POST['submit']))
        {
              $a=$_POST['a'];
              $b=$_POST['b'];
              $c=$_POST['c'];
              $d=$_POST['d'];
              $e=$_POST['e'];
              $sql="UPDATE `admin_login` SET `name`='$a',`email`='$b',`phone_no`='$c',`whatsapp_no`='$d',`address`='$e' WHERE email='$b'";
              $rs=mysqli_query($con,$sql);
              if($rs)
                  {
                      ?>
                        <script>
                            alert("Admin Details Update SuccessFull");
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
                
                   //header('location:product.php');
                     $URL="update_admin.php";
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
   
<?php include('sidenav.php');?>


<div class="main-content">  <div class="page-content">
    <div class="container-fluid">
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-0" >
            
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <!--value="<?php echo $r; ?>"-->
                          <h6 class="font-weight-light">Update Admin Details</h6>
                          <form class="pt-3" Method="POST">
                            <div class="form-group">
                                <h7>Name</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['name']?>" placeholder="Enter Amount" name="a" required=""><br>
                              <h7>Email</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['email']?>" placeholder="Enter Gateway" name="b" required="" ><br>
                              <h7>Phone No.</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['phone_no']?>" placeholder="Enter User ID" name="c" required=""><br>
                              <h7>Whatsapp No.</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['whatsapp_no']?>" placeholder="Enter User Name" name="d" required=""><br>
                              <h7>Address</h7>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['address']?>" placeholder="Enter Phone Number" name="e" required=""><br>
                              
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <center><input type="submit" name="submit" onClick="return confirm('Do you really want to Update Admin Login Details??');" value="Update" class="btn btn-success btn-lg w-20 font-weight-medium auth-form-btn"></center>
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
  </div></div></div>

<?php include('footer.php');?>


</body>
</html>