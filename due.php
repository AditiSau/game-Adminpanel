<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

include 'files/dbcon.php';

  $id=$_GET['id'];
  $ep=$_GET['ep'];
  $updatequery="UPDATE `withdraw` SET `date`='$date',`status`='DONE' WHERE mobile='$id'";
  $updatequery1="UPDATE `withdrawal` SET `amount`=`amount`-'$ep' WHERE `phone`='$id'";
  $query=mysqli_query($con,$updatequery);
  $query1=mysqli_query($con,$updatequery1);
  
  if($query && $query1)
  {
      ?>
        <script>
            alert("Withdrawal SuccessFull");
        </script>
      <?php
  }
  else
  {
      ?>
        <script>
            alert("Withdrawal UnsuccessFull");
        </script>
      <?php
  }

   //header('location:product.php');
     $URL="u_wallet.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>