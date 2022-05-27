<?php
        $id=$_GET['id'];
        include "files/dbcon.php";
    	$sql="SELECT * FROM `withdrawal` where uid='$id'";
        $rs=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($rs);
        
        
        //update details
        if(isset($_POST['submit']))
        {
              $a=$_POST['a'];
              $b=$_POST['b'];
              $c=$_POST['c'];
              $sql="UPDATE `withdrawal` SET `amount`=`amount`-'$c' WHERE uid='$id'";
              $rs=mysqli_query($con,$sql);
              if($rs)
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
                
                   //header('location:product.php');
                     $URL="removemoney.php";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                        exit;
                        }
          

?>



<!DOCTYPE html>
<html lang="en">
  <head>
  
  </head>
  <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
  <body>
    <?php include("sidenav.php");?>  <form method="post">
      <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     
             <!--<a class="dropdown-item" href="logout.php" onClick="return confirm('Do you really want to Sign Out!');"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>-->
          </ul> 
          <!--***********************-->
        
          
        
       
                    <div class="row">
                      <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <!--value="<?php echo $r; ?>"-->
                          <h6 class="font-weight-light">Update Game Details</h6>
                          <form class="pt-3" Method="POST">
                            <div class="form-group">
                              <h5>User ID</h5>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['id']?>" name="a" required=""><br>
                              <h5>User Amount</h5>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $row['amount']?>"  name="b" required="" ><br>
                              
                              <h5>Withdrawl Amount</h5>
                              <input type="text" class="form-control form-control-lg" value=""  placeholder="Enter The Withdrawl Amount" name="c" required="" ><br>
                              
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <input type="submit" name="submit" onClick="return confirm('Do you really want to Withdrawl User Amount ??');" value="Update" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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
  </body>
</html>