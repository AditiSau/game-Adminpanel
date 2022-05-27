<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

include 'files/dbcon.php';

  $id=$_GET['id'];
  $ep=$_GET['ep'];
  $updatequery="UPDATE `withdraw` SET `date`='$date',`status`='REJECTED' WHERE userid='$id'";
  
  $query=mysqli_query($con,$updatequery);
  
  
  if($query )
  {
      ?>
        <script>
            alert("Withdrawal Rejected");
        </script>
      <?php
  }
  else
  {
      ?>
        <script>
            alert("Failed!!");
        </script>
      <?php
  }

   //header('location:product.php');
     $URL="u_wallet.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>