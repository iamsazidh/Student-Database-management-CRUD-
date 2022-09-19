<?php

session_start();
if($_SESSION['lpass']==true){

$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  if(isset($_REQUEST['view_id'])){
    $rcvd_id = $_REQUEST['view_id'];

    $get_info = "SELECT * FROM `k-31` WHERE id = $rcvd_id";

    $select_info = mysqli_query($connection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {

        $id =  "{$row['id']}";
        $roll =  "{$row['roll']}";
        $e_name =  "{$row['e_name']}";
        $b_name =  "{$row['b_name']}";
        $father_e_name =  "{$row['father_e_name']}";
        $father_b_name =  "{$row['father_b_name']}";
        $father_nid =  "{$row['father_nid']}";
        $mother_e_name =  "{$row['mother_e_name']}";
        $mother_b_name =  "{$row['mother_b_name']}";
        $mother_nid =  "{$row['mother_nid']}";
        $birth_date =  "{$row['birth_date']}";
        $gender =  "{$row['gender']}";
        $blood_group =  "{$row['blood_group']}";
        $religion =  "{$row['religion']}";
        $ad_roll =  "{$row['ad_roll']}";
        $ad_num =  "{$row['ad_num']}";
        $ad_total_number =  "{$row['ad_total_number']}";
        $ad_merit =  "{$row['ad_merit']}";
        $quota =  "{$row['quota']}";
        $birth_reg_num =  "{$row['birth_reg_num']}";
        $national_num =  "{$row['national_num']}";
        $ssc_ins =  "{$row['ssc_ins']}";
        $ssc_num_4th =  "{$row['ssc_num_4th']}";
        $ssc_num =  "{$row['ssc_num']}";
        $ssc_pas_year =  "{$row['ssc_pas_year']}";
        $ssc_board =  "{$row['ssc_board']}";
        $ssc_center =  "{$row['ssc_center']}";
        $ssc_roll =  "{$row['ssc_roll']}";
        $ssc_reg_num =  "{$row['ssc_reg_num']}";
        $ssc_scholar =  "{$row['ssc_scholar']}";
        $hsc_ins =  "{$row['hsc_ins']}";
        $hsc_num_4th =  "{$row['hsc_num_4th']}";
        $hsc_num =  "{$row['hsc_num']}";
        $hsc_pas_year =  "{$row['hsc_pas_year']}";
        $hsc_board =  "{$row['hsc_board']}";
        $hsc_center =  "{$row['hsc_center']}";
        $hsc_roll =  "{$row['hsc_roll']}";
        $hsc_reg_num =  "{$row['hsc_reg_num']}";
        $hsc_scholar =  "{$row['hsc_scholar']}";
        $per_add_village =  "{$row['per_add_village']}";
        $per_add_post =  "{$row['per_add_post']}";
        $per_add_gpo =  "{$row['per_add_gpo']}";
        $per_add_upozilla =  "{$row['per_add_upozilla']}";
        $per_add_zilla =  "{$row['per_add_zilla']}";
        $pre_add_village =  "{$row['pre_add_village']}";
        $pre_add_post =  "{$row['pre_add_post']}";
        $pre_add_gpo =  "{$row['pre_add_gpo']}";
        $pre_add_upozilla =  "{$row['pre_add_upozilla']}";
        $pre_add_zilla =  "{$row['pre_add_zilla']}";
        $gurdian_s_rel =  "{$row['gurdian_s_rel']}";
        $gurdian_f_rel =  "{$row['gurdian_f_rel']}";
        $gur_name =  "{$row['gur_name']}";
        $gur_add =  "{$row['gur_add']}";
        $mob_num =  "{$row['mob_num']}";
        $gur_mob_num =  "{$row['gur_mob_num']}";
        $email =  "{$row['email']}";
        $father_ocu =  "{$row['father_ocu']}";
        $father_sal =  "{$row['father_sal']}";
        $per_id =  "{$row['per_id']}";
        $password =  "{$row['password']}";
        $sub_time =  "{$row['sub_time']}";
        $ad_date =  "{$row['ad_date']}";
        $session = "{$row['session']}";
        $height = "{$row['height']}";




     
     ?>


    <!--HTML HERE-->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Details</title>
        <link rel="stylesheet" href="viewstyle1.css">
        <link rel="stylesheet" href="viewstyle2.css">
        <link rel="stylesheet" href="viewstyle.css">
        <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">

    </head>
    <body>
     <div class="full_box paddinglf">
     <div class="myheader">
     <img src="KMC.png" alt="Icon" class="headerkmc">
           <center><h4 class="myheader11">Khulna Medical College: Student Admission Form</h4></center>
           <img src="bdico.png" alt="Icon" class="headerbd">
        </div>

        <div class="info">
            <p class="batch box paddinglf">Batch No-K-31</p>
            <p class="session box paddinglf">Session-<?php echo   $session; ?></p>
            <p class="university_reg box paddinglf">University Reg. NO: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </p>
            <p class="ad_date box paddinglf">Admission Date-<?php echo   $ad_date; ?></p>
            <p class="roll box paddinglf">Roll-<?php echo   $roll; ?></p>
        </div>

        <div class="personal_information">
         <p class="e_name box paddinglf margint">Name: <?php echo   $e_name; ?></p>
         <p class="b_name box paddinglf margint">নাম: <?php echo   $b_name; ?></p>
         <p class="father_e_name box paddinglf margint">Father's Name: <?php echo   $father_e_name; ?></p>
         <p class="father_b_name box paddinglf margint">পিতার নাম: <?php echo   $father_b_name; ?></p>
         <p class="mother_e_name box paddinglf margint">Mother's Name: <?php echo   $mother_e_name; ?></p>
         <p class="mother_b_name box paddinglf margint">মাতার নাম: <?php echo   $mother_b_name; ?></p>
         <p class="national_num box paddinglf margint">NID NO: <?php echo   $national_num; ?></p>
         <p class="father_nid box paddinglf margint">Father's NID NO: <?php echo   $father_nid; ?></p>
         <p class="mother_nid box paddinglf margint">Mothers NID NO: <?php echo   $mother_nid; ?></p>
         <p class="birth_date box paddinglf margint">Birth Date: <?php echo   $birth_date; ?></p>
         <p class="gender box paddinglf margint">Gender: <?php echo   $gender; ?></p>
         <p class="religion box paddinglf margint">Religion: <?php echo   $religion; ?></p>
         <p class="blood_group box paddinglf margint">Blood Group: <?php echo   $blood_group; ?></p>
         <p class="box paddinglf margint per_id">Personal ID Mark: <?php echo   $per_id; ?></p>
         <p class="height box paddinglf margint">Height: <?php echo   $height; ?></p>
         <p class="birth_num box paddinglf margint">Birth Registration Number: <?php echo   $birth_reg_num; ?></p>

        </div>
         <div class="admission_info">
          <p class="ad_roll box paddinglf margint">Admission Roll: <?php echo $ad_roll; ?></p>
          <p class="ad_num box paddinglf margint">Admission Mark: <?php echo $ad_num; ?></p>
          <p class="ad_total_number box paddinglf margint">Admission Total Mark: <?php echo $ad_total_number; ?></p>
          <p class="ad_merit box paddinglf margint">Admission Merit: <?php echo $ad_merit; ?></p>
          <p class="quota box paddinglf margint">Quoto: <?php echo $quota; ?></p>
         </div>
          <div class="pre_exam">

            <p class="ssc_text box paddinglf margint bold">SSC&nbsp;<img src="caret-forward-outline.svg" alt="" class="rarrow"></p>
            <p class="ssc_num box paddinglf margint">GPA: <?php echo $ssc_num; ?></p>
            <p class="ssc_pas_year box paddinglf margint">Passing Year: <?php echo $ssc_pas_year; ?></p>
            <p class="ssc_board box paddinglf margint">Board: <?php echo $ssc_board; ?></p>
            <p class="ssc_center box paddinglf margint">Center: <?php echo $ssc_center; ?></p>
            <p class="ssc_reg_num box paddinglf margint">Reg NO: <?php echo $ssc_reg_num; ?></p>
            <p class="ssc_scholar box paddinglf margint">Scholership: <?php echo $ssc_scholar; ?></p>

            <p class="hsc_text box paddinglf margint bold">HSC&nbsp;<img src="caret-forward-outline.svg" alt="" class="rarrow"></p>
            <p class="hsc_num box paddinglf margint">GPA: <?php echo $hsc_num; ?></p>
            <p class="hsc_pas_year box paddinglf margint">Passing Year: <?php echo $hsc_pas_year; ?></p>
            <p class="hsc_board box paddinglf margint">Board: <?php echo $hsc_board; ?></p>
            <p class="hsc_center box paddinglf margint">Center: <?php echo $hsc_center; ?></p>
            <p class="hsc_reg_num box paddinglf margint">Reg NO: <?php echo $hsc_reg_num; ?></p>
            <p class="hsc_scholar box paddinglf margint">Scholership: <?php echo $hsc_scholar; ?></p>

          </div>
          <div class="gurdian">
          <p class="gurdian_s_rel box paddinglf margint">Gurdian Relation: <?php echo $gurdian_s_rel ." (". $gurdian_f_rel . ")" ; ?></p>
          <p class="gur_name box paddinglf margint">Gurdian's Name: <?php echo $gur_name; ?></p>
          
          </div>





         <!-- address -->
        <div class="address">
          <div class="pre_address">
            <h3 class="pre_address_heading">Present Address</h3>
            <p class="pre_add_village margint">Village/Road: <?php echo $pre_add_village; ?></p>
            <p class="pre_add_post margint">Post: <?php echo $pre_add_post; ?></p>
            <p class="pre_add_gpo margint">Post Code: <?php echo $pre_add_gpo; ?></p>
            <p class="pre_add_upozilla margint">Upozilla: <?php echo $pre_add_upozilla; ?></p>
            <p class="pre_add_zilla margint">Zilla: <?php echo $pre_add_zilla; ?></p>
          </div>
          <div class="per_address">
          <h3 class="per_address_heading">Permanent Address</h3>
            <p class="per_add_village margint">Village/Road: <?php echo $per_add_village; ?></p>
            <p class="per_add_post margint">Post: <?php echo $per_add_post; ?></p>
            <p class="per_add_gpo margint">Post Code: <?php echo $per_add_gpo; ?></p>
            <p class="per_add_upozilla margint">Upozilla: <?php echo $per_add_upozilla; ?></p>
            <p class="per_add_zilla margint">Zilla: <?php echo $per_add_zilla; ?></p>
          </div>
          <div class="other_in">
          <p class="ssc_ins">SSC School: <?php echo $ssc_ins; ?></p>
          <p class="hsc_ins">HSC College: <?php echo $hsc_ins; ?></p>
          <p class="email">Email Address: <?php echo $email; ?></p>
          <p class="father_ocu">Gurdian Ocupassion: <?php echo $father_ocu; ?></p>
          <p class="father_sal">Gurdian Salary: <?php echo $father_sal; ?></p>
          </div>
        </div>
        <div class="allmob">
        <p class="mob_num box paddinglf margint">Mobile NO: <?php echo $mob_num; ?></p>
        <p class="gur_mob_num box paddinglf margint">Gurdian Mobile NO: <?php echo $gur_mob_num; ?></p>
          <h4 class="stu_sig margint">Student's Signature: </h4>
          <h4 class="gur_sig margint">Gurdian's Signature: </h4>

          <button class="print" onclick="window.print()">Print</button>
         </div>
     </div>
    </body>
    </html>
    


<!--HTML END-->

<?php
    }

  }

}else{
  header("location: http://kmc.stu.unaux.com");
}
    ?>

 
    






    <!--Showing data end-->

<?php
