<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MTs Husnul Khotimah 2 Kuningan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />

<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet"> 
<link href="css/embed-responsive.css" rel="stylesheet" />
<link href="css/quote-carousel.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="img/favicon.png">

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">MTs Husnul Khotimah 2 Kuningan</p>
        <p class="pull-right"><i class="fa fa-phone"></i>info@mtshakadua.sch.id</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/>MTSHAKADUA</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php if(!isset($_GET['page'])) {echo "active";}?>"><a href="index.php">Home</a></li> 
						<li class="<?php if($_GET['page'] === "profil-mts-hk2") {echo "active";}?>"><a href="index.php?page=profil-mts-hk2">Profile</a></li>
						<li class="dropdown">
                        <a href="index.php?page=galeri" data-toggle="dropdown" class="dropdown-toggle">Programs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=kegiatan-harian">Kegiatan Harian</a></li>
                            <li><a href="index.php?page=study-club">Study Club</a></li>
                            <li><a href="index.php?page=kerja-sama">Kerja Sama</a></li> 
                        </ul>
                    	</li>
                        <li><a href="halaman/akun">Login</a></li>
                        <li class="<?php if($_GET['page'] === "kontak") {echo "active";}?>"><a href="index.php?page=kontak">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 

	<?php 
    if(!isset($_GET['page'])) {
        include "halaman/home.php";
    } else {
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
	        case 'profil-mts-hk2':
                include "halaman/profil-mts-hk2.php";
                break;
	        case 'e-learning':
                include "halaman/e-learning.php";
                break;
            case 'pat-online':
                include "halaman/pat-online.php";
                break;
            case 'pat-online-8':
                include "halaman/pat-online-8.php";
                break;
            case 'pat-online-9':
                include "halaman/pat-online-9.php";
                break;
            case 'kontak':
                include "halaman/kontak.php";
                break;
            case 'galeri':
                include "halaman/galeri.php";
                break;
            case 'kegiatan-harian':
                include "halaman/kegiatan-harian.php";
                break;
            case 'kerja-sama':
                include "halaman/kerja-sama.php";
                break;
            case 'study-club':
                include "halaman/study-club.php";
                break;
            case 'jadwal-pat':
                include "halaman/jadwal-pat.php";
                break;
            case 'tutorial-pat':
                include "halaman/tutorial-pat.php";
                break;
            case 'policy':
                include "halaman/policy.php";
                break;
  			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>




	<footer>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; <a href="index.php" target="_blank">MTs Husnul Khotimah 2 Kuningan</a> | 2020 All right reserved. <br/> Design by</span> <a href="http://excellenz.id/" target="_blank">Excellenz.ID </a> 
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>