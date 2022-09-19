<?php

session_start();

if($_SESSION['slpass']==true){
  
$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }


  if(isset($_REQUEST['view_id'])){
    $rcvd_id = $_REQUEST['view_id'];

    $get_info = "SELECT * FROM `k-31-foreigner` WHERE id = $rcvd_id";

    $select_info = mysqli_query($connection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {

        $password =  "{$row['password']}";


     ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Password</title>
  <link rel="stylesheet" href="passingviewstyle.css">
  <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
</head>
<body>
  <div class="passform">
  <form action="view.php"  method="POST">
    <label for="">Enter Your ID Password</label>
    <input type="password" name="pass" id="" value="" placeholder="Password" class="pass">
    <input type="hidden" name="view_id" value=<?php echo $rcvd_id; ?> >
    <input type="submit" name="submit" value="Submit" class="sub">
  </form>
  </div>
</body>
</html>




<?php
    






    }



  }

}else{
  header("location: http://kmc.stu.unaux.com");
}
    ?>

 
    
    
    
    
    