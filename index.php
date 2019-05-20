<?php

include_once "admin/include/Database.php";

session_start();

$db = new Database();

$banners = $db->select_all('*','banner');
$abouts = $db->select_all('*','about');
$services = $db->select_all('*','services');
$service = $db->select_all('*','portfolio');
$test = $db->select_by_id('services','1');
$portfolios = $db->select_all('*','portfolio');
$port = $db->select_by_id('portfolio','2');
$Testi = $db->select_all('*','test');
$blogs = $db->select_all('*','blog');
$contact = $db->select_by_id('contact','1');
$success = $db->select_by_id('success','1');
$footer = $db->select_by_id('footer','1');
$blog = $db->select_by_id('blog','1');



////
//echo '<pre>';
//print_r($test);
//echo "<pre>";
//die();



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $success['web_name']?></title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Pacifico" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<!--//////////////// Header section /////-->
<div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Code<span class="logo-dec">Holla</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#feature">About</a></li>
                  <li class=""><a href="#service">Services</a></li>
                  <li class=""><a href="#portfolio">Portfolio</a></li>
                  <li class=""><a href="#testimonial">Testimonial</a></li>
                  <li class=""><a href="#blog">Blog</a></li>
                  <li class=""><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        
          <?php foreach ($banners as $banner){ ?>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">

                  <h1 class="bnr-title"><?=$banner['banner_header'];?></h1>
                  <h2 class="bnr-sub-title"><?=$banner['banner_body1'];?></h2>
                  <p class="bnr-para"><?=$banner['banner_body2'];?>.</p>
                  <div class="brn-btn">

                      <a href="Admin/login.php" target="_blank" class="btn btn-more"><?=$banner['banner_btn']?></a>
                  </div>
                  <div class="overlay-detail">
                      <a href="#feature"><i class="fa fa-angle-down"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>


    <!--About-->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
        <?php foreach ($abouts as $about){ ?>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="<?=$about['about_img']?>">
              </div>
              <h3 class="pad-bt15"><?=$about['about_header']?></h3>
              <p><?=$about['about_body']?>.</p>
            </div>
          </div>

            <?php } ?>
    </section>

    <!---->



    <!--Service-->
    <section id="service" class="section-padding wow fadeInUp delay-05s">

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15"><?=$test['header']?></h2>
            <p class="sub-title pad-bt15"><?=$test['body']?></p>
            <hr class="bottom-line">
          </div>
            <?php foreach ($services as $service){ ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3><?=$service['service_header']?></h3>
                        <p><?=$service['service_body']?></p>
                        <a href="<?=$service['service_offer']?>">learn more...</a>
                    </div>
                </div>
            <?php }?>
        </div>
      </div>

    </section>
    <!---->
    <!---->
    <!---->
    <!--Portfolios-->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15"><?=$port['port_header'];?></h2>
            <p class="sub-title pad-bt15"><?=$port['port_body_'];?></p>
            <hr class="bottom-line">
          </div>
            <?php foreach ($portfolios as $portfolio) { ?>
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">

                <figure>
                        <img src="<?=$portfolio['port_image']?>" class="img-responsive">
                        <figcaption>
                            <h2><?=$portfolio['port_image_header']?></h2>
                            <p><?= $portfolio['port_img_text']?></p>
                        </figcaption>

                </figure>

            </div>
            <?php } ?>
        </div>
      </div>
    </section>
    <!---->
    <!--Testimonial-->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                  <?php foreach ($Testi as $tester){ ?>
                    <li>

                        <blockquote>
                            <img src="img/<?=$tester['test_image']; ?>" class="img-responsive">
                            <p><?=$tester['test_comment']; ?></p>
                        </blockquote>
                        <small><?=$tester['text_commenter']; ?></small>

                    </li>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
      <!--                                 Blog                    -->

    <section id="blog" class="section-padding wow fadeInUp delay-05s">

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15"><?=$blog['blog_header']?></h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
            <?php foreach ($blogs as $blog){ ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="<?=$blog['blog_img']?>" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2><?=$blog['blog_img_header']?></h2>
                <div class="blog-comment">
                  <p><?=$blog['blog_postby']?></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p><?= $blog['blog_img_body']?>
                </p>
                <a href="<?=$blog['blog_img_link']?>" class="read-more">Read More→</a>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>

    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">

        <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15"><?=$contact['contact_header']?></h2>
            <p class="sub-title pad-bt15"> <?=$contact['contact_body']?></p>
            <hr class="bottom-line white-bg">
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i><?=$contact['contact_addr']?></p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><?=$contact['contact_email']?></p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i><?=$contact['contact_num']?></p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!!</div>
              <div id="errormessage"></div>

              <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy;<?=$footer['copyright']?></p>
          <div class="credits">
            Designed by <a href="<?=$footer['owner_link']?>"><?=$footer['owner']?></a>
          </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
