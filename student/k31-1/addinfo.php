<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','test');

session_start();

if($_SESSION['slpass']==true){

$con = mysqli_connect('localhost', 'root', '','kmc');

// get the post records
$e_name = $_POST['e_name'];
$b_name = $_POST['b_name'];
$session = $_POST['session'];
$quota = $_POST['quota'];
$class_roll = $_POST['class_roll'];
$ad_roll = $_POST['ad_roll'];
$merit = $_POST['merit'];
$date_ad = date('y-m-d', strtotime($_POST['date_ad']));;
$ad_num = $_POST['ad_num'];
$ad_total_number = $_POST['ad_total_number'];




$mob_num = $_POST['mob_num'];
$email = $_POST['email'];
$birth_reg_num = $_POST['birth_reg_num'];
$national_num = $_POST['national_num'];
$birth_date = date('y-m-d', strtotime($_POST['birth_date']));
$blood = $_POST['blood'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$height = $_POST['height'];
$per_id = $_POST['per_id'];
$place_birth = $_POST['place_birth'];


$f_e_name = $_POST['f_e_name'];
$f_b_name = $_POST['f_b_name'];
$m_e_name = $_POST['m_e_name'];
$m_b_name = $_POST['m_b_name'];
$father_nid = $_POST['father_nid'];
$mother_nid = $_POST['mother_nid'];
$gurdian_s_rel = $_POST['gurdian_s_rel'];
$gur_name = $_POST['gur_name']; //add
$gur_f_rel = $_POST['gur_f_rel'];
$gur_num = $_POST['gur_num'];
$gur_address = $_POST['gur_address'];


$pre_add_village = $_POST['pre_add_village'];
$pre_add_zilla = $_POST['pre_add_zilla'];
$pre_add_upozilla = $_POST['pre_add_upozilla'];
$pre_add_post = $_POST['pre_add_post'];
$pre_add_gpo = $_POST['pre_add_gpo'];


$per_add_village = $_POST['per_add_village'];
$per_add_zilla = $_POST['per_add_zilla'];
$per_add_upozilla = $_POST['per_add_upozilla'];
$per_add_post = $_POST['per_add_post'];
$per_add_gpo = $_POST['per_add_gpo'];



$hsc_ins = $_POST['hsc_ins'];
$hsc_board = $_POST['hsc_board'];
$hsc_roll = $_POST['hsc_roll'];
$hsc_pas_year = $_POST['hsc_pas_year'];
$hsc_gpa = $_POST['hsc_gpa'];
$hsc_reg_no = $_POST['hsc_reg_no'];
$hsc_scholar = $_POST['hsc_scholar'];    //add
$hsc_without4 = $_POST['hsc_without4'];    //add
$hsc_center = $_POST['hsc_center'];    //add

$ssc_ins = $_POST['ssc_ins'];
$ssc_board = $_POST['ssc_board'];
$ssc_roll = $_POST['ssc_roll'];
$ssc_pas_year = $_POST['ssc_pas_year'];
$ssc_gpa = $_POST['ssc_gpa'];
$ssc_reg_no = $_POST['ssc_reg_no'];
$ssc_without4 = $_POST['ssc_without4'];    //add
$ssc_scholar = $_POST['ssc_scholar'];    //add
$ssc_center = $_POST['ssc_center'];    //add




$gur_ocu = $_POST['gur_ocu'];
$father_sal = $_POST['gur_sal'];


$password = $_POST['password'];

$user_ip = 'User IP - '.$_SERVER['REMOTE_ADDR'];

$user_device = $_SERVER['HTTP_USER_AGENT'];



/// get end------------------

$checkuser = "SELECT * FROM `k-31` WHERE ad_merit = '$merit'";
$result_checkuser = mysqli_query($con,$checkuser);
$count = mysqli_num_rows($result_checkuser);
if($count > 0){
  header("location: exixts.php");
}else{





// database insert SQL code
$sql = "INSERT INTO `k-31` (`id`, `roll`, `e_name`, `b_name`, `father_e_name`, `father_b_name`, `father_nid`, `mother_e_name`, `mother_b_name`, `mother_nid`, `birth_date`,`gender`, `blood_group`, `religion`, `ad_roll`, `ad_num`, `ad_total_number`, `ad_merit`, `quota`, `birth_reg_num`, `national_num`, `ssc_ins`, `ssc_num_4th`, `ssc_num`, `ssc_pas_year`, `ssc_board`, `ssc_center`, `ssc_roll`, `ssc_reg_num`, `ssc_scholar`, `hsc_ins`, `hsc_num_4th`, `hsc_num`, `hsc_pas_year`, `hsc_board`, `hsc_center`, `hsc_roll`, `hsc_reg_num`, `hsc_scholar`, `per_add_village`, `per_add_post`, `per_add_gpo`, `per_add_upozilla`, `per_add_zilla`, `pre_add_village`, `pre_add_post`, `pre_add_gpo`, `pre_add_upozilla`, `pre_add_zilla`, `gurdian_s_rel`, `gur_name`, `mob_num`, `gur_mob_num`, `email`, `father_ocu`, `father_sal`, `per_id`, `password`, `sub_time`, `ad_date`, `ip_address`, `device address`, `session`, `height`, `gurdian_f_rel`, `gur_add`, `gur_sal`) VALUES ('0', '$class_roll', '$e_name', '$b_name', '$f_e_name', '$f_b_name', '$father_nid', '$m_e_name', '$m_b_name', '$mother_nid', '$birth_date', '$gender', '$blood	', '$religion', '$ad_roll', '$ad_num', '$ad_total_number', '$merit	', '$quota', '$birth_reg_num', '$national_num', '$ssc_ins', '$hsc_without4', '$ssc_gpa', '$ssc_pas_year', '$ssc_board', '$ssc_center', '$ssc_roll', '$ssc_reg_no', '$ssc_scholar', '$hsc_ins', '$hsc_without4', '$hsc_gpa', '$hsc_pas_year', '$hsc_board', '$hsc_center', '$hsc_roll', '$hsc_reg_no', '$hsc_scholar', '$per_add_village', '$per_add_post', '$per_add_gpo', '$per_add_upozilla', '$per_add_zilla', '$pre_add_village', '$pre_add_post', '$pre_add_gpo', '$pre_add_upozilla', '$pre_add_zilla', '$gurdian_s_rel', '$gur_name', '$mob_num', '$gur_num', '$email', '$gur_ocu', '$father_sal', '$per_id', '$password', CURRENT_TIMESTAMP, '$date_ad', '$user_ip', '$user_device', '$session', '$height', '$gur_f_rel', '$gur_address', '$father_sal')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs){
  header("location: header.php");
}else{
  echo "<font color=red size=22mm>Data Entry Failed</font>";
}

}
}
//$date = date('y-m-d', strtotime($_POST['date']));
?>

   
