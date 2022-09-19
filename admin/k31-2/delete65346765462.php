<?php
session_start();
if($_SESSION['lpass']==true){

$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  $recv = $_REQUEST['id'];

  $query = "DELETE FROM `k-31-foreigner` WHERE id = $recv";

  $run_delete_query = mysqli_query($connection,$query);

  if($run_delete_query){
    $_SESSION['lpass'] = "kmcbd786";
    header("location: index.php?deleted");
  }


}else{
  header("location: http://kmc.stu.unaux.com");
}






  ?>