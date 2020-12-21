<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('contact_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper contact page">
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

    <section>
    <div
          class="container h-100 d-flex align-items-center justify-content-center"
        >
          <div class="row w-100">
            <div class="col-12 text-center pt-5">
                <h3>Send me a message!</h3>
            </div>
            <div class="form-col col-sm-12 col-lg-6 offset-lg-3">
              <div>
                <?php $contact='[contact-form-7 id="7" title="Contact Form"]'?>
                <?php echo do_shortcode($contact);?>
                <div>
                    <div class="email">
                        <span class="contact_email">
                            <a href="mailto:<?php echo get_theme_mod('contact_email', 'hello@alfadoh.com'); ?>">
                            <span class="d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <?php echo get_theme_mod('contact_email', 'hello@alfadoh.com'); ?>
                            </span></a>
                        </span>
                    </div>
                </div>
              </div>
           </div>
          </div>
        </div>
    </section>





</div>

<?php get_footer(); ?>