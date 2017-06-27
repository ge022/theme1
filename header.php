<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <title>
    <?php bloginfo('name'); ?> | <?php wp_title(); ?>
    
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>

  </title>

  <!-- <?php wp_head(); ?> -->
  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <!-- Font Awesome icons -->
  <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">


</head>

<body>

<header class="fixed-top">
  <div class="topbar">
    <div class="topbar-lists container">

      <ul class="info-list">
        <li class="list-item"><i class="fa fa-phone"></i>
          Free Estimates: <a href="tel:555-555-555">(555) 555-5555</a><br></li>
        <li class="list-item"><i class="fa fa-envelope-o"></i>
          Email us: <a href="mailto:email@example.com">email@example.com</a></li>
        <li class="list-item"><i class="fa fa-clock-o"></i>
          Working Hours: 08:00-5:00pm
        </li>
      </ul>


      <ul class="social-list">
        <li class="list-item"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
        <li class="list-item"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li class="list-item"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>

    </div>
  </div>

  <div class="bottombar">
    <nav class="container navbar navbar-toggleable-md">

      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
              data-target="#navbar-nav" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span class="icon-bar top-bar"> </span>
        <span class="icon-bar middle-bar"> </span>
        <span class="icon-bar bottom-bar"> </span>
      </button>

      <a class="navbar-brand smooth-nav" href="#top">
        <img class="img-fluid" src="<?php bloginfo('template_url') ?>/images/logo.png" alt="brand image">
      </a>


      <div class="collapse navbar-collapse justify-content-end" id="navbar-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-item nav-link active" href="#top">WHO WE ARE<span class="sr-only">(current)</span></a>

          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="#services">OUR SERVICES</a>

          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="#contact">CONTACT US</a>

          </li>
        </ul>
      </div>
      

    </nav>
    
  </div>

</header>


