<?php

include 'files/dbcon.php';

  $id=$_GET['id'];
  $deletequery="delete from video_list where vid_link='$id'";
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
     $URL="how-play.php";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        exit;
?>