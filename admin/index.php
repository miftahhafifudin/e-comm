<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WANSUNSANSON</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <?php
            include '../koneksi.php';

            $get = mysqli_query($koneksi, "select * from content_nav");
            $br = mysqli_fetch_array($get);

            ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?= $br['title_nav'] ?></a> 
            </div>
            <div class="navbar-text" style="color:white;">
                <?= $br['name_nav'] ?>
            </div>
            <div class="navbar-text">
                <img src="../foto_content/<?= $br['logo_nav']; ?>" width="30" height="30">
            </div>
            <div class="btn-group pull-right" style="padding-top: 1%;
                                                    padding-right: 1%;
                                                    float: right;">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/find_user.png" width="30" height="30">
                </button>
                    <ul class="dropdown-menu slidedown">
                        <li>
                            <a href="#">
                                <i class="fa fa-id-card fa-fw"></i> Account
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-power-off fa-fw"></i> Logout
                            </a>
                        </li>
                </ul>
            </div>
            <!-- <div style="color: white;
                padding-top: 1%;
                padding-right: 1%;
                float: right;
                font-size: 16px;">
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
            </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">			
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> HOME</a>
                    </li>	
					<li>
                        <a href="?url=produk"><i class="fa fa-dashboard fa-3x"></i> PRODUCT LIST</a>
                    </li>
                    <li>
                        <a href="?url=service"><i class="fa fa-dashboard fa-3x"></i> SERVICE LIST</a>
                    </li>                	
                    <li>
                        <a href="?url=calendar"><i class="fa fa-dashboard fa-3x"></i> CALENDAR</a>
                    </li>
                    <li>
                        <a href="?url=project"><i class="fa fa-dashboard fa-3x"></i> PROJECT LIST</a>
                    </li>
                    <li>
                        <a href="?url=employee"><i class="fa fa-dashboard fa-3x"></i> EMPLOYEE LIST</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>CONTENT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?url=navbar_content">NAVBAR CONTENT</a>
                            </li>
                            <li>
                                <a href="?url=home_content">HOME CONTENT</a>
                            </li>
                            <li>
                                <a href="?url=about_us_content">ABOUT US CONTENT</a>
                            </li>
                            <li>
                                <a href="?url=contact_us_content">CONTACT US CONTENT</a>
                            </li>
                        </ul>
                      </li>
                    <li>
                        <a href="?url=about_us"><i class="fa fa-dashboard fa-3x"></i> ABOUT US</a>
                    </li>
                    <li>
                        <a href="?url=contact_us"><i class="fa fa-dashboard fa-3x"></i> CONTACT US</a>
                    </li>  
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                    include 'index_i.php';
                 ?>
            </div>
             <!-- /. PAGE INNER  -->
            <footer>
                <a href="index.php">HOME</a>|
                <a href="?url=produk">PRODUCT LIST</a>|
                <a href="?url=service">SERVICE LIST</a>|
                <a href="?url=project">PROJECT LIST</a>|
                <a href="?url=employee">EMPLOYEE LIST</a>|
            </footer>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
