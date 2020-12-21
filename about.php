<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('about_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper about page">
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

    <!-- INTRODUCTION -->
    <section class="padding">
        <div class="container text-left">
            <div class="row d-flex align-items-center mb-5">
                <div class="col-sm-12 col-lg-5 mb-3 mb-sm-3 mb-lg-0">
                    <span class="about_about_1_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('about_about_1_h', 'The Story'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="about_about_1_p">
                        <p>
                            <?php echo get_theme_mod('about_about_1_p', 'Born in one of the most beautiful river deltas of the world, he completed the major part of
                            his education in Nigeria. There, he worked with many advertising companies primarily as a
                            media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
                            with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
                            promoting integration, education, development and raising awareness of climate change.'); ?>
                        </p>
                    </span>
                    <span class="about_about_1_p_2">
                        <p>
                            <?php echo get_theme_mod('about_about_1_p_2', 'Colors always had a special meaning in his life. He started painting in 1987 and his homeland
                        Nigeria inspired him time and time again. He experiments with many techniques and works
                        with materials such as oil, sand, charcoal and acrylic.'); ?>
                        </p>
                    </span>
                </div>
                <div class="col-sm-12 col-lg-6 offset-lg-1">
                    <div class="product-img p-4">
                        <span class="about_about_1_img">
                            <img class="img-fluid" src="<?php echo get_theme_mod('about_about_1_img', get_bloginfo('template_url').'/inc/img/paintings/painting-6.png'); ?>">
                        </span>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-lg-row-reverse align-items-center">
                <div class="col-sm-12 col-lg-5 offset-lg-1 mb-3 mb-sm-3 mb-lg-0">
                    <span class="about_about_2_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('about_about_2_h', 'The Process'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="about_about_2_p">
                        <p>
                            <?php echo get_theme_mod('about_about_2_p', 'Born in one of the most beautiful river deltas of the world, he completed the major part of
                            his education in Nigeria. There, he worked with many advertising companies primarily as a
                            media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
                            with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
                            promoting integration, education, development and raising awareness of climate change.'); ?>
                        </p>
                    </span>
                    <span class="about_about_2_p_2">
                        <p>
                            <?php echo get_theme_mod('about_about_2_p_2', 'Colors always had a special meaning in his life. He started painting in 1987 and his homeland
                        Nigeria inspired him time and time again. He experiments with many techniques and works
                        with materials such as oil, sand, charcoal and acrylic.'); ?>
                        </p>
                    </span>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="product-img p-4">
                        <span class="about_about_2_img">
                            <img class="img-fluid" src="<?php echo get_theme_mod('about_about_2_img', get_bloginfo('template_url').'/inc/img/paintings/painting-6.png'); ?>">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRODUCTION END -->

    <!-- BANNER -->
    <section class="banner" style="background:url(<?php echo get_theme_mod('about_banner_bg', get_bloginfo('template_url').'/inc/img/paintings/painting-5.png'); ?>)">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-lg-10 offset-lg-1">
                    <div class="mb-3">
                        <i class="fas fa-heart"></i>
                    </div>
                    <span class="about_banner_h">
                        <h2>
                            <?php echo get_theme_mod('about_banner_h', '“Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
                            things seen, felt and experienced, the past and the future. With my paintings I am trying to
                            harmoniously free the soul of the viewer.”'); ?>
                        </h2>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- EXPERIENCES -->
    <section id="experiences" class="padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="product-img p-4 mb-3">
                        <span class="about_profile_img">
                            <img class="img-fluid" src="<?php echo get_theme_mod('about_profile_img', get_bloginfo('template_url').'/inc/img/paintings/painting-6.png'); ?>">
                        </span>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-10 offset-lg-1 text-center">
                    <span class="about_profile_name">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('about_profile_name', 'Kendryx Alfadoh'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="about_profile_title">
                        <h5 class="mb-2">
                            <?php echo get_theme_mod('about_profile_title', 'Owner / Artist / Designer / DJ'); ?>
                        </h5>
                    </span>
                    <span class="about_profile_p">
                        <p class="mb-0">
                            <?php echo get_theme_mod('about_profile_p', 'My art, the colors have always been a part of me and my life. The people, the colors and the
                            earth of my homeland
                            Nigeria inspire me. Art is light, love and life, things seen, felt and experienced, the past
                            and the future. Art sets the
                            soul free… Through my art, I am trying to link Africa with Europe and the rest of the world.'); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6 mb-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-uppercase">experiences</h2>
                    <hr>
                    <div class="experiences-wrapper">
                    <?php 
                    $args = array( 'post_type' => 'experiences', 'posts_per_page' => -1 );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php 
                        $year = get_post_meta($post->ID, 'Year', true); 
                        $location = get_post_meta($post->ID, 'Location', true); 
                    ?>
                        <!-- SINGLE EXPERIENCE -->
                        <div class="experience d-flex">
                            <div class="experience-date px-3 d-flex align-items-center justify-content-center">
                                <span><?php echo $year; ?></span>
                            </div>
                            <div class="experience-meta py-3 px-3">
                                <div class="experience-title">
                                    <span><?php the_title(); ?></span>
                                </div>
                                <div class="experience-location">
                                    <span><?php echo $location; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE EXPERIENCE END-->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6">
                    <h2 class="text-uppercase">exhibitions (selection)</h2>
                    <hr>
                    <div class="experiences-wrapper">
                    <?php 
                    $args = array( 'post_type' => 'exhibitions', 'posts_per_page' => -1 );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php 
                        $year = get_post_meta($post->ID, 'Year', true); 
                        $location = get_post_meta($post->ID, 'Location', true); 
                    ?>
                        <!-- SINGLE EXPERIENCE -->
                        <div class="experience d-flex">
                            <div class="experience-date px-3 d-flex align-items-center justify-content-center">
                                <span><?php echo $year; ?></span>
                            </div>
                            <div class="experience-meta py-3 px-3">
                                <div class="experience-title">
                                    <span><?php the_title(); ?></span>
                                </div>
                                <div class="experience-location">
                                    <span><?php echo $location; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE EXPERIENCE END-->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- EXPERIENCES END -->





</div>

<?php get_footer(); ?>