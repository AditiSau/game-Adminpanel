<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y');
if(isset($_POST['submit']))
{
      include 'files/dbcon.php';
      $a=$_POST['a'];
      $b=$_POST['b'];
      $c=$_POST['c'];
      $d=$_POST['d'];
      $e=$_POST['e'];
      $sql="select * from `withdrawal` where `uid`='$c'";
      $rs=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($rs);
      $r=$row['uid'];
      if($r==$c)
      {
          $update_query="UPDATE `withdrawal` SET `date`='$date',`amount`=`amount`+'$a',`uid`='$c',`phone`='$e' WHERE `uid`='$c'";
          include 'files/dbcon.php';
          $uquery=mysqli_query($con,$update_query);
          if($uquery)
              {
                 ?>
                 <script>
                     alert("Money Update To Wallet Successful");
                 </script>
                 <?php
              }
              else
              {
                   ?>
                 <script>
                     alert("Money Updated Failed");
                 </script>
                 <?php
              }
          
          
      }
      else
      {
          
          $insert_query="INSERT INTO `withdrawal`(`sl`, `date`, `amount`, `getway`, `uid`, `name`, `phone`) VALUES ('','$date','$a','$b','$c','$d','$e')";
          include 'files/dbcon.php';
        //include_once('db.php');
          $iquery=mysqli_query($con,$insert_query);
          if($iquery)
          {
             ?>
             <script>
                 alert("Money Add To Wallet Successful");
             </script>
             <?php
          }
          else
          {
               ?>
             <script>
                 alert("Money Added Failed");
             </script>
             <?php
          }
          $URL="addfund.php";
          echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
          exit;
      }   
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
    <!-- End layout styles --> <link rel="shortcut icon" href="files/logo1.jpg" />
    <style>
                		
                		/**********************/

	
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
          <h4 class="card-title">Add Money To Wallet</h4>
                        
                          <form class="pt-3" Method="POST">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter Amount" name="a" required=""><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter Gateway" name="b" ><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter User ID" name="c" required=""><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter User Name" name="d" ><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter Phone Number" name="e" required=""><br>
                              
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <input type="submit" name="submit" value="submit" class="btn btn-block btn-primary w-20" style="width:20%;font-size:15px;">
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
 <?php include("footer.php")?> </body>
</html>