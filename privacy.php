<?php /* Template Name: Privacy */ ?>

<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('privacy_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper privacy page">
    <!-- header -->
    <header id="home">
        <div class="container h-100 text-center d-flex flex-column justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <hr class="mr-4">
                    <h1><?php the_title(); ?></h1>
                    <hr class="ml-4">
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <section class="padding">
    <div
          class="container h-100 d-flex align-items-center justify-content-center"
        >
          <div class="row">
            <div class="col-12 text-left">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
          </div>
        </div>
    </section>





</div>

<?php get_footer(); ?>