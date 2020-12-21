<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('services_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper services page">
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
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 offset-lg-1 text-center">
                        <span class="services_h">
                            <h2 class="text-uppercase">
                                <?php echo get_theme_mod('services_h', 'What I do'); ?>
                            </h2>
                        </span>
                        <hr>
                        <span class="services_p">
                            <p><?php echo get_theme_mod('services_p', 'There are always situations that call for more than just a photograph. Have your portrait
                            painted by a really experienced fine artist who can literally paint anything you can dream
                            up! A portrait is a representation of a particular person. Such paintings have always been more
                            than just a record. They have
                            been used to show the power, importance, virtue, beauty, wealth, taste, learning or other
                            important qualities that
                            characterize the sitter. It is one of the best ways to depict a person and show his/her
                            character'); ?>
                            </p>
                        </span>
                        <span class="services_p_2">
                            <p><?php echo get_theme_mod('services_p_2', 'I am always ready to meet all your wishes and preferences in your portrait, whether it’s
                                created as a personal painting or a piece of art for an official person. Contact me
                                today to
                                discuss your future portrait.'); ?>
                            </p>
                        </span>
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <div class="col-12 text-center">
                        <a href="#" class="button text-center">Get in touch</a>
                    </div>
                </div>
                <div class="row"></div>
                <?php 
                $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
                $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <!-- SERVICE ROW -->
                    <div class="row mt-5 d-flex align-items-center">
                        <div class="col-sm-12 col-md-6 mb-4 mb-sm-4 mb-lg-0">
                            <div class="product-img p-4">
                                <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center text-md-left">
                            <h2 class="text-uppercase"><?php the_title(); ?></h2>
                            <hr>
                            <p><?php the_excerpt(); ?></p>
                            <div class="mt-5">
                                <a href="<?php the_permalink(); ?>" class="button button-2">learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- SERVICE ROW END -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>







        </section>

    </div>





</div>

<?php get_footer(); ?>