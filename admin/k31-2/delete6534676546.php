<?php
session_start();
if($_SESSION['lpass']==true){

  if(isset($_POST['delete_btn_set'])){

$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  $recv = $_POST['delete_id_num'];

  $query = "DELETE FROM `k-31-foreigner` WHERE id = $recv";

  $run_delete_query = mysqli_query($connection,$query);


}

}else{
  header("location: http://kmc.stu.unaux.com");
}




  ?>