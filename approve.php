<?php

include 'files/dbcon.php';

  $id=$_GET['ep'];
  $deletequery="UPDATE `register` SET `status`='APPROVED' WHERE `mobile`='$id'";
  $query=mysqli_query($con,$deletequery);
  
  if($query)
  {
      ?>
        <script>
            alert("APPROVED SuccessFully");
        </script>
      <?php
  }
  else
  {
      ?>
        <script>
            alert(" APPROVED UnsuccessFully");
        </script>
      <?php
  }

   //header('location:product.php');
     $URL="usermanagement.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>