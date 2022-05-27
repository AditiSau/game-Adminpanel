<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>



<!-- Trigger/Open The Modal -->
<button id="myBtn">Add Fund</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
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
      $f=$_POST['f'];
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
    //   else
    //   {
          
    //       $insert_query="INSERT INTO `withdrawal`(`sl`, `date`, `amount`, `getway`, `uid`, `name`, `phone`) VALUES ('','$date','$a','$b','$c','$d','$e')";
    //       include 'files/dbcon.php';
    //     //include_once('db.php');
    //       $iquery=mysqli_query($con,$insert_query);
    //       if($iquery)
    //       {
    //          ?>
    //          <script>
    //              alert("Money Add To Wallet Successful");
    //          </script>
    //          <?php
    //       }
    //       else
    //       {
    //           ?>
    //          <script>
    //              alert("Money Added Failed");
    //          </script>
    //          <?php
    //       }
    //       $URL="sp.php";
    //       echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
    //       exit;
    //   }   
}
?>

    
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
                             <!--  <input type="text" class="form-control form-control-lg"  placeholder="Enter Gateway" name="b" ><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter User ID" name="c" required=""><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter User Name" name="d" ><br>
                              <input type="text" class="form-control form-control-lg"  placeholder="Enter Phone Number" name="e" required=""><br>
                               -->
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <input type="submit" name="submit" value="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
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
   
    </form>
 
  </div>

</div>

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

</body>
</html>
