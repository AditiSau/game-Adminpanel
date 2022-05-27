<?php

// session_start();
require("files/dbcon.php");

$name = $_POST['name'];


$noticetitle = $_POST['noticetitle'];

$content = $_POST['content'];

$reg ="INSERT INTO `notification` (`name`, `noticetitle`, `content`) VALUES ('$name', '$noticetitle', '$content');";
$result =mysqli_query($con,$reg);

if ($result==1) {
    ?>
    <script>
        alert("Succesfully send the notification ");
    </script>
    
    <?php
    

}

 else
 {
      ?>
    <script>
        alert("	Try Again ");
    </script>
    
    <?php


 }
  $URL="sendnoti.php";
      echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
      exit;
?>