<?php
session_start();
if($_SESSION['lpass']==true){
$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }


  if(isset($_REQUEST['submit'])) {
     
// get the post records
$e_name = $_POST['e_name'];
$session = $_POST['session'];
$quota = $_POST['quota'];
$class_roll = $_POST['class_roll'];
$date_ad = date('y-m-d', strtotime($_POST['date_ad']));;




$mob_num = $_POST['mob_num'];
$email = $_POST['email'];
$country = $_POST['country'];
$national_num = $_POST['national_num'];
$birth_date = date('y-m-d', strtotime($_POST['birth_date']));
$blood = $_POST['blood'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$height = $_POST['height'];
$place_birth = $_POST['place_birth'];


$f_e_name = $_POST['f_e_name'];
$m_e_name = $_POST['m_e_name'];
$father_ocu = $_POST['father_ocu'];
$mother_ocu = $_POST['mother_ocu'];
$gur_num = $_POST['gur_num'];


$pre_add = $_POST['pre_add'];
$per_add = $_POST['per_add'];




$hsc_deg = $_POST['hsc_deg'];
$hsc_ins = $_POST['hsc_ins'];
$hsc_roll = $_POST['hsc_roll'];
$hsc_pas_year = $_POST['hsc_pas_year'];
$hsc_gpa = $_POST['hsc_gpa'];
$hsc_reg_no = $_POST['hsc_reg_no'];

$ssc_deg = $_POST['ssc_deg'];
$ssc_ins = $_POST['ssc_ins'];
$ssc_roll = $_POST['ssc_roll'];
$ssc_pas_year = $_POST['ssc_pas_year'];
$ssc_gpa = $_POST['ssc_gpa'];
$ssc_reg_no = $_POST['ssc_reg_no'];


$passport_no = $_POST['passport_no'];
$date_issue = date('y-m-d', strtotime($_POST['date_issue']));
$date_expiry = date('y-m-d', strtotime($_POST['date_expiry']));
$visa_no = $_POST['visa_no'];
$arri_date = date('y-m-d', strtotime($_POST['arri_date']));

$updating_id = $_REQUEST['updating_id'];


$password = $_POST['password'];

$user_ip = 'User IP - '.$_SERVER['REMOTE_ADDR'];

$user_device = $_SERVER['HTTP_USER_AGENT'];


      
      $update_query = "UPDATE `k-31-foreigner` SET `roll`='$class_roll',`e_name`='$e_name',`father_e_name`='$f_e_name',`mother_e_name`='$m_e_name',`birth_date`='$birth_date',`gender`='$gender',`blood_group`='$blood',`religion`='$religion',`quota`='$quota',`national_num`='$national_num',`ssc_ins`='$ssc_ins',`ssc_num`='$ssc_gpa',`ssc_pas_year`='$ssc_pas_year',`ssc_roll`='$ssc_roll',`ssc_reg_num`='$ssc_reg_no',`hsc_ins`='$hsc_ins',`hsc_num`='$hsc_gpa',`hsc_pas_year`='$hsc_pas_year',`hsc_roll`='$hsc_roll',`hsc_reg_num`='$hsc_reg_no',`ssc_deg`='$ssc_deg',`hsc_deg`='$hsc_deg',`mob_num`='$mob_num',`gur_mob_num`='$gur_num',`email`='$email',`father_ocu`='$father_ocu',`ad_date`='$date_ad',`session`='$session',`height`='$height',`mother_ocu`='$mother_ocu',`pre_add`='$pre_add',`per_add`='$per_add',`passport_no`='$passport_no',`date_issue`='$date_issue',`date_expiry`='$date_expiry',`visa_no`='$visa_no',`arrival_date`='$arri_date',`country`='$country' WHERE id= $updating_id";

      $final_update_query = mysqli_query($connection,$update_query);


      if(!$connection){
        echo "ok";
      }else{
        echo "failed1";
      }
      if(!$update_query){
        echo "ok2";
      }else{
        echo "fail2";
      }

      if($final_update_query){
        $_SESSION['lpass'] = "kmcbd786";
              header("location: index.php?updated");

      }else{
        echo "failed";
      }


  }


}else{
  header("location: http://kmc.stu.unaux.com");
}
  ?>