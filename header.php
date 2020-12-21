<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php is_front_page() ? bloginfo('description') : wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- navbar -->
    <div class="overlay"></div>
    <nav id="nav" class="d-flex align-items-center">
        <div class="container">
            <div class="row d-block d-lg-flex justify-content-lg-between">
                <!-- nav header -->
                <div class="col-lg-1 nav-header d-flex align-items-center justify-content-between">
                    <a class="logo d-flex text-uppercase" href="<?php echo home_url(); ?>"><span class="mr-2">Kendryx</span>Alfadoh</a>
                    <div id="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- links -->
                <div class="col-lg-8 links-container pl-4 pl-lg-0 d-flex justify-content-start justify-content-lg-end align-items-center"
                    id="menu">
                    <?php wp_nav_menu( array(
                            'theme_location' => 'top_menu'
                        ) ); 
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

