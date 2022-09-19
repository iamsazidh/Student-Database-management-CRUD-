<?php


$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }


  if(isset($_REQUEST['view_id'])){
    $rcvd_id = $_REQUEST['view_id'];

    $get_info = "SELECT * FROM `k-31` WHERE id = $rcvd_id";

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
  <title>Document</title>
  <link rel="stylesheet" href="passingviewstyle.css">
</head>
<body>
  <div class="passform">
  <form action="passingview.php"  method="get">
    <label for="">Enter Your ID Password</label>
    <input type="password" name="pass" id="" value="" placeholder="Password" class="pass">
    <input type="hidden" name="view_id" value=<?php echo $rcvd_id; ?> >
    <input type="submit" name="submit" value="Submit" class="sub">
  </form>
  </div>
</body>
</html>




<?php
    



    if(isset($_REQUEST['submit'])){
       $pass = $_GET['pass'];
      header("location: view.php?pass=$pass&view_id=$rcvd_id");

}



    }



  }


    ?>

 
    
    
    
    
    