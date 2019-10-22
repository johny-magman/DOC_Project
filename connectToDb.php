<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

      $user="user";
      $pwd="userpassword";
      $db_name="dbname";
      $db_server="IP:port";
      $con=mysqli_connect($db_server,$user,$pwd,$db_name);


      if(mysqli_connect_errno()){
        echo "failed to connect";
      }

 ?>

  </body>
  </html>
