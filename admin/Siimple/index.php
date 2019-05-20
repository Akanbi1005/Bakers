<?php
$url != '../signup.php';

if ($_SERVER['HTTP_REFERER'] == $url) {
    header('Location: ../login.php'); //redirect to some other page
    exit();
}else{
    header('Location: ../signup.php');
}
?>
<?php
include_once "../include/Database.php";
$con = new Database();
$show = $con->select_by_id('banner','1');
$success = $con->select_by_id('success','1');
?>
<?php
header( "refresh:5;url=../login.php" );

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$success['web_name']?></title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Siimple
    Theme URL: https://bootstrapmade.com/free-bootstrap-landing-page/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="../../index.php"><?=$success['web_name']?></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <!--
          <li><a href="#">Sign up</a></li>
          <li><a href="#">Sign in</a></li>
        -->
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1><?=$success['web_header']?></h1>
          <h2 class="subtitle"><?=$success['web_body']?></h2>
          <form class="form-inline signup" role="form">
              <!--
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
            </div>
            <button type="submit" class="btn btn-theme">Get it now</button>
            -->
          </form>
        </div>
        <div class="col-lg-4 col-lg-offset-2">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="assets/img/slide1.png" alt="">
              </div>
              <div class="item">
                <img src="assets/img/slide2.png" alt="">
              </div>
              <div class="item">
                <img src="assets/img/slide3.png" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright">&copy; <?=$success['web_name']?></p>
        </div>
        <div class="col-md-6">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Siimple

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
