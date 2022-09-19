<?php


session_start();

if($_SESSION['slpass']==true){

  if((time() - $_SESSION['current_timestamp']) > 6000){
    header("location: logout.php");
  }else{

$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">


  </head>
  <body>
    <div class="search_group">
    <form action="index.php" method="post" class="search_form">
      <input type="text" class="searchbar" name="search_merit" placeholder="Search Here By Roll">

      <input type="submit" value="Search" class="search_submit" name="search">
    </form>
    </div>
    <a href="reg.html"><button class="addbtn">Add Student info</button></a>
</body>
</html>






<?php




if(isset($_REQUEST['search'])){

$recvd_search = $_REQUEST['search_merit'];

  $query = "SELECT * FROM `k-31-foreigner` WHERE `roll` LIKE '%$recvd_search%' ORDER BY `k-31-foreigner`.`roll` ASC";

  $adanprodan = mysqli_query($connection,$query);

  $count = mysqli_num_rows($adanprodan);

  if($count > 0){
  

  ?>


<?php

if(isset($_REQUEST['deleted'])){
  echo "<font color='red'>Data Deleted</font>";
}
if(isset($_REQUEST['updated'])){
  echo "<font color='green'>Data Updated</font>";
}
?>


<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">


  </head>
  <body>
  <button class="back_ins"><a href="index.php"> Go Back</a></button>
 <table class="content-table">
  <thead>
    <tr>
      <th>Roll</th>
      <th>English Name</th>
      <th>Bangla Name</th>
      <th>Merit</th>
      <th>Admission Roll</th>
      <th>Action</th>
    </tr>
  </thead>
   
  </body>
  </html>




<?php

  while ( $row = mysqli_fetch_assoc($adanprodan)) {

    $id =  "{$row['id']}";
    $roll =  "{$row['roll']}";
    
    $e_name =  "{$row['e_name']}";
    
    $country =  "{$row['country']}";

    $email =  "{$row['email']}";
    
    $passport_no =  "{$row['passport_no']}";



 
   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    


  </head>
  <body>
      <tbody>

      <tbody>
    <tr>
    <td><?php echo   $roll; ?></td>
      <td><?php echo   $e_name; ?></td>
      <td><?php echo   $country; ?></td>
      <td><?php echo   $passport_no; ?></td>
      
        <td><a href="passingview.php?view_id=<?php echo $id; ?>" class="viewlink"><button class="viewbtn">View Details</button></a></td>


      </tbody> 
      

  </body>
  </html>


  <?php
}
  ?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">


  </head>
  <body>
  </table>
  </html>
   
  
  <?php
    ?>
      
    <?php
   
  }else{
    echo "<font color=red size=22mm>You have not Any Data in this search</font>";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>You Hav'nt</title>
      <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
      <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
       

    </head>
    <body>
    <button class="back_ins"><a href="index.php"> Go Back</a></button>
    </body>
    </html>
    <?php
  }


}else{







//without Search
//without Search
//without Search
//without Search
//without Search
//without Search
//without Search
//without Search





  $query = "SELECT * FROM `k-31-foreigner` ORDER BY `k-31-foreigner`.`roll` ASC";

  $adanprodan = mysqli_query($connection,$query);

  $count = mysqli_num_rows($adanprodan);

  if($count > 0){
  

  ?>


<?php

if(isset($_REQUEST['deleted'])){
  echo "<font color='red'>Data Deleted</font>";
}
if(isset($_REQUEST['updated'])){
  echo "<font color='green'>Data Updated</font>";
}
?>


<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">


  </head>
  <body>
  <a href="reg.html"><button class="addbtn">Add Student info</button></a>
 <table class="content-table">
  <thead>
    <tr>
      <th>Roll</th>
      <th>English Name</th>
      <th>Country</th>
      <th>Passport NO</th>
      <th>Action</th>
    </tr>
  </thead>
   
  </body>
  </html>




<?php

  while ( $row = mysqli_fetch_assoc($adanprodan)) {

    $id =  "{$row['id']}";
    $roll =  "{$row['roll']}";
    
    $e_name =  "{$row['e_name']}";
    
    $country =  "{$row['country']}";

    $email =  "{$row['email']}";
    
    $passport_no =  "{$row['passport_no']}";
    



 
   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    


  </head>
  <body>
      <tbody>

      <tbody>
    <tr>
      <td><?php echo   $roll; ?></td>
      <td><?php echo   $e_name; ?></td>
      <td><?php echo   $country; ?></td>
      <td><?php echo   $passport_no; ?></td>
      
        <td><a href="passingview.php?view_id=<?php echo $id; ?>" class="viewlink"><button class="viewbtn">View Details</button></a></td>


      </tbody> 
      

  </body>
  </html>


  <?php
}
  ?>
   </table>
   
  <?php
   
  }else{
    echo "<h1>YOU HAVE NOT ANY DATA</h1>";
  }
}
}
}else{
  header("location: http://kmc.stu.unaux.com");
}
   ?>


