<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Omniscient Ventures</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/100X100.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>
<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto"><img src="img/white-logo.png"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

          <li class=<?php if(@$page=="home") echo "menu-active"?>><a href="index.php">Home</a></li>
          <li class=<?php if(@$page=="about") echo "menu-active"?>><a href="about.php">About Us</a></li>
          <li class=<?php if(@$page=="services") echo "menu-active"?>><a href="services.php">Services</a></li>
          <li class=<?php if(@$page=="mentor") echo "menu-active"?>><a href="mentor.php">Mentor</a></li>
          <li class=<?php if(@$page=="startup") echo "menu-active"?>><a href="startup.php">Startup</a>
			
			<ul>
              <li><a href="incubator.php">Incubator Program</a></li>
              <li><a href="Accelator.php">Accelerator program</a></li>
              
            </ul>
			
			</li>
            
          <li class="menu-has-children <?php if(@$page=="events") echo "menu-active"?>" ><a href="events.php">Events</a></li>
			<li class=<?php if(@$page=="blog") echo "menu-active"?>><a href="blog.php">Blog</a></li>
            
          
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
	
	
	