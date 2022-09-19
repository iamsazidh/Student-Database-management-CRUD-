<?php
  session_start();

$lpass = $_POST['password'];

     if($lpass=='K31kmc'){
      $_SESSION['slpass'] = $lpass;
      $_SESSION['current_timestamp'] = time();
   header("location: student/k31-1/index.php");
   
}elseif(($lpass=='kmcbd786')){
  $_SESSION['lpass'] = $lpass;
  $_SESSION['current_timestamp'] = time();
   header("location: admin/k31-1/index.php");

// k31 foreigners
}elseif(($lpass=='kmcF.786')){
  $_SESSION['lpass'] = $lpass;
  $_SESSION['current_timestamp'] = time();
   header("location: admin/k31-2/index.php");

}elseif(($lpass=='K-31kmcF')){
  $_SESSION['slpass'] = $lpass;
  $_SESSION['current_timestamp'] = time();
   header("location: student/k31-2/index.php");
}else{
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Error</title>
     <link rel="stylesheet" href="viewserrorstyle.css">
   </head>
   <body>
     <center><h4 class="wrong">Wrong Password</h4></center>
     <center><button onclick="window.history.back()" class="back">Click To Go Back</button></center>
   </body>
   </html>
   <?php
 }

?>