<?php
session_start();
if($_SESSION['lpass']==true){
$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  if(isset($_REQUEST['edit_id'])){
    $rcvd_id = $_REQUEST['edit_id'];

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styleform2.css">

  <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
  <title>Edit ID (Merit-<?php echo $ad_merit; ?></title>
</head>
<body>
  <div class="mycontainer">
    <img src="KMC.png" alt="kmc logo" class="mylogo"><br><br><br><h4 class="ayi_">Add Your Information to KMC Database</h4>
<form action="update.php" method="post">
  <div class="fform">
  <fieldset class="basic_info" >
    <legend>Basic Information</legend>
    <label for="ename">Name (English)</label><br>
    <input value="<?php echo $e_name; ?>" class="inpu"  type="text" name="e_name"><br>
    <label for="ename">Name (বাংলা)</label><br>
    <input value="<?php echo $b_name; ?>" class="inpu" name="b_name" type="text" ><br>

    <select name="session" id="">
      <option value="">Select Session</option>
      <option value="2021-2022" <?php if($session=='2021-2022'){ echo "selected"; } ?>>2021-2022</option>
    </select>
    <select name="quota" id="">
      <option value="">Select Quota</option>
      <option value="Merit" <?php if($quota=='Merit'){ echo "selected"; } ?>>Merit</option>
      <option value="FF" <?php if($quota=='FF'){ echo "selected"; } ?>>FF</option>
      <option value="Foreign" <?php if($quota=='Foreign'){ echo "selected"; } ?>>Foreign</option>
      <option value="District" <?php if($quota=='District'){ echo "selected"; } ?>>District</option>
    </select><br>
    <label for="">Class Roll</label><br>
    <input value="<?php echo $roll; ?>" class="inpu" type="number" name="class_roll"><br>
    <label for="ad_roll">Admission Roll</label><br>
    <input value="<?php echo $ad_roll; ?>" class="inpu" type="number" name="ad_roll" id="ad_roll"><br>
    <label for="">Merit No</label><br>
     <input value="<?php echo $ad_merit; ?>" class="inpu" type="number" name="merit"><br>

    <label for="">Admission Mark</label><br>
     <input value="<?php echo $ad_num; ?>" class="inpu" type="text" name="ad_num"><br>
    <label for="">Admission Total Mark</label><br>
     <input value="<?php echo $ad_total_number; ?>" class="inpu" type="text" name="ad_total_number"><br>

    <label for="">Date of Admission</label><br>
    <input value="<?php echo $ad_date; ?>" type="date" name="date_ad">

  </fieldset>
  <fieldset class="per_info">
    <legend>Personal Information</legend>
    <label for="mob_num">Mobile Number</label><br>
    <input value="<?php echo $mob_num; ?>" class="inpu" type="number" name="mob_num" id=""><br>
    <label for="email">Email Address</label><br>
    <input value="<?php echo $email; ?>" class="inpu" type="text" name="email"><br>
    <label for="birth_reg_num">Birth Registration Number</label><br>
    <input value="<?php echo $birth_reg_num; ?>" class="inpu" type="number" name="birth_reg_num" id=""><br>
    <label for="national_no">National ID No</label><br>
    <input value="<?php echo $national_num; ?>" class="inpu" type="number" name="national_num" id=""><br>
    <label for="">Date Of Birth</label><br>
    <input value="<?php echo $birth_date; ?>" class="inpu" type="date" name="birth_date" id=""><br>
    <label for="blood">Blood Group</label><br>
    <input value="<?php echo $blood_group; ?>" class="inpu" type="text" name="blood"><br>
    <label for="gender">Gender</label>
    <input <?php if($gender=='Male'){ echo "checked"; } ?> type="radio" name="gender" id="" value="Male">Male
    <input <?php if($gender=='Female'){ echo "checked"; } ?> type="radio" name="gender" id="" value="Female">Female
    <!--<input type="radio" name="gender" id="" value="Other">Other----> <br><br><br>
    <label for="religion">Religion</label><br>
    <input value="<?php echo $religion; ?>" class="inpu" type="text" name="religion"><br>
    <label for="height">Height (cm)</label><br>
    <input value="<?php echo $height; ?>" class="inpu" type="text" name="height" id=""><br>
    <label for="per_id_mark">Personal ID Mark (Optional)</label><br>
    <input value="<?php echo $per_id; ?>" class="inpu" type="text" name="per_id" id=""><br>


  </fieldset>
   <fieldset class="parent_info">
    <legend>Parent Information & Emergency Contact</legend>
    <label for="">Father Name (EN)</label>     <br>
    <input value="<?php echo $father_e_name; ?>" class="inpu" type="text" name="f_e_name">     <br>
    <label for="">Father Name (BN)</label>     <br>
    <input value="<?php echo $father_b_name; ?>" class="inpu" type="text" name="f_b_name">     <br>
    <label for="">Mother Name (EN)</label>     <br>
    <input value="<?php echo $mother_e_name; ?>" class="inpu" type="text" name="m_e_name">     <br>
    <label for="">Mother Name (BN)</label>     <br>
    <input value="<?php echo $mother_b_name; ?>" class="inpu" type="text" name="m_b_name">     <br>
    <label for="">Father's NID No</label><br>
    <input value="<?php echo $father_nid; ?>" type="number" name="father_nid" class="inpu"><br>
    <label for="">Mother's NID No</label><br>
    <input value="<?php echo $mother_nid; ?>" type="number" name="mother_nid" class="inpu"><br>
     <label for="">Gurdian's Relation</label><br>
    <input <?php if($gurdian_s_rel=='Father'){ echo "checked"; } ?> type="radio" name="gurdian_s_rel" id="" value="Father">Father
    <input <?php if($gurdian_s_rel=='Mother'){ echo "checked"; } ?> type="radio" name="gurdian_s_rel" id="" value="Mother">Mother
    <input <?php if($gurdian_s_rel=='Other'){ echo "checked"; } ?> type="radio" name="gurdian_s_rel" id="" value="Other">Other <br><br>
    <label for="">(If Other) Relation</label><br>
    <input value="<?php echo $gurdian_f_rel; ?>" class="inpu" type="text" name="gur_f_rel"><br><br><br>
    <label for="">(If Other) Name</label><br>
    <input value="<?php echo $gur_name; ?>" class="inpu" type="text" name="gur_name"><br><br><br>

    <label for="">Gurdian Mobile No</label><br>
    <input value="<?php echo $gur_mob_num; ?>" class="inpu" type="number" name="gur_num" id=""><br>
    <label for="gur_addreas">Gurdian Addreas</label><br>
    <input value="<?php echo $gur_add; ?>" class="inpu" type="text" name="gur_address" id=""><br>
   </fieldset>

   <fieldset class="address">
    <Legend>Address</Legend>
    <h3>Present Address</h3>
    <label for="village">Village</label><br>
    <input value="<?php echo $pre_add_village; ?>" class="inpu" type="text" name="pre_add_village" id=""><br>
    <label for="">District</label><br>
    <input value="<?php echo $pre_add_zilla; ?>" class="inpu" type="text" name="pre_add_zilla"><br>
    <label for="">PS/Upazila</label><br>
    <input value="<?php echo $pre_add_upozilla; ?>" class="inpu" type="text" name="pre_add_upozilla"><br>
     <label for="">Post Office</label>  <br>
     <input value="<?php echo $pre_add_post; ?>" class="inpu" type="text" name="pre_add_post"><br>
     <label for="">Post Code</label>  <br>
     <input value="<?php echo $pre_add_gpo; ?>" class="inpu" type="text" name="pre_add_gpo"><br>

     <h3>Permanent Address</h3>
     <label for="village">Village</label><br>
    <input value="<?php echo $per_add_village; ?>" class="inpu" type="text" name="per_add_village" id=""><br>
    <label for="">District</label><br>
    <input value="<?php echo $per_add_zilla; ?>" class="inpu" type="text" name="per_add_zilla"><br>
    <label for="">PS/Upazila</label><br>
    <input value="<?php echo $per_add_upozilla; ?>" class="inpu" type="text" name="per_add_upozilla"><br>
     <label for="">Post Office</label>  <br>
     <input value="<?php echo $per_add_post; ?>" class="inpu" type="text" name="per_add_post"><br>
     <label for="">Post Code</label>  <br>
     <input value="<?php echo $per_add_gpo; ?>" class="inpu" type="text" name="per_add_gpo">
   </fieldset>

   <fieldset class="pre_aca_info">
    <Legend>Previous Academic Information</Legend>
    <h3>HSC</h3><br><br>
    <label>Institution Name</label><br>
    <input value="<?php echo $hsc_ins; ?>" class="inpu" type="text" name="hsc_ins"><br>
    <label for="">Board</label><br>
    <input value="<?php echo $hsc_board; ?>" class="inpu" type="text" name="hsc_board"><br>
    <label for="">Roll</label><br>
    <input value="<?php echo $hsc_roll; ?>" class="inpu" type="number" name="hsc_roll" id=""><br>
    <label for="">Passing Year</label><br>
    <input value="<?php echo $hsc_pas_year; ?>" class="inpu" type="number" name="hsc_pas_year" id=""><br>
    <label for="">Marks/GPA</label><br>
    <input value="<?php echo $hsc_num; ?>" class="inpu" type="text" name="hsc_gpa" id=""><br>
    <label for="">HSC GPA Witout 4 Subject</label><br>
    <input value="<?php echo $hsc_num_4th; ?>" class="inpu" type="text" name="hsc_without4" id=""><br>
    <label for="">Hsc Scholership (Yes or NO)</label><br>
    <input value="<?php echo $hsc_scholar; ?>" class="inpu" type="text" name="hsc_scholar" id=""><br>
    <label for="">HSC Center</label><br>
    <input value="<?php echo $hsc_center; ?>" class="inpu" type="text" name="hsc_center"><br>
    <label for="">Registration Number</label><br>
    <input value="<?php echo $hsc_reg_num; ?>" class="inpu" type="number" name="hsc_reg_no"><br><br><br>

    <h3>SSC</h3><br><br>
    <label>Institution Name</label><br>
    <input value="<?php echo $ssc_ins; ?>" class="inpu" type="text" name="ssc_ins"><br>
    <label for="">Board</label><br>
    <input value="<?php echo $ssc_board; ?>" class="inpu" type="text" name="ssc_board"><br>
    <label for="">Roll</label><br>
    <input value="<?php echo $ssc_roll; ?>" class="inpu" type="number" name="ssc_roll" id=""><br>
    <label for="">Passing Year</label><br>
    <input value="<?php echo $ssc_pas_year; ?>" class="inpu" type="number" name="ssc_pas_year" id=""><br>
    <label for="">Marks/GPA</label><br>
    <input value="<?php echo $ssc_num; ?>" class="inpu" type="text" name="ssc_gpa" id=""><br>
    <label for="">SSC GPA Witout 4 Subject</label><br>
    <input value="<?php echo $ssc_num_4th; ?>" class="inpu" type="text" name="ssc_without4" id=""><br>
    <label for="">Ssc Scholership (Yes or NO)</label><br>
    <input value="<?php echo $ssc_scholar; ?>" class="inpu" type="text" name="ssc_scholar" id=""><br>
    <label for="">SSC Center</label><br>
    <input value="<?php echo $ssc_center; ?>" class="inpu" type="text" name="ssc_center"><br>
    <label for="">Registration Number</label><br>
    <input value="<?php echo $ssc_reg_num; ?>" class="inpu" type="number" name="ssc_reg_no"><br><br>

   </fieldset>

   <fieldset>
    <legend>Other Information</legend>
    <label for="">Gurdian's Occupation</label><br>
    <input value="<?php echo $father_ocu; ?>" class="inpu" type="text" name="gur_ocu"><br>
    <label for="">Gurdian's Income</label><br>
    <input value="<?php echo $father_sal; ?>" class="inpu" type="number" name="gur_sal" id=""><br>

   </fieldset>
   </div>
   
     <input type="submit" value="Submit" name="submit" class="subbtn">
     <input type="hidden" name="updating_id" value="<?php echo $rcvd_id; ?>">
  </form>
  </div>
</body>
</html>
<?php
    }

  }

}else{
  header("location: http://kmc.stu.unaux.com");
}
    ?>

 
    
    
    
    
  