<?php

session_start();

if($_SESSION['lpass']==true){

  if((time() - $_SESSION['current_timestamp']) > 259200){
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
          <title>Admin Panel</title>
          <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
          <link rel="stylesheet" href="bootstrap/bootstrap.css">
        
        </head>
        <body>
          <!-- HTML Tag Head END -->

    <?php include 'allheader.php'; ?>
    <?php include 'thisheader.php'; ?>

    <!-- HTML Start -->

<?php  
    

    if(isset($_REQUEST['updated'])){
      ?>

          <div class="row w-100">
          <div class="col-11 d-block m-auto">
          <div class="alert alert-success alert-dismissible" role="alert">
                  <button
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button><h2 class="text-center">
                  Data Updated
                  </h2>
                </div>
                </div>
      </div>


        <?php   
           }     // if Isset updated   







    // If Isset Search 
    if(isset($_REQUEST['search'])){

      $recvd_search = $_REQUEST['search_merit'];
      
        $query = "SELECT * FROM `k-31-foreigner` WHERE `roll` LIKE '%$recvd_search%' ORDER BY `k-31-foreigner`.`roll` ASC";
      
        $adanprodan = mysqli_query($connection,$query);
      
        $count = mysqli_num_rows($adanprodan);
      
        if($count > 0){
          ?>
          <div class="row w-100">
          <a href="index.php" class="btn btn-info" style="width: 30mm; margin-left: 7mm;"> Go Back</a>
          </div>
          

           <!--table start  -->

<div class="container-fluid">
        <div class="row w-100">
          <table class="table table-hover text-end my-5  table-bordered  border-light" style="width: 95%; margin-left: 7mm;">
    <thead class=" align-middle text-white bg-success" style="height: 20mm;">
    <tr>
      <th>Roll</th>
      <th>English Name</th>
      <th>Country</th>
      <th>Passpor NO</th>
      <th>Action</th>
    </tr>
  </thead>



  <!-- Getting Data from rows name Start -->
  <?php

  while ( $row = mysqli_fetch_assoc($adanprodan)) {

    $id =  "{$row['id']}";
    $roll =  "{$row['roll']}";
    
    $e_name =  "{$row['e_name']}";
    
    $country =  "{$row['country']}";

    $email =  "{$row['email']}";
    
    $passport_no =  "{$row['passport_no']}";



 
   ?>

<!-- Also HTML Start -->

<tbody>
<tbody>
    <tr>
    <td><?php echo   $roll; ?></td>
      <td><?php echo   $e_name; ?></td>
      <td><?php echo   $country; ?></td>
      <td><?php echo   $passport_no; ?></td>
    
      <td><a href="view13579.php?view_id=<?php echo $id; ?>" target="_blank" class="btn btn-primary">View Details
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                                                                                                            <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
                                                                                                          </svg>
    </a>
      <!--Update Button---><a href="single_edit987435.php?edit_id=<?php echo $id; ?>" class="btn btn-info">Update
                                                                                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                                                                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                                                                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                                                                        </svg>
    
    </a>
      <!--Delete Button-->  <!-- Delete Button -->
         <?php include 'wdeleting.php'; ?>
         <input type="hidden" name="" class="delete_id_value" value="<?php echo $id; ?>">
         <input type="hidden" name="" class="delete_name_value" value="<?php echo $e_name; ?>">
        <a href="javascript:vold(0)" class="btn btn-danger delete_btn_ajax">Delete
<!-- SVG HERE -->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                                                                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                                                                                    </svg>




        </a>
    </td>                                           
<tr>

    </tbody> 









       



<?php
                }  //end of while loop 

?>
 </table>
        </div>
        </div>

        <?php

        }else{   // if number row in 0>1
          ?>
          <div class="row w-100">
            <div class=" col-3 col-sm-3 col-lg-2 mx-3"> 
          <a href="index.php" class="btn btn-info"> Go Back</a>
          </div>
          <div class="col-11 d-block mx-auto my-3">
          <div class="alert alert-danger alert-dismissible" role="alert">
                  <button
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button><h2 class="text-center">
                  You have not any Data in this Search
                  </h2>
                </div>
                </div>
          </div>
          <?php
        }                // if number row in 0>1                  
      }else{// If Isset Search 
        // without Search
        // without Search
        // without Search
        // without Search
        // without Search

        $query = "SELECT * FROM `k-31-foreigner` ORDER BY `k-31-foreigner`.`roll` ASC";

        $adanprodan = mysqli_query($connection,$query);
      
        $count = mysqli_num_rows($adanprodan);
      
        if($count > 0){
        
      ?>
<div class="container-fluid">
        <div class="row w-100">
          <table class="table table-hover text-end my-5  table-bordered  border-light" style="width: 95%; margin-left: 7mm;">
    <thead class=" align-middle text-white bg-success" style="height: 20mm;">
    <tr>
      <th>Roll</th>
      <th>English Name</th>
      <th>Country</th>
      <th>Passpor NO</th>
      <th>Action</th>
    </tr>
  </thead>


<?php
while ( $row = mysqli_fetch_assoc($adanprodan)) {

  $id =  "{$row['id']}";
  $roll =  "{$row['roll']}";
  
  $e_name =  "{$row['e_name']}";
  
  $country =  "{$row['country']}";

  $email =  "{$row['email']}";
  
  $passport_no =  "{$row['passport_no']}";




 ?>

<tbody>
<tbody>
  <tr>
  <tr>
    <td><?php echo   $roll; ?></td>
      <td><?php echo   $e_name; ?></td>
      <td><?php echo   $country; ?></td>
      <td><?php echo   $passport_no; ?></td>
    
    <td>
         <!-- View Details Button -->
        <a href="view13579.php?view_id=<?php echo $id; ?>" target="_blank" class="btn btn-primary">View Details
                                                                                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                                                                                                                        <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
                                                                                                                      </svg>
      </a>
        <!-- Update Button -->
        <a href="single_edit987435.php?edit_id=<?php echo $id; ?>" class="btn btn-info">Update
                                                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                                                                  </svg>
      </a>
         <!-- Delete Button -->
         <?php include 'wdeleting.php'; ?>
         <input type="hidden" name="" class="delete_id_value" value="<?php echo $id; ?>">
         <input type="hidden" name="" class="delete_name_value" value="<?php echo $e_name; ?>">
        <a href="javascript:vold(0)" class="btn btn-danger delete_btn_ajax">Delete
<!-- SVG HERE -->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                                                                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                                                                                    </svg>




        </a>
        <!--Iframe For Print--->
         <iframe src="view13579.php?view_id=<?php echo $id; ?>" style="display:none;" name="frame_id=<?php echo $id; ?>"></iframe> 
         <!---Print Button-->
         <button type="button" onclick="frames['frame_id=<?php echo $id; ?>'].print()" class="btn btn-info">Print Details
                       <!-- SVG HERE -->
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                                                                                                  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                                                                                                  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                                                                                                </svg>
        
        </button>
        </td>                                      
<tr>

    </tbody> 


<?php


        
      } 
      //while loop
      
      
      ?>
 </table>
        </div>
        </div>

        <?php
        }else{   // if number row in 0>1
          ?>
          <div class="row w-100">
            <div class="col-11 d-block m-auto">
          <div class="alert alert-danger alert-dismissible" role="alert">
                  <button
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button><h2 class="text-center">
                  You have not any Data in this Database
                  </h2>
                </div>
                </div>
          
        </div>
        
          <?php
        } 
        // count---------
    }

?>
<script src="bootstrap/bootstrap.js"></script>
</body>
        </html>

<?php
    }
    }else{
    header("location: http://kmc.stu.unaux.com");
    }

?>

