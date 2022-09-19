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
      
        $query = "SELECT * FROM `k-31` WHERE `ad_merit` LIKE '%$recvd_search%' ORDER BY `k-31`.`ad_merit` ASC";
      
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
      <th>Bangla Name</th>
      <th>Merit</th>
      <th>Admission Roll</th>
      <th>Action</th>
    </tr>
  </thead>



  <!-- Getting Data from rows name Start -->
  <?php

  while ( $row = mysqli_fetch_assoc($adanprodan)) {

    $id =  "{$row['id']}";

    $roll =  "{$row['roll']}";
    
    $e_name =  "{$row['e_name']}";
    
    $b_name =  "{$row['b_name']}";

    $email =  "{$row['email']}";
    
    $ad_merit =  "{$row['ad_merit']}";

    $mob_num =  "{$row['mob_num']}";
    
    $ad_roll =  "{$row['ad_roll']}";



 
   ?>

<!-- Also HTML Start -->

<tbody>
<tbody>
  <tr>
    <td><p><?php echo   $roll; ?></p></td>
    <td><p><?php echo   $e_name; ?></p></td>
    <td><p><?php echo   $b_name; ?></p></td>
    <td><p><?php echo   $ad_merit; ?></p></td>
    <td><p><?php echo   $ad_roll; ?></p></td>
    
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
        // without Search @audit
        // without Search
        // without Search




       


        $query = "SELECT * FROM `k-31`";

        $adanprodan = mysqli_query($connection,$query);
      
        $count = mysqli_num_rows($adanprodan);
      
        if($count > 0){
        
      ?>

<div class="row w-100">
  <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xxl-3 d-block " style="margin-left: 7mm">
  <div class="alert alert-primary" role="alert">
    <p class="h5">
  You have <?php echo $count; ?> data in your Database</p>
</div>
  </div>
</div>

<?php
        }
?>
<!-- @audit-info -->








<?php
if(isset($_REQUEST['showing_data_limit'])){
  $showing_data_limit_getted = $_REQUEST['showing_data_limit'];
  $limit = $showing_data_limit_getted;
?>

<div class="row w-100">
<div class="col-11" style="margin-left: 7mm;">
    <form action="index.php" method="post">
    <label for="">Show</label>
      <select name="showing_data_limit" id="" onchange="this.form.submit()">
        <option value="10" <?php if($showing_data_limit_getted=='10'){ echo "selected"; } ?>>10</option>
        <option value="25" <?php if($showing_data_limit_getted=='25'){ echo "selected"; } ?>>25</option>
        <option value="50" <?php if($showing_data_limit_getted=='50'){ echo "selected"; } ?>>50</option>
        <option value="100" <?php if($showing_data_limit_getted=='100'){ echo "selected"; } ?>>100</option>
        <option value="200" <?php if($showing_data_limit_getted=='200'){ echo "selected"; } ?>>200</option>
      </select>
      <p class="d-inline">Entry</p>
    </form>
  </div>
</div>

<?php

}else{

  $showing_data_limit_getted = 25;
  $limit = $showing_data_limit_getted;
?>

<div class="row w-100">
  <div class="col-11" style="margin-left: 7mm;">
    <form action="index.php" method="post">
      <label for="">Show</label>
      <select name="showing_data_limit" id="" onchange="this.form.submit()">
        <option value="10" >10</option>
        <option value="25" selected >25</option>
        <option value="50" >50</option>
        <option value="100" >100</option>
        <option value="200" >200</option>
      </select>
      <p class="d-inline">Entry</p>
    </form>
  </div>
</div>

<?php
}



if(isset($_REQUEST['page'])){
  $page_num = $_REQUEST['page'];
}else{
  $page_num = 1;
}



$offset = ($page_num - 1) * $limit;

$query = "SELECT * FROM `k-31` ORDER BY `k-31`.`ad_merit` ASC LIMIT {$offset}, {$limit}";

$adanprodan = mysqli_query($connection,$query);

$count = mysqli_num_rows($adanprodan);

if($count > 0){



?>



<div class="container-fluid">
        <div class="row w-100">
          <table class="table table-hover text-end my-3  table-bordered  border-light" style="width: 95%; margin-left: 7mm;">
    <thead class=" align-middle text-white bg-success" style="height: 20mm;">
    <tr>
      <th>Roll</th>
      <th>English Name</th>
      <th>Bangla Name</th>
      <th>Merit</th>
      <th>Admission Roll</th>
      <th>Action
      <a href="viewall.php" target="_blank" class="btn btn-warning">View All Details
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                                                                                                            <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
                                                                                                          </svg>
      </a>
      <a href="viewallstep.php" target="_blank" class="btn btn-info">Print All Students Details
        
                    <!-- SVG HERE -->
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                                                                                                  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                                                                                                  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                                                                                                </svg>                                                                                                                  
      </a>
      <!-- <iframe src="viewall.php" style="display:none;" name="printallpageframe"></iframe> 
      <input type="button" onclick="frames['printallpageframe'].print()" value="Print Details" class="viewbtn"> -->
      </th>
    </tr>
  </thead>


<?php
while ( $row = mysqli_fetch_assoc($adanprodan)) {

  $id =  "{$row['id']}";
  $roll =  "{$row['roll']}";
  
  $e_name =  "{$row['e_name']}";
  
  $b_name =  "{$row['b_name']}";

  $email =  "{$row['email']}";
  
  $ad_merit =  "{$row['ad_merit']}";

  $mob_num =  "{$row['mob_num']}";
  
  $ad_roll =  "{$row['ad_roll']}";




 ?>

<tbody>
<tbody>
  <tr>
    <td><p><?php echo   $roll; ?></p></td>
    <td><p><?php echo   $e_name; ?></p></td>
    <td><p><?php echo   $b_name; ?></p></td>
    <td><p><?php echo   $ad_merit; ?></p></td>
    <td><p><?php echo   $ad_roll; ?></p></td>
    
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
// @audit-issue
        $query2 = "SELECT * FROM `k-31` ORDER BY `k-31`.`ad_merit` ASC";

        $adanprodan2 = mysqli_query($connection,$query2);
      
        if(mysqli_num_rows($adanprodan2)){
          $total_records = mysqli_num_rows($adanprodan2);
          $total_page = ceil($total_records/$limit);

?>
<!-- LIST START -->
           <div class="row w-100 container-fluid">
            

           
          <ul class="pagination col-11 mx-5 mx-sm-3  justify-content-center" >  
            
                    
<?php
if($page_num > 1){
  $is_page_dis1 = "";
}else{
  $is_page_dis1 = "disabled";
}

?>

<form action="index.php" method="post">
           <li class="page-item <?php echo $is_page_dis1; ?>">
           <input type="hidden" name="page" value="<?php echo ($page_num - 1); ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="Previous">    
          </li>
          </form>    
<?php



          for($i = 1; $i <= $total_page; $i++){
            if($i == $page_num){
              $active_page = "active";
            }else{
              $active_page = "";
            }

?>

<form action="index.php" method="post">
           <li class="page-item <?php  echo $active_page;  ?>">
           <input type="hidden" name="page" value="<?php echo $i; ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="<?php echo $i; ?>">    
          </li>
          </form>    


       <!-- <li class="page-item <?php  echo $active_page;  ?>"><a href="index.php?page=<?php echo $i; ?>&&showing_data_limit=<?php echo $showing_data_limit_getted; ?>" class="page-link"><?php echo $i; ?></a></li> -->



<?php
          }  // } for loop

          ?>

          <?php
if($total_page > $page_num){
  $is_page_dis2 = "";
}else{
  $is_page_dis2 = "disabled";
}

?>
<form action="index.php" method="post">
           <li class="page-item <?php echo $is_page_dis2; ?>">
           <input type="hidden" name="page" value="<?php echo ($page_num + 1); ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="Next">    
          </li>
          </form>  


          <!-- <li class="page-item <?php echo $is_page_dis2; ?>"><a href="index.php?page=<?php echo ($page_num + 1); ?>&&showing_data_limit=<?php echo $showing_data_limit_getted; ?>" class="page-link">Next</a></li> -->
          
        </ul>
     
            <!-- LIST END -->
            </div>
           
<?php
          
        }
        $query2 = "SELECT * FROM `k-31` ORDER BY `k-31`.`ad_merit` ASC";

        $adanprodan2 = mysqli_query($connection,$query2);
      
        if(mysqli_num_rows($adanprodan2)){
          $total_records = mysqli_num_rows($adanprodan2);
          $total_page = ceil($total_records/$limit);

?>
<!-- LIST START -->
           <div class="row w-100 container-fluid">
            

           
          <ul class="pagination col-11 mx-5 mx-sm-3  justify-content-center" >  
            
                    
<?php
if($page_num > 1){
  $is_page_dis1 = "";
}else{
  $is_page_dis1 = "disabled";
}

?>

<form action="index.php" method="post">
           <li class="page-item <?php echo $is_page_dis1; ?>">
           <input type="hidden" name="page" value="<?php echo ($page_num - 1); ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="Previous">    
          </li>
          </form>    
<?php



          for($i = 1; $i <= $total_page; $i++){
            if($i == $page_num){
              $active_page = "active";
            }else{
              $active_page = "";
            }

?>

<form action="index.php" method="post">
           <li class="page-item <?php  echo $active_page;  ?>">
           <input type="hidden" name="page" value="<?php echo $i; ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="<?php echo $i; ?>">    
          </li>
          </form>    


       <!-- <li class="page-item <?php  echo $active_page;  ?>"><a href="index.php?page=<?php echo $i; ?>&&showing_data_limit=<?php echo $showing_data_limit_getted; ?>" class="page-link"><?php echo $i; ?></a></li> -->



<?php
          }  // } for loop

          ?>

          <?php
if($total_page > $page_num){
  $is_page_dis2 = "";
}else{
  $is_page_dis2 = "disabled";
}

?>
<form action="index.php" method="post">
           <li class="page-item <?php echo $is_page_dis2; ?>">
           <input type="hidden" name="page" value="<?php echo ($page_num + 1); ?>">
           <input type="hidden" name="showing_data_limit" value="<?php echo $showing_data_limit_getted; ?>">
            <input type="submit" class="page-link rounded-0" name="page_getted_by_pagination" value="Next">    
          </li>
          </form>  


          <!-- <li class="page-item <?php echo $is_page_dis2; ?>"><a href="index.php?page=<?php echo ($page_num + 1); ?>&&showing_data_limit=<?php echo $showing_data_limit_getted; ?>" class="page-link">Next</a></li> -->
          
        </ul>
     
            <!-- LIST END -->
            </div>

        // $count2 = mysqli_num_rows($adanprodan2);

?>


<div class="row w-100">

<div class="col-11">


</div>

</div>







        
        <!-- <ul class="pagination justify-content-center">
          <li class="page-item"><a href="" class="page-link">1</a></li>
          <li class="page-item"><a href="" class="page-link">2</a></li>
          <li class="page-item active"><a href="" class="page-link">3</a></li>
        </ul> -->
        <!-- @audit -->



        <?php
        }else{   // if number row in 0>1

             if(isset($_REQUEST['page'])){


              $query2 = "SELECT * FROM `k-31` ORDER BY `k-31`.`ad_merit` ASC";

              $adanprodan2 = mysqli_query($connection,$query2);
            
              if(mysqli_num_rows($adanprodan2)){

                ?>
        <div class="row w-100">
            <div class="col-11 d-block m-auto">
          <div class="alert alert-danger alert-dismissible" role="alert">
                  <button
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button><h2 class="text-center">
                  You have not any data in this Page, go back by clicking previous or number
                  </h2>

                </div>
                </div>
          
        </div>


<?php
                $total_records = mysqli_num_rows($adanprodan2);
                $total_page = ceil($total_records/$limit);

              ?>
              <!-- LIST START -->
              <ul class="pagination justify-content-center">  
                        
    <?php
    if($page_num > 1){
      $is_page_dis1 = "";
    }else{
      $is_page_dis1 = "disabled";
    }
    
    ?>
              <li class="page-item <?php echo $is_page_dis1; ?>"><a href="index.php?page=<?php echo ($page_num - 1) ?>" class="page-link">Previous</a></li>
    <?php
    
    
    
              for($i = 1; $i <= $total_page; $i++){
                if($i == $page_num){
                  $active_page = "active";
                }else{
                  $active_page = "";
                }
    
    ?>
           <li class="page-item <?php  echo $active_page;  ?>"><a href="index.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
    
    
    
    <?php
              }  // } for loop
    
              ?>
    
              <?php
    if($total_page > $page_num){
      $is_page_dis2 = "";
    }else{
      $is_page_dis2 = "disabled";
    }
    
    ?>
              <li class="page-item <?php echo $is_page_dis2; ?>"><a href="index.php?page=<?php echo ($page_num + 1) ?>" class="page-link">Next</a></li>
                </ul>
                <!-- LIST END -->
                <?php


  }else{
    // count true
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

             }else{
              // if not isset page








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
        } 
        // count---------
    }

?>
<script src="bootstrap/bootstrap.js"></script>
</body>
        </html>

<?php
    }
  }
    }else{
    header("location: http://kmc.stu.unaux.com");
    }
  
?>

