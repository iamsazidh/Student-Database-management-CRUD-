<?php

session_start();

if(isset($_SESSION['lpass'])){
     
    header("location: admin/k31-1/index.php");

}else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="KMC, KMC Register, kmc, KMC Student, Khulna Medical College">
    <meta name="author" content="Sazid Hasan">
    <meta name="description" content="Students Can Register here">
    <title>Login To KMC</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="shortcut icon" type="x-icon" href="KMClogo.ico">

</head>
<body>
    <nav id="navigationBar" class="main-header navbar navbar-expand navbar-light" style="margin:0 !important">
    </nav>
    <div class="content-wrapper mrl-zero" id="contentWrapper">
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6">

                    <div class="card o-hidden border-0">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12 pt-1">
                                    <div class="custom-file form-image text-center" style="height:150px">
                                        <img id="viewableImage" class="viewableImage" style="width: 143px;height:160px; object-fit: cover; padding-top: 10px; padding-bottom: 10px;" src="KMC.png" alt="">
                                    </div>
                                    <div class="text-center" style="color: black; font-weight:bold">
                                        <h1 class="h3 text-gray-900 mb-4">Khulna Medical College</h1>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div style="padding:2rem 3rem 2rem 3rem !important;">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        </div>
                                        <form action="pass.php" method="post">
                                            <div class="form-group">
                                                <div class="co"></div>
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required name="password">
                                                <small><span class="text-danger field-validation-valid" data-valmsg-for="Input.Password" data-valmsg-replace="true"></span></small>
                                            </div>
                                            <div class="container"></div>
                                            <div class="form-group">
                                            
                                            </div>
                                            <button type="submit" class="btn btn-primary my-3">
                                                Login
                                            </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>


<?php

}
?>