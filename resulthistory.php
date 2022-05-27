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
<script src="https://code.jquery.com/jquery-3.2.1.min.js">                                                                   </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">                                                                   </script>
    
        
  </head>
   <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
  <body>
   
        <!-- partial -->
        <!--****************************************-->
      <?php require('sidenav.php');?>
     
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
	   <!--<div class="row"><div class="col-sm-12">-->
			<div class="card">
			  <div class="card-body">
			 <div class="dt-ext table-responsive demo-gallery">
			  <!--<h4 class="card-title d-flex align-items-center justify-content-between">Users Query List</h4>-->
               <div class="row">                                                                   <div class="col-sm-12">                                                                   <table class="table table-striped table-bordered dataTable no-footer" id="userQueryList" role="grid" aria-describedby="userQueryList_info" style="width: 1200px;">
					<thead>
					  <tr role="row">                                                                   <th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">ID</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Game Name</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">Game Time</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Game Date</th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 144.6px;">Winner Bet Time</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 144.6px;">Open Panna</th>
				
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Close Panna</th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 141.6px;">Remove Winner</th>
						
				
				</tr>
					</thead>
					<!--<tbody>                                                                   <tr class="odd">                                                                   <td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>                                                                   </tr>                                                                   </tbody>                                                                   </table>-->
					<!--<div id="userQueryList_processing" class="dataTables_processing card" style="display: none;">Processing...</div>-->
					<!--<div class="row">                                                                   <div class="dataTables_paginate paging_simple_numbers" id="userQueryList_paginate">                                                                   <ul class="pagination"> </li>                                                                   </ul>                                                                   </div>                                                                   </div>-->
				 
					<!--<div id="msg">                                                                   </div>-->
					  <tbody>
                       
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from demo ";
               $query=mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);
             
             
               while($res=mysqli_fetch_array($query))
               {
                //   $cid=$res['Company_ID'];
            ?>
                <tr> 
                               <td>                                                                   <?php echo $res['id']; ?>                                                                   </td>
                               <td>                                                                   <?php echo $res['game_name']; ?>                                                                   </td>
                               <td>                                                                   <?php echo $res['game_time']; ?>                                                                   </td>
                               <td>                                                                   <?php echo $res['game_date']; ?>                                                                   </td>
                               
                              
                               
                               <td>                                                                   <?php echo $res['beton']; ?>                                                                   </td>
                               <td><?php echo $res['bet_number'];?></td>
                          <td><?php echo $res['choice'];?></td>
                               

                               
                               <td> <a href="winner_delete.php?id=<?php echo $res['id'];?>"
                                     button class="btn btn-danger" onClick="return confirm('Do you really want to Remove');">Remove</button>                                                                   </a>
                               </td>
                               
                               
                          
                   
                </tr>
             <?php
            }

            ?>

                      </tbody></table>
				</div>
			</div>
		</div>
	</div>
       
       
        
       	</div>
			</div>
		</div>
	</div>
       
     </div>
                   
 </div>
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js">                                                                   </script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js">                                                                   </script>
    <script src="./vendors/moment/moment.min.js">                                                                   </script>
    <script src="./vendors/daterangepicker/daterangepicker.js">                                                                   </script>
    <script src="./vendors/chartist/chartist.min.js">                                                                   </script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js">                                                                   </script>
    <script src="js/misc.js">                                                                   </script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js">                                                                   </script>
    <!-- End custom js for this page -->
  <?php include('footer.php');?> </body>

 </html>
</html>