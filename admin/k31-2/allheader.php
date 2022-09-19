
                                                
                                                
                                                
                                                <div class="fullpage border-bottom border-3 border-info">
                                                <!-- for full page -->
                                                <!--  For Only Form -->
<form action="allheader.php" method="post" class="row w-100">

    <div class="col-xxl-2 col-8 col-sm-6 col-lg-3 col-md-4 my-3" style="margin-left: 4mm;">
                        <select name="show_data_from" id="" class="form-select">
                                <option value="" selected>Select Batch</option>
                                <option value="k31">K-31</option>
                                <option value="k31f">K31-Foreigner</option>
                        </select>
                </div>
            <div class="col-xxl-1 col-lg-2 col-sm-2 col-3 mx-0 my-3">
                        <input type="submit" value="Show" class="btn btn-success">
                </div>
                <div class=" col-xxl-8 col-11 col-sm-3 my-3 text-end"> 
                <a href="logout.php" class="btn btn-danger" style="height: 10mm; padding-top: 0mm; padding-bottom: 5mm;"><span class="logouttext">Logout &nbsp;</span><img src="log-out-outline.svg" style="height: 10mm; width: auto; margin-top: 0mm;"></a>
            </div>
</form>
                                                
                                            <!-- PAGE END  -->
                                                </div>
 


<?php

if(isset($_POST['show_data_from'])){
 
    $show_data_from = $_POST['show_data_from'];
   
    if($show_data_from == 'k31'){
                        $_SESSION['lpass'] = $lpass;
                        $_SESSION['current_timestamp'] = time();
                header("location: http://kmc.stu.unaux.com/admin\k31-1");
    }elseif(($show_data_from == 'k31f')){
                        $_SESSION['lpass'] = $lpass;
                        $_SESSION['current_timestamp'] = time();
                header("location: http://kmc.stu.unaux.com/admin\k31-2");
    }
}


?>