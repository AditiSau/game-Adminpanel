<?php

include 'files/dbcon.php';

  $id=$_GET['id'];
  $deletequery="delete from `userbid` where id='$id'";
  $query=mysqli_query($con,$deletequery);
  
  if($query)
  {
      ?>
        <script>
            alert("Delete SuccessFully");
        </script>
      <?php
  }
  else
  {
      ?>
        <script>
            alert(" Delete UnsuccessFully");
        </script>
      <?php
  }

   //header('location:product.php');
     $URL="betting_status.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>