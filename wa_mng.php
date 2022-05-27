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
    <style>
                
   td .btn-danger{
              color:#fff;
                    background:red;
                        border-radius: 7px;
          }
          
         


#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 60%; /* Full width */
  height: 60%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  margin-top: -80px;
  /* display: block; */
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.xxx {
  position: absolute;
  top: 15px;
  right: 35px;
  color: white;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.xxx:hover,
.xxx:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }


                		
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
<div class="main-content">	<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="card">
				  <div class="card-body">
				  <h4 class="card-title">Fund Request List</h4>
					<div class="dt-ext table-responsive demo-gallery"><table class="table table-striped table-bordered dataTable no-footer" id="fundRequestList" role="grid" aria-describedby="fundRequestList_info" style="width: 1031px;">
                     <thead>
					  <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-sort="descending" aria-label="#: activate to sort column ascending" style="width: 90.6px;">Sl.No</th>
				 <th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 248.6px;">Date</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 174.6px;">User ID</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 154.6px;">Transection ID</th>
					<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 144.6px;">Phone</th>
				<th class="sorting" tabindex="0" aria-controls="userQueryList" rowspan="1" colspan="1" aria-label="Query: activate to sort column ascending" style="width: 144.6px;">Screenshot</th>
			
				</tr>
					</thead>
                      <tbody>
                        <!--<tr>-->
                        <!--  <th scope="row">1</th>-->
                        <!--  <td>Mark</td>-->
                        <!--  <td>Otto</td>-->
                        <!--  <td>@mdo</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--  <th scope="row">2</th>-->
                        <!--  <td>Jacob</td>-->
                        <!--  <td>Thornton</td>-->
                        <!--  <td>@fat</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--  <th scope="row">3</th>-->
                        <!--  <td>Larry</td>-->
                        <!--  <td>the Bird</td>-->
                        <!--  <td>@twitter</td>-->
                        <!--</tr>-->
                        <?php
            
           
               include 'files/dbcon.php';
                // $image=$res['Product_Pic_Main'];

               $selectquery="select * from `photos` ";
               $query=mysqli_query($con,$selectquery);
               $nums=mysqli_num_rows($query);
             
             
               while($res=mysqli_fetch_array($query))
               {
                //   $cid=$res['Company_ID'];
            ?>
                <tr> 
                               <td align="center"><?php echo $res['id']; ?></td>
                               <td align="center"><?php echo $res['date']; ?></td>
                               <td align="center"><?php echo $res['userid']; ?></td>
                               <td align="center"><?php echo $res['transaction_id']; ?></td>
                                 <td align="center"><?php echo $res['mobile']; ?></td>






                               <td align="center">

                          <?php echo '<img id="myimage" width="100%" height="100px" style="border-radius:3%;" data-aos="flip-right"  src="data:image/jpg;base64, '.base64_encode($res['image']).'" alt="image">'; ?></td>        
                          
                   
                </tr>
             <?php
            }

            ?>

                      </tbody>
                    </table>
              </div>
            </div></div>
               </div>

            <div id="myModal" class="modal">
  <div class="xxx">&times;</div>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

            <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("xxx")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
                   
                   
                            
                   
 
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
    </div>            </div></div>
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
  <?php include("footer.php")?>
  </body>
</html>