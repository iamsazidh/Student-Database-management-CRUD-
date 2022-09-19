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
$updating_id = $_REQUEST['updating_id'];




$gur_ocu = $_POST['gur_ocu'];
$father_sal = $_POST['gur_sal'];


$password = $_POST['password'];

      
      $update_query = "UPDATE `k-31` SET `roll`='$class_roll',`e_name`='$e_name',`b_name`='$b_name',`father_e_name`='$f_e_name',`father_b_name`='$f_b_name',`father_nid`='$father_nid',`mother_e_name`='$m_e_name',`mother_b_name`='$m_b_name',`mother_nid`='$mother_nid',`birth_date`='$birth_date',`gender`='$gender',`blood_group`='$blood',`religion`='$religion',`ad_roll`='$ad_roll',`ad_num`='$ad_num',`ad_total_number`='$ad_total_number',`ad_merit`='$merit',`quota`='$quota',`birth_reg_num`='$birth_reg_num',`national_num`='$national_num',`ssc_ins`='$ssc_ins',`ssc_num_4th`='$ssc_without4',`ssc_num`='$ssc_gpa',`ssc_pas_year`='$ssc_pas_year',`ssc_board`='$ssc_board',`ssc_center`='$ssc_center',`ssc_roll`='$ssc_roll',`ssc_reg_num`='$ssc_reg_no',`ssc_scholar`='$hsc_scholar',`hsc_ins`='$hsc_ins',`hsc_num_4th`='$hsc_without4',`hsc_num`='$hsc_gpa',`hsc_pas_year`='$hsc_pas_year',`hsc_board`='$hsc_board',`hsc_center`='$hsc_center',`hsc_roll`='$hsc_roll',`hsc_reg_num`='$hsc_reg_no',`hsc_scholar`='$hsc_scholar',`per_add_village`='$per_add_village',`per_add_post`='$per_add_post',`per_add_gpo`='$per_add_gpo',`per_add_upozilla`='$per_add_upozilla',`per_add_zilla`='$per_add_zilla',`pre_add_village`='$pre_add_village',`pre_add_post`='$pre_add_post',`pre_add_gpo`='$pre_add_gpo',`pre_add_upozilla`='$pre_add_upozilla',`pre_add_zilla`='$pre_add_zilla',`gurdian_s_rel`='$gurdian_s_rel',`gur_name`='$gur_name',`mob_num`='$mob_num',`gur_mob_num`='$gur_num',`email`='$email',`father_ocu`='$gur_ocu',`father_sal`='$father_sal',`per_id`='$per_id',`ad_date`='$date_ad',`session`='$session',`height`='$height',`gurdian_f_rel`='$gur_f_rel',`gur_add`='$gur_address', `gur_sal`='$father_sal' WHERE id= $updating_id";

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