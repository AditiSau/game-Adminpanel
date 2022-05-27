

<!-- Trigger/Open The Modal -->
<button id="myWith">WithDrwal</button>


    
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
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
                
                
                        }
          

?>

    
<div class="main-content">  <div class="page-content">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
                          <form class="pt-3" Method="POST">
                            <div class="form-group">
                              
                              <h5>Withdrawl Amount</h5>
                              <input type="text" class="form-control form-control-lg" value=""  placeholder="Enter The Withdrawl Amount" name="c" required="" ><br>
                              
                            </div>
                            <div class="mt-3">
                              <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Save</a>-->
                              <input type="submit" name="submit" onClick="return confirm('Do you really want to Withdrawl User Amount ??');" value="Update" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                            </div>
                          </form></div><div><div></div></div>
                       
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myWith");

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
<?php include("sp.php");	?>