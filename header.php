<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content= "Ponthier & Son Pressure Washing LLC., is a pressure washing company in Ocala, FL, and surrounding areas, offering professional pressure washing services." />
  <meta name="robots" content= "index, follow">
  <meta property="og:url"   content="https://ocalapressurewashing.co" />
  <meta property="og:type"  content="website" />
  <meta property="og:title"  content="Ocala Pressure Washing - Ponthier & Son Pressure Washing LLC" />
  <meta property="og:description" content="Ponthier & Son Pressure Washing LLC., is a pressure washing company in Ocala, FL, and surrounding areas, offering professional pressure washing services." />
  <meta property="og:image" content="https://ocalapressurewashing.co/img/ponthiertrailer.jpg" />
  <meta property="fb:app_id" content="2738494399771734" />

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
  <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
  <!-- <link rel="stylesheet" href="wp-content/themes/ponthier-theme/page-style.css"> -->
<?php
wp_head();
?>
</head>

<body style="width: 100vw;">
  <div class="container-lg p-0 main-class">
    <!-- start topnav-->
    <nav class="navbar navbar-dark bg-primary text-white px-2 py-0 d-none d-md-flex mx-auto">
      <p><a class="text-white" href="tel:+13526825921">(352) 682 - 5921</a> | <a
          href="mailto:contact@ponthierandson.com" style="color:white;">contact@ponthierandson.com</a></p>
      <p><a class="text-white" href="quote.html">Get A Free Quote Today!</a> | <a class="text-white" href="">Blog</a></p>
    </nav>
    <!--Start Main Nav-->
    <nav class="navbar navbar-expand-lg navbar-light p-0 sticky-top">
      <!--Start Nav Container-->
      <div class="container m-0 p-0 " id="nav-container">
        <!--Logo/Brand-->
        <?php
        if(function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
       }
        ?>
        <a class="navbar-brand mb-0 pl-0" href="index.html"><img class="img-fluid nav-logo" src="PSPW_Logo-01.png"></a>
        <!--End Brand-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container menu-container">
          <!--Start Boostrap Menu Links-->
          <div class="collapse navbar-collapse ml-auto mt-2 mt-lg-2 justify-content-end" id="mainNav">
            <div class="navbar-nav">
              <a class="nav-link active" href="#">HOME <span class="sr-only">(current)</span></a>
              <a class="nav-link" href="#about">ABOUT</a>
              <a class="nav-link" href="#services">SERVICES</a>
              <a class="nav-link" href="#beforeafter">PHOTOS</a>
              <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
              <a class="nav-link" href="#contact">CONTACT</a>
            </div>
          </div>
          <!--End Bootstrap Menu Links-->
        </div>
      </div>
      <!--End Nav Container-->
    </nav>