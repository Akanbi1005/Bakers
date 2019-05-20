<?php
/**
 * Created by PhpStorm.
 * User: Hollami
 * Date: 8/6/2018
 * Time: 11:17 AM
 */
include_once "include/Database.php";
$con = new Database();
$signup = $con->select_by_id('login','1');
?>

<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.CodeHolla.com/admin-premium/1-4-3/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jul 2018 11:32:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$signup['sign_title1']?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-3/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1><?=$signup['sign_title1']?></h1>
                  </div>
                  <p><?=$signup['sign_body']?></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="form-validate" action="signup.inc.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <input id="register-username" type="text" name="FullName" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">Full Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="Username" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="Email" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-password" type="password" name="Password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password        </label>
                    </div>
                    <div class="form-group">
                      <input id="register-Access" type="text" name="Access" required data-msg="Please enter your Access Level" class="input-material">
                      <label for="register-password" class="label-material">Access Level      </label>
                    </div>
                    <div class="form-group">
                      <label class="Custom-Upload">
                        <input type="file" id="file" name="Image" class="form-control">
                      </label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">Agree the terms and policy</label>
                    </div>
                    <div class="form-group">
                      <button id="regidter" href="signup.inc.php" type="submit" name="Submit" class="btn btn-primary">Register</button>
                    </div>
                  </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
          <p>Design by <a href="../<?=$signup['sign_footer_link']?>" class="external"><?=$signup['sign_footer_name']?></a>
      </div>
    </div>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-md-inline-block"><i class="fa fa-cog fa-2x"></i></button>
    </div>
    <!-- JavaScript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="assets/js/front.js"></script>
  </body>

<!-- Mirrored from demo.CodeHolla.com/admin-premium/1-4-3/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jul 2018 11:32:08 GMT -->
</html>