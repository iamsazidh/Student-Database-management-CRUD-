<?php
session_start();

if($_SESSION['slpass']==true){

$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }


  if(isset($_POST['view_id'])){
    $rcvd_id = $_POST['view_id'];

    $get_info = "SELECT * FROM `k-31-foreigner` WHERE id = $rcvd_id";

    $select_info = mysqli_query($connection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {

        $password =  "{$row['password']}";


     ?>



<?php
    
}

  $passing_pass = $_POST['pass'];

  if($passing_pass==$password){
    
    ?>
    <!--The Showing DAta-->
    <?php


$connection = mysqli_connect('localhost', 'root', '','kmc');

if(!$connection){
   die("Not Connected." . mysqli_error($connection));
  }

  if(isset($_REQUEST['view_id'])){
    $rcvd_id = $_REQUEST['view_id'];

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


    <!--HTML HERE-->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Details</title>
        <link rel="stylesheet" href="viewstyle1.css">
        <link rel="stylesheet" href="viewstyle.css">
        <link rel="stylesheet" href="viewstyle2.css">
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
        
        <div class="personal_information1">
         <p class="stu_ins box mpadding margint bold">Student &nbsp;<img src="caret-forward-outline.svg" class="rarrow"></p>
           <p class="e_name box paddinglf margint">Name: <?php echo $e_name; ?></p>
           <p class="national_num box paddinglf margint">NID: <?php echo $national_num; ?></p>
         <p class="father_ins box mpadding margint bold">Father &nbsp;<img src="caret-forward-outline.svg" class="rarrow"></p>
         <p class="father_e_name box paddinglf margint">Name: <?php echo $father_e_name; ?></p>
         <p class="father_ocu box paddinglf margint">Occupation: <?php echo $father_ocu; ?></p>
         <p class="mother_ins box mpadding margint bold">Mother &nbsp;<img src="caret-forward-outline.svg" class="rarrow"></p>
         <p class="mother_e_name box paddinglf margint">Name: <?php echo $mother_e_name; ?></p>
         <p class="mother_ocu box paddinglf margint">Occupation: <?php echo $mother_ocu; ?></p>

     <p class="mmargin bir_date_ins box paddinglf">Birth Date</p>
     <p class="mmargin blood_ins box paddinglf">Blood Group</p>
     <p class="mmargin ad_cat_ins box paddinglf">Admission Category</p>
     <p class="mmargin mob_ins box paddinglf">Phone No</p>
     <p class="mmargin country_ins box paddinglf">Country</p>
     <p class="mmargin religion_ins box paddinglf">Religion</p>

     <p class="birth_date mmargint box paddinglf"><?php echo $birth_date; ?></p>
     <p class="blood_group mmargint box paddinglf"><?php echo $blood_group; ?></p>
     <p class="quota box mmargint paddinglf"><?php echo $quota; ?></p>
     <p class="mob_num1 mmargint box"><?php echo $mob_num; ?></p>
     <p class="country mmargint box paddinglf"><?php echo $country; ?></p>
     <p class="religion mmargint box paddinglf"><?php echo $religion; ?></p>

     <p class="gender box mmargint2 paddinglf">Gender: <?php echo $gender; ?></p>
     <p class="email box mmargint2 paddinglf">Email: <?php echo $email; ?></p>

    </div>


    <div class="pre_exam">

            <p class="ssc_text box paddinglf bold">SSC&nbsp;<img src="caret-forward-outline.svg" alt="" class="rarrow"></p>
            <p class="ssc_deg box paddinglf">Degree: <?php echo $ssc_deg; ?></p>
            <p class="ssc_roll box paddinglf">Roll: <?php echo $ssc_roll; ?></p>
            <p class="ssc_num box paddinglf">GPA: <?php echo $ssc_num; ?></p>

            <p class="ssc_pas_year box paddinglf">Passing Year: <?php echo $ssc_pas_year; ?></p>
            <p class="ssc_reg_num box paddinglf">Reg NO: <?php echo $ssc_reg_num; ?></p>

            <p class="hsc_text box paddinglf  margint bold">HSC&nbsp;<img src="caret-forward-outline.svg" alt="" class="rarrow"></p>
            <p class="hsc_deg box paddinglf margint">Degree: <?php echo $hsc_deg; ?></p>
            <p class="hsc_roll box paddinglf margint">Roll: <?php echo $hsc_roll; ?></p>
            <p class="hsc_num box paddinglf margint">GPA: <?php echo $hsc_num; ?></p>

            <p class="hsc_pas_year box paddinglf margint">Passing Year: <?php echo $hsc_pas_year; ?></p>
            <p class="hsc_reg_num box paddinglf margint">Reg NO: <?php echo $hsc_reg_num; ?></p>

          <p class="hsc_ins box paddinglf margint">HSC School Name: <?php echo $hsc_ins; ?></p>
          <p class="ssc_ins box paddinglf margint">SSC School Name: <?php echo $ssc_ins; ?></p>
          </div>

<div class="address">
<div class="pre_address mmargint2">
  <p class="pre_add_ins paddinglf">Present Address</p>
  <p class="pre_add mmargint3"><?php echo $per_add ?></p>
  </div>
  <div class="per_address mmargint2">
  <p class="per_add_ins paddinglf">Permanent Address</p>
  <p class="per_add mmargint3"><?php echo $per_add ?></p>
  </div>
  <div class="other_info mmargint2">
  <p class="passport_no">Passport NO: <?php echo $passport_no ?></p>
  <p class="date_issue margint">Date of Issue: <?php echo $date_issue ?></p>
  <p class="date_expiry margint">Date of Expiry: <?php echo $date_expiry ?></p>
  <p class="visa_no margint">Visa NO: <?php echo $visa_no ?></p>
  <p class="arrival_date margint">Arrival Date: <?php echo $arrival_date ?></p>
  </div>
</div>






















         <!-- last -->
         <div class="signature">
          <h4 class="stu_sig">Student's Signature: </h4>
          <h4 class="gur_sig">Chairman's Signature: </h4>

          <button class="print" onclick="window.print()">Print</button>
         </div>
     </div>
     
    </body>
    </html>
    


<!--HTML END-->

<?php
    }

  }


    ?>

 
    






    <!--Showing data end-->
<?php



  }else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Error</title>
      <link rel="stylesheet" href="viewserrorstyle.css">
    </head>
    <body>
      <center><h4 class="wrong">Wrong Password</h4></center>
      <center><button onclick="window.history.back()" class="back">Click To Go Back</button></center>
    </body>
    </html>
    <?php
  }


    }



  }else{
    header("location: http://kmc.stu.unaux.com");
  }
    ?>

 
    
    
    
    
    