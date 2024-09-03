
<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>




<!DOCTYPE html>
<html class="no-js " lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: HR Admin :: Sign Up</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <style>
        body {
            margin-top: 1.5rem;
        }
    </style>

</head>

<body class="theme-blush">

<div class="authentication">   

    <!-- <span>err</span> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" action="includes/signup.inc.php" method="post">
                    <div class="header">
                        <img class="logo" src="assets/images/logo.svg" alt="">
                        <h5>Sign Up</h5>
                        <span>Register a new account</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control wow" name="username" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <!-- <span>Err</span> -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>                        
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="pwd" placeholder="Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>                            
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                        </div>
                        <button class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</button>
                        <div class="signin_with mt-3">
                            <span>Already have an account ?</span> <a class="link" href="sign-in.html"> SIGN-IN </a>
                        </div>
                    </div>
                </form>
                <!-- <span>Err</span> -->
                <?php
                check_signup_errors();
                ?>
                
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="#">Fredrick Muasya</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="assets/images/signup.svg" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
</body>


</html>