<?php
    //session_start();
    $name = $_SESSION['FullName'];
    $log = $_SESSION['log'];
    $images = $_SESSION['Image'];
    ob_start();


?>
<?php 
$con = new Database();


 ?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="assets/img/<?php echo $_SESSION['Image']; ?> "  alt="..." class="img-fluid rounded-circle"></div>


            <div class="title">
              <h1 class="h4"><?="$name";?></h1>
              <p><?="$log";?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Section of Site</a>
                      <ul id="tablesDropdown" class="collapse list-unstyled ">
                        <li><a href="../admin/about.show.php?about&id=1">About</a></li>
                        <li><a href="../admin/banner.inc.php?banner&id=2">Banner</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="../admin/comtact.inc.php?Contact&id=4""">Contact</a></li>
                        <li><a href="../admin/footer.inc.php?Editfooter&id=5">Footer</a></li>
                        <li><a href="../admin/loginpage.inc.php?Editloginpage&id=6">Login Page</a></li>
                        <li><a href="port.inc.php">Portfolio</a></li>
                        <li><a href="../admin/test.inc.php?Testimonialter&id=6">Testimonial</a></li>
                        <li><a href="../admin/services.inc.php?Servicesedit&id=7">Services</a></li>
                        <li><a href="../admin/Success.inc.php?successedit&id=7">Success Page</a></li>
                      </ul>
                    </li>
                    <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Password View</a>
                      <ul id="chartsDropdown" class="collapse list-unstyled ">
                        <li><a href="password.php">Change PassWord</a></li>
                        <li><a href="info.php">View Info</a></li>
                      </ul>
                    </li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
