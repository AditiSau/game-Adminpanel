<?php

include 'files/dbcon.php';

  $id=$_GET['id'];
  $deletequery="delete from contact where phone='$id'";
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
     $URL="contactdetails.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>