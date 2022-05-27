<?php
        $ids=$_GET['ip'];
        $idm=$_GET['epp'];
        $idp=$_GET['d'];
        $idq=$_GET['e'];
        $idr=$_GET['r'];
        include "files/dbcon.php";
    // 	$sql="SELECT * FROM `game_list` where game_id='$id'";
    //     $rs=mysqli_query($con,$sql);
    //     $row=mysqli_fetch_array($rs);
    
    
       //update details
        if(isset($_POST['submit']))
        {
              $a=$_POST['a'];
              $b=$_POST['b'];
               $c=$_POST['c'];
              $d=$_POST['d'];
              $day=$_POST['day'];
              $sql="UPDATE `game_list` SET `game_id`='$a',`game_name`='$b',`a_time`='$c',`c_time`='$d',`day`='$day' WHERE game_id='$ids'";
              $rs=mysqli_query($con,$sql);
              if($rs)
                  {
                      ?>
                        <script>
                            alert("Game Update SuccessFull");
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
                     $URL="addgame.php";
                        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                        exit;
                        }
           
        
        

?>




<?php 
session_start();
include('files/dbcon.php');
$id=$_SESSION['id'];
$sql="select * from admin_login where id='$id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
    
 <?php include("sidenav.php")?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" >
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-0" >
                      <h1  class="card-title mb-sm-0"> Welcome Admin</h1>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <!--value="<?php echo $r; ?>"-->
                          <h6 class="font-weight-light">Update Game Details</h6>
                          <form class="pt-3" Method="POST">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-lg" value="<?php echo $ids;?>" placeholder="Enter Game ID" name="a" required=""><br>
                              <input type="text" class="form-control form-control-lg" value="<?php echo $idm;?>" placeholder="Enter Game Name" name="b" required="" ><br>
                              
                                <input type="time" class="form-control form-control-lg" value="<?php echo $idp;?>" placeholder="Enter Game Name" name="c" required="" ><br>
                                <input type="time" class="form-control form-control-lg" value="<?php echo $idq;?>" placeholder="Enter Game Name" name="d" required="" ><br>
                               <input type="text" class="form-control form-control-lg" value="<?php echo $idr;?>" readonly  name="" required="" ><br>
                               <select name="day">
                                   <option>--Change The Day--</option>
                                    <option value="Sunday">Sunday</option>
                                     <option value="Monday">Monday</option> <option value="Tuesday">Tuesday</option> <option value="Wednesday ">Wednesday </option> <option value="Thursday">Thursday</option><option value="Friday ">Friday </option> <option value="Saturday ">Saturday </option> 
                               </select>
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <input type="submit" name="submit" onClick="return confirm('Do you really want to Update Game Details??');" value="Update" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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
    <?php include("footer.php");?>
  </body>
</html>