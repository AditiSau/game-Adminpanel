<?php
 include('files/dbcon.php');
 if(isset($_POST['submit']))
 {
     $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
     
     
     $insert="INSERT INTO `game_rate`(`id`, `game`, `rs`, `user_rs`) VALUES ('','$a','$b','$c')";
     $rs=mysqli_query($con,$insert);
     if($rs)
     {
          ?>
         <script>
             alert("Add Game Rate Successful");
         </script>
         <?php
     }
     else
     {
         ?>
         <script>
             alert("Add Game Rate Failed");
         </script>
         <?php
     }
     $URL="gamerateinsert.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
<style>
   
</style>

        
<?php require("sidenav.php")?>
<center>
    <div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
				  <div class="card-body" >
				                              
				                           
      	<div class="card">
      	    <center>
				  <div class="card-body"  style="padding:0% 20%;">
				                         
       
			    
					<form method="post" action=""class="bg-light px-5 pb-4 " >

						<h4 class="text-left py-4 text-dark">Insert Game Rate</h4>
						<div class="mb-3">
							
							<select class="custom-select  form-control " name="a">
								<option value="">Choose </option>
								<option value="Single Digit">Single Digit</option>
								<option value="Jodi Digit">Jodi Digit</option>
								<option value="Red Brackets">Red Brackets</option>
								<option value="Single Pana">Single Pana</option>
								<option value="Double Pana">Double Pana</option>
								<option value="Triple Pana">Triple Pana</option>
								<option value="Half Sangam Digits">Half Sangam Digits</option>
								<option value="Full Sangam Digits">Full Sangam Digits</option>
							
							</select>
							
						</div>
						<div class="mb-3">
							
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="b" value="1" readonly="readonly">
						</div>
						<div class="mb-3">
							
							<input type="text" class="form-control" id="" placeholder="enter ammount" name="c">
						</div>
						
											<center>	<input type="submit" name="submit" value="Submit" class="btn btn-warning btn-lg w-20 text-dark"  ></center>
												<!-- 
<br><br>
				<a type="submit" href="transaction.php"class="btn btn-primary btn-lg w-100" name="login" id="myBtn">Pay 349/-INR and Complete</a> -->
						 
 
						
					</form></div>
      
      	<div class="card">
				  <div class="card-body">
                    <table class="table table-bordered" style="text-align:center;">	<div class="dt-ext table-responsive demo-gallery">
      
       
                 <thead class="table-secondary p-5">
                     
    
                        <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Game </th>
                              <th scope="col">Rupees</th>
                              <th scope="col">User Rupees</th>
                            <th scope="col">Delete Game</th>
                        </tr>
                       
                      </thead>
                      <tbody>
                        
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from game_rate ORDER BY id DESC";
               $query=mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);
             
             
               while($res=mysqli_fetch_array($query))
               {
                //   $cid=$res['Company_ID'];
            ?>
                <tr> 
                               <td><?php echo $res['id']; ?></td>
                               
                               <td><?php echo $res['game']; ?></td>
                               <td><?php echo $res['rs']; ?></td>
                               <td><?php echo $res['user_rs']; ?></td>
                              
                             

                               
                               <td> <a href="del_gamerate.php?id=<?php echo $res['game'];?>"
                                       button class="btns btn btn-danger" onClick="return confirm('Do you really want to Delete Game Rate Detail?');">Delete</button></a>
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
           </div></div>
                   
                   
                            
                   
 
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
  
</center>
<?php require("footer.php")?>

</body>
</html>
