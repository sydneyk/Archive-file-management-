<?php

session_start();

?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../icons/logo.png">
    <title>register</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20" style="color: white;">
                        <h1>Register Here</h1>
                            <?php
                        if (isset($_SESSION['message31'])) {
                          echo "<h5 class='mb-0'>".$_SESSION['message31']."</h5>";
                          unset($_SESSION['message31']);
                        }
                    ?>
                    </div>

                    <!-- Form -->
<form class="form-horizontal m-t-20" action="inc/reg.php" method="POST">
    <div class="row p-b-30">
        <div class="col-12">
            <!-- Username -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
            </div>
            
            <!-- Parent's Email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white" id="basic-addon3"><i class="ti-email"></i></span>
                </div>
                <input type="text" class="form-control form-control-lg" placeholder="Your Email Address" aria-label="Your Email Address" aria-describedby="basic-addon3" name="parent_email" required>
            </div>
            <!-- Parent's Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-warning text-white" id="basic-addon4"><i class="ti-pencil"></i></span>
                </div>
                <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon4" name="password" required>
            </div>
            <!-- Confirm Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-white" id="basic-addon5"><i class="ti-pencil"></i></span>
                </div>
                <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon5" name="confirm_password" required>
            </div>
        </div>
    </div>
    <div class="row border-top border-secondary">
        <div class="col-12">
            <div class="form-group">
                <div class="p-t-20">
                    <button class="btn btn-block btn-lg btn-info" name="submit" type="submit">Sign Up</button>
                </div>
                
            </div>
        </div>
    </div>
</form>
<div class="p-t-20">
                   <a href="index.php"> <button class="btn btn-block btn-lg btn-warning" type="submit">Sign In</button></a>
                </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>

</html>