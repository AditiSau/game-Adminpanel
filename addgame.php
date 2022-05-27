<?php
 include('files/dbcon.php');
 if(isset($_POST['ins']))
 {
     $gid=$_POST['gid'];
     $gname=$_POST['gname'];
     $actime=$_POST['actime'];
     $closetime=$_POST['deactime'];
     $day=$_POST['day'];
     
     $insert="INSERT INTO `game_list`(`id`, `game_id`, `game_name`, `a_time`, `c_time`, `game_status`, `day`) VALUES ('','$gid','$gname','$actime','$closetime','OFF','$day')";
     $rs=mysqli_query($con,$insert);
     if($rs)
     {
          ?>
         <script>
             alert("Add Game Successful");
         </script>
         <?php
     }
     else
     {
         ?>
         <script>
             alert("Add Game Failed");
         </script>
         <?php
     }
     $URL="addgame.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
 
<style>
   
</style>

        
<?php require("sidenav.php")?>
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
				  <div class="card-body">
				                           <div class="form-group">              
      
        <form method="POST"class="pt-3" id="addForm">
          Game ID : <input class="custom-select custom-select-sm form-control form-control-sm" type="text" name="gid" id="gid"><br>
          Game Name : <input class="custom-select custom-select-sm form-control form-control-sm" type="text" name="gname" id="gname"><br>
          
          Game Active Time : <input class="custom-select custom-select-sm form-control form-control-sm" type="time" name="actime" id="gname"><br>
          Game Deactive Time : <input class="custom-select custom-select-sm form-control form-control-sm" type="time" name="deactime" id="gname"><br>
          <label >Day:</label>

<select name="day" class="custom-select custom-select-sm form-control form-control-sm">
    <option value=""></option>
  <option value="sunday">Sunday</option>
  <option value="monday">Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednessday">Wednesday</option>
  <option value="thursday">Thursday</option>
  <option value="friday">Friday</option>
  <option value="saturday">Saturday</option>
  <option value="Allday">All Day</option>
</select><br>
         
          <input type="submit" id="save-button" class="btn btn-primary" name="ins" value="Save">
        </form>
   </div>
      </div>
                    <table class="table table-bordered">	<div class="dt-ext table-responsive demo-gallery">
      
       
                 <thead class="table-secondary p-5">
                     
    
                        <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Game ID</th>
                              <th scope="col">Game Name</th>
                              <th scope="col">Active Time</th>
                              <th scope="col">Close Time</th>
                              <th scope="col">Day</th>
                              <th scope="col">Game Status</th>
                              <th scope="col">Active Game</th>
                              <th scope="col">Deactive Game</th>
                               <th scope="col">Edit Game</th>
                             <th scope="col">Delete Game</th>
                        </tr>
                       
                      </thead>
                      <tbody>
                        
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from game_list ORDER BY id DESC";
               $query=mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);
             
             
               while($res=mysqli_fetch_array($query))
               {
                //   $cid=$res['Company_ID'];
            ?>
                <tr> 
                               <td><?php echo $res['id']; ?></td>
                               <td id="zzy"><?php echo $res['game_id']; ?></td>
                               <td><?php echo $res['game_name']; ?></td>
                               <td><?php echo $res['a_time']; ?></td>
                               <td><?php echo $res['c_time']; ?></td>
                               <td><?php echo $res['day']; ?></td>
                               <td><?php echo $res['game_status']; ?></td>
                               
                             <td id="mbtn">
                                <a  href="active.php?id=<?php echo $res['game_id'];?>"
                                     button class="btns deact edit-btn btn btn-success" onClick="return confirm('Do you really want to Active');">Active</button></a>
                                     </td>
                               

                               <td id="mbtn">
                                <a href="deactive.php?id=<?php echo $res['game_id'];?>"
                                     button class="btns deact edit-btn btn btn-secondary" onClick="return confirm('Do you really want to Deactive');">Deactive</button></a>
                                     </td>
                                     <!--<a  id="mbtn" -->
                                     <!--button class="btns deact edit-btn btn btn-secondary" data-id="<?php echo $res['game_id']; ?>" data-at="<?php echo $res['a_time']; ?>"  data-ct="<?php echo $res['c_time']; ?>" data-td="<?php echo $res['day']; ?>" onclick="deactive.php">Deactive</button></a>-->

                               
                               <td> <a href="edit_game.php?ip=<?php echo $res['game_id'];?>&epp=<?php echo $res['game_name']; ?>&d=<?php echo $res['a_time']; ?>&e=<?php echo $res['c_time']; ?>&r=<?php echo $res['day'];?>"
                                      id="edit" button class="btns btn btn-primary" onClick="return confirm('Do you really want to Edit Game');">Edit</button></a>
                               </td>
                               <td> <a href="del_game.php?isp=<?php echo $res['game_id'];?>&epppp=<?php echo $res['game_name']; ?>"
                                       button class="btns btn btn-danger" onClick="return confirm('Do you really want to Delete Game');">Delete</button></a>
                               </td>
                               
                               
                          
                   
                </tr>
             <?php
            } 

            ?>

                      </tbody>
                    </table>
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
    <!-- <script src="js/jquery.js"></script> -->
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
    </form>
  
<?php require("footer.php")?>
</body>
</html>
