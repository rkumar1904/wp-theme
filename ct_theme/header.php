<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php wp_title(); ?></title>
  <!-- Bootstrap core CSS -->
  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
  <!-- Fixed navbar -->
  <nav id="top-nav1" class="navbar navbar-default hidden-sm hidden-xs">
    <div class="container">
      <div id="navbar-header" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ">
          <li><a href="mailto:info@richmondrealtors.co.in">
            <i class="fa fa-envelope-o"></i> info@richmondrealtors.co.in</a></li>
            <li><a href="contact-us.html"><i class="fa fa-map-marker"></i> Location</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li style="margin-top:8px;"><i class="fa fa-phone"></i> +91-22-21674545</li>
            <li class="">
              <ul class="list-inline">
                <li> <a href="https://www.facebook.com/Richmond-Realtors-1010698085689589" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"> <i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"> <i class="fa fa-google-plus"></i></a></li>
                <li> <a href="#"> <i class="fa fa-linkedin"></i></a></li>

              </ul>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="images/richmond-realtors-logo.svg" style="height:100px; width:100%;" alt="" class="img-responsive">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php
            $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'depth'             => 2,
                'menu_class' => 'nav navbar-nav navbar-right',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($defaults);
         ?>

          <!-- <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Residential <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="richmond-heights.html">Richmond Heights</a></li>
                <li><a href="other-projects.html">Other Projects</a></li>
              </ul>
            </li>
            <li><a href="commercial.html">Commercial</a></li>

            <li><a href="industrial.html">Industrial</a></li>

            <li><a href="resources.html">Resources</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
          </ul> -->

        </div><!--/.nav-collapse -->
      </div>
    </nav>
