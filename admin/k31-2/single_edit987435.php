<?php
session_start();
if($_SESSION['lpass']==true){
$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  if(isset($_REQUEST['edit_id'])){
    $rcvd_id = $_REQUEST['edit_id'];

    $get_info = "SELECT * FROM `k-31-foreigner` WHERE id = $rcvd_id";

    $select_info = mysqli_query($connection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {

      $id =  "{$row['id']}";
      $roll =  "{$row['roll']}";
      $e_name =  "{$row['e_name']}";
      $father_e_name =  "{$row['father_e_name']}";

      $mother_e_name =  "{$row['mother_e_name']}";

      $birth_date =  "{$row['birth_date']}";
      $gender =  "{$row['gender']}";
      $blood_group =  "{$row['blood_group']}";
      $religion =  "{$row['religion']}";

      $quota =  "{$row['quota']}";
      $national_num =  "{$row['national_num']}";


      $ssc_ins =  "{$row['ssc_ins']}";
      $ssc_num =  "{$row['ssc_num']}";
      $ssc_pas_year =  "{$row['ssc_pas_year']}";
      $ssc_roll =  "{$row['ssc_roll']}";
      $ssc_reg_num =  "{$row['ssc_reg_num']}";
      $ssc_deg =  "{$row['ssc_deg']}";


      $hsc_ins =  "{$row['hsc_ins']}";
      $hsc_num =  "{$row['hsc_num']}";
      $hsc_pas_year =  "{$row['hsc_pas_year']}";
      $hsc_roll =  "{$row['hsc_roll']}";
      $hsc_reg_num =  "{$row['hsc_reg_num']}";
      $hsc_deg =  "{$row['hsc_deg']}";



      $per_add =  "{$row['per_add']}";
      $pre_add =  "{$row['pre_add']}";
     

      $mob_num =  "{$row['mob_num']}";
      $gur_mob_num =  "{$row['gur_mob_num']}";
      $email =  "{$row['email']}";
      $father_ocu =  "{$row['father_ocu']}";
      $mother_ocu =  "{$row['mother_ocu']}";
      $password =  "{$row['password']}";
      $sub_time =  "{$row['sub_time']}";
      $ad_date =  "{$row['ad_date']}";
      $session = "{$row['session']}";
      $height = "{$row['height']}";


      $passport_no = "{$row['passport_no']}";
      $date_issue = "{$row['date_issue']}";
      $date_expiry = "{$row['date_expiry']}";
      $visa_no = "{$row['visa_no']}";
      $arrival_date = "{$row['arrival_date']}";
      
      
      
      $country = "{$row['country']}";





     ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleform.css">
  <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">
  <title>Add Info</title>
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


    <select name="session" id="">
      <option value="">Select Session</option>
      <option value="2021-2022" <?php if($session=='2021-2022'){ echo "selected"; } ?>>2021-2022</option>
    </select>
    <select name="quota" id="">
      <option value="">Select Quota</option>
      <option value="SAARC" <?php if($quota=='SAARC'){ echo "selected"; } ?>>SAARC</option>
      <option value="None_SAARCH" <?php if($quota=='None_SAARCH'){ echo "selected"; } ?>>None SAARC</option>
    </select><br>

    <label for="">Class Roll &nbsp;(If You Know)</label><br>
    <input value="<?php echo $roll; ?>" class="inpu" type="number" name="class_roll"><br>

    <label for="">Date of Admission</label><br>
    <input value="<?php echo $ad_date; ?>" type="date" name="date_ad">

  </fieldset>
  <fieldset class="per_info">
    <legend>Personal Information</legend>
    <label for="mob_num">Mobile Number</label><br>
    <input value="<?php echo $mob_num; ?>" class="inpu" type="number" name="mob_num" id=""><br>
    <label for="email">Email Address</label><br>
    <input value="<?php echo $email; ?>" class="inpu" type="text" name="email"><br>
    <label for="">Country</label><br>
    <input value="<?php echo $country; ?>" type="text" class="country inpu" name="country"><br>
    <label for="national_no">National ID NO</label><br>
    <input value="<?php echo $national_num; ?>" class="inpu" type="number" name="national_num" id=""><br>
    <label for="">Date Of Birth</label><br>
    <input value="<?php echo $birth_date; ?>" class="inpu" type="date" name="birth_date" id=""><br>
    <label for="blood">Blood Group</label><br>
    <input value="<?php echo $blood_group; ?>" class="inpu" type="text" name="blood"><br>
    <label for="gender">Gender</label>
    <input <?php if($gender=='Male'){ echo "checked"; } ?> type="radio" name="gender" id="" value="Male">Male
    <input <?php if($gender=='Female'){ echo "checked"; } ?> type="radio" name="gender" id="" value="Female">Female
    <!--<inp" type="radio" name="gender" id="" value="Other">Other----> <br><br><br>
    <label for="religion">Religion</label><br>
    <input value="<?php echo $religion; ?>" class="inpu" type="text" name="religion"><br>
    <label for="height">Height (cm)</label><br>
    <input value="<?php echo $height; ?>" class="inpu" type="text" name="height" id=""><br>
  </fieldset>


   <fieldset class="parent_info">
    <legend>Parent Information & Emergency Contact</legend>
    <label for="">Father Name (EN)</label>     <br>
    <input value="<?php echo $father_e_name; ?>" class="inpu" type="text" name="f_e_name">     <br>
    <label for="">Mother Name (EN)</label>     <br>
    <input value="<?php echo $mother_e_name; ?>" class="inpu" type="text" name="m_e_name">     <br>
    <label for="">Father's Occupation</label><br>
    <input value="<?php echo $father_ocu; ?>" type="text" name="father_ocu" class="inpu"><br>
    <label for="">Mother's Occupation</label><br>
    <input value="<?php echo $mother_ocu; ?>" type="text" name="mother_ocu" class="inpu"><br>
    <label for="">Gurdian Mobile No (Optional)</label><br>
    <input value="<?php echo $gur_mob_num; ?>" class="inpu" type="number" name="gur_num" id=""><br>
   </fieldset>

   <fieldset class="address">
    <Legend>Address</Legend>
    
    <label for="village"><h3>Present Address</h3></label><br>
    <input value="<?php echo $pre_add; ?>" class="inpu" type="text" name="pre_add" id=""><br>

     <label for="village"><h3>Permanent Address</h3></label><br>
    <input value="<?php echo $per_add; ?>" class="inpu" type="text" name="per_add" id=""><br>
   </fieldset>

   <!--  -->
   <fieldset class="pre_aca_info">
    <Legend>Previous Academic Information</Legend>
    <h3>HSC</h3><br><br>
    <label for="">HSC Degree</label><br>
    <input value="<?php echo $hsc_deg; ?>" class="inpu" type="text" name="hsc_deg"><br>
    <label>Institution Name</label><br>
    <input value="<?php echo $hsc_ins; ?>" class="inpu" type="text" name="hsc_ins"><br>
    <label for="">Roll</label><br>
    <input value="<?php echo $hsc_roll; ?>" class="inpu" type="number" name="hsc_roll" id=""><br>
    <label for="">Passing Year</label><br>
    <input value="<?php echo $hsc_pas_year; ?>" class="inpu" type="number" name="hsc_pas_year" id=""><br>
    <label for="">Marks/GPA</label><br>
    <input value="<?php echo $hsc_num; ?>" class="inpu" type="text" name="hsc_gpa" id=""><br>
    <label for="">Registration NO</label><br>
    <input value="<?php echo $hsc_reg_num; ?>" class="inpu" type="number" name="hsc_reg_no"><br><br><br>

    <h3>SSC</h3><br><br>
    <label for="">SSC Degree</label><br>
    <input value="<?php echo $ssc_deg; ?>" class="inpu" type="text" name="ssc_deg"><br>
    <label>Institution Name</label><br>
    <input value="<?php echo $ssc_ins; ?>" class="inpu" type="text" name="ssc_ins"><br>
    <label for="">Roll</label><br>
    <input value="<?php echo $ssc_roll; ?>" class="inpu" type="number" name="ssc_roll" id=""><br>
    <label for="">Passing Year</label><br>
    <input value="<?php echo $ssc_pas_year; ?>" class="inpu" type="number" name="ssc_pas_year" id=""><br>
    <label for="">Marks/GPA</label><br>
    <input value="<?php echo $ssc_num; ?>" class="inpu" type="text" name="ssc_gpa" id=""><br>
    <label for="">Registration NO</label><br>
    <input value="<?php echo $ssc_reg_num; ?>" class="inpu" type="number" name="ssc_reg_no"><br><br>
   </fieldset>


   <fieldset>
    <legend>Other Information</legend>
    <label for="">Passport NO</label><br>
    <input value="<?php echo $passport_no; ?>" class="inpu" type="number" name="passport_no"><br><br>
    <label for="">Date of Issue</label><br>
    <input value="<?php echo $date_issue; ?>" class="inpu" type="date" name="date_issue"><br><br>
    <label for="">Date of Expiry</label><br>
    <input value="<?php echo $date_expiry; ?>" class="inpu" type="date" name="date_expiry"><br><br>
    <label for="">Visa NO</label><br>
    <input value="<?php echo $visa_no; ?>" class="inpu" type="number" name="visa_no"><br><br>
    <label for="">Arrival Date</label><br>
    <input value="<?php echo $arrival_date; ?>" class="inpu" type="date" name="arri_date"><br><br>
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

 
    
    
    
    
  