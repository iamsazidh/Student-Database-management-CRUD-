<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','test');

session_start();

if($_SESSION['lpass']==true){

$con = mysqli_connect('localhost', 'root', '','kmc');

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




$password = $_POST['password'];

$user_ip = 'User IP - '.$_SERVER['REMOTE_ADDR'];

$user_device = $_SERVER['HTTP_USER_AGENT'];



// database insert SQL code
$sql = "INSERT INTO `k-31-foreigner`(`id`, `roll`, `e_name`, `father_e_name`, `mother_e_name`, `birth_date`, `gender`, `blood_group`, `religion`, `quota`, `national_num`, `ssc_ins`, `ssc_num`, `ssc_pas_year`, `ssc_roll`, `ssc_reg_num`, `hsc_ins`, `hsc_num`, `hsc_pas_year`, `hsc_roll`, `hsc_reg_num`, `ssc_deg`, `hsc_deg`, `gur_name`, `mob_num`, `gur_mob_num`, `email`, `father_ocu`, `password`, `sub_time`, `ad_date`, `ip_address`, `device address`, `session`, `height`, `gurdian_f_rel`, `gur_add`, `mother_ocu`, `pre_add`, `per_add`, `passport_no`, `date_issue`, `date_expiry`, `visa_no`, `arrival_date`, `country`) VALUES ('0' ,'$class_roll' ,'$e_name' ,'$f_e_name' ,'$m_e_name' ,'$birth_date' ,'$gender' ,'$blood' ,'$religion' ,'$quota' ,'$national_num' ,'$ssc_ins' ,'$ssc_gpa' ,'$ssc_pas_year' ,'$ssc_roll' ,'$ssc_reg_no' ,'$hsc_ins' ,'$hsc_gpa' ,'$hsc_pas_year' ,'$hsc_roll' ,'$hsc_reg_no' ,'$ssc_deg' ,'$hsc_deg' ,'' ,'$mob_num' ,'$gur_num' ,'$email' ,'$father_ocu' ,'$password' ,'' ,'$date_ad' ,'$user_ip' ,'$user_device' ,'$session' ,'$height' ,'' ,'' ,'$mother_ocu' ,'$pre_add' ,'$per_add' ,'$passport_no' ,'$date_issue' ,'$date_expiry' ,'$visa_no' ,'$arri_date' ,'$country' )";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs){
  header("location: header.php");
}else{
  echo "<font color=red size=22mm>Data Entry Failed</font>";
}


}else{
  header("location: http://kmc.stu.unaux.com");
}
//$date = date('y-m-d', strtotime($_POST['date']));
?>

   
