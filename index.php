<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('home_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper home">
    <!-- header -->
    <header id="home">
        <div class="container h-100 text-center d-flex flex-column justify-content-center align-items-center">
            <div class="row">
                <div class="col-12">
                    <span class="home_header_h2">
                        <h2 class="mb-2">
                        <?php echo get_theme_mod('home_header_h2', 'Lorem ipsum dolor sit amet consectetur'); ?>
                        </h2>
                    </span>
                    <span class="home_header_h1">
                        <h1>
                            <?php echo get_theme_mod('home_header_h1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, vel?'); ?>
                        </h1>
                    </span>
                    <div class="mt-5 btns">
                        <a href="<?php echo get_page_link( get_page_by_title( 'Collection' )->ID ); ?>" class="button">View Collection</a>
                    </div>
                </div>
            </div>
            <a href="#services" class="scroll-down-btn scroll-link">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="31.204"
                height="57.425"
                viewBox="0 0 41.204 67.425"
                >
                <defs>
                    <linearGradient
                    id="linear-gradient"
                    x1="0.5"
                    x2="0.5"
                    y2="1"
                    gradientUnits="objectBoundingBox"
                    >
                    <stop offset="0" stop-color="#ffffff" stop-opacity="0.204" />
                    <stop offset="1" stop-color="#ffffff" />
                    </linearGradient>
                </defs>
                <g
                    id="Group_89"
                    data-name="Group 89"
                    transform="translate(-935 -931)"
                >
                    <g
                    id="Scroll_down"
                    data-name="Scroll down"
                    transform="translate(935 931)"
                    >
                    <g
                        id="Rectangle_126"
                        data-name="Rectangle 126"
                        transform="translate(0)"
                        fill="none"
                        stroke="#ffffff"
                        stroke-width="2"
                    >
                        <rect
                        width="41.204"
                        height="67.425"
                        rx="20.602"
                        stroke="none"
                        />
                        <rect
                        x="1"
                        y="1"
                        width="39.204"
                        height="65.425"
                        rx="19.602"
                        fill="none"
                        />
                    </g>
                    <circle
                        id="Ellipse_13"
                        data-name="Ellipse 13"
                        cx="5.619"
                        cy="5.619"
                        r="5.619"
                        transform="translate(14.983 43.077)"
                        fill="#ffffff"
                    />
                    <rect
                        id="Rectangle_127"
                        data-name="Rectangle 127"
                        width="11.238"
                        height="41.204"
                        rx="4"
                        transform="translate(14.983 13.11)"
                        opacity="0.618"
                        fill="url(#linear-gradient)"
                    />
                    </g>
                </g>
                </svg>
            </a>
        </div>
    </header>
    <!-- header end -->

    <!-- INTRODUCTION -->
    <section id="introduction" class="padding">
        <div class="container text-left">
            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-lg-5 mb-5 mb-lg-0">
                    <span class="home_about_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('home_about_h', 'Meet Kendryx Alfadoh'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="home_about_p">
                        <p>
                            <?php echo get_theme_mod('home_about_p', 'Born in one of the most beautiful river deltas of the world, he completed the major part of
                            his education in Nigeria. There, he worked with many advertising companies primarily as a
                            media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
                            with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
                            promoting integration, education, development and raising awareness of climate change.'); ?>
                        </p>
                    </span>
                    <div class="btns">
                        <a href="<?php echo get_page_link( get_page_by_title( 'About' )->ID ); ?>" class="button">Explore more</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 offset-lg-1">
                    <div class="product-img p-4">
                        <span class="home_about_img">
                            <img class="img-fluid" src="<?php echo get_theme_mod('home_about_img', get_bloginfo('template_url').'/inc/img/paintings/painting-6.png'); ?>">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRODUCTION END -->

    <section id="services" class="padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 col-lg-6 offset-lg-3 text-center">
                    <span class="home_services_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('home_services_h', 'Services'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="home_services_p">
                        <p>
                            <?php echo get_theme_mod('home_services_p', 'Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
                            things seen, felt and experienced, the past and the future. With my paintings I am trying to
                            harmoniously free the soul of the viewer.'); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="row services-items">
            <?php 
              $args = array( 'post_type' => 'services', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args ); 
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <!-- SINGLE SERVICE -->
                <div class="col-sm-12 col-lg-4 text-left mb-4 mb-lg-0">
                    <div class="w-100 px-4 py-4">
                        <a class="d-block" href="<?php the_permalink(); ?>">
                            <h3 class="text-uppercase"><?php the_title(); ?></h3>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more-btn mt-2">Read more</a>
                    </div>
                </div>
                <!-- SINGLE SERVICE END -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID ); ?>" class="button text-center">Get in touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SECTION -->
    <section id="products" class="padding">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 col-lg-6 offset-lg-3 text-center">
                    <span class="home_products_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('home_products_h', 'Featured Art Pieces'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="home_products_p">
                        <p>
                            <?php echo get_theme_mod('home_products_p', 'Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
                            things seen, felt and experienced, the past and the future. With my paintings I am trying to
                            harmoniously free the soul of the viewer.'); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="row products">
            <?php 
              $args = array( 'post_type' => 'products', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args ); 
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <?php 
                $terms = get_the_terms( $post->ID, 'categories' ); 
              ?>
                <!-- SINGLE PRODUCT -->
                <div class="col-sm-12 col-lg-4 mb-5 mb-sm-5">
                    <a href="<?php the_permalink(); ?>" class="product-img p-4 mb-3">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </a>
                    <div class="product-details d-flex flex-column text-center">
                        <span class="category text-uppercase"><?php foreach ( $terms as $term ) { echo $term->name;} ?></span>
                        <hr class="text-center">
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="product-title text-uppercase" id="product-title"><?php the_title(); ?></h4>
                        </a>
                        <!-- <a href="single-product.html" class="add-cart-btn mx-auto mt-2"><i
                                class="far fa-eye mr-2"></i>View</a> -->
                    </div>
                </div>
                <!-- SINGLE PRODUCT END -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Collection' )->ID ); ?>" class="button button-2 text-center">view collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCT SECTION END -->

    <!-- BLOG SECTION -->
    <section id="blog" class="padding blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3 text-center mb-4 mb-sm-4">
                    <span class="home_blog_h">
                        <h2 class="text-uppercase">
                            <?php echo get_theme_mod('home_blog_h', 'Blog'); ?>
                        </h2>
                    </span>
                    <hr>
                    <span class="home_blog_p">
                        <p>
                            <?php echo get_theme_mod('home_blog_p', 'Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
                            things seen, felt and experienced, the past and the future. With my paintings I am trying to
                            harmoniously free the soul of the viewer.'); ?>
                        </p>
                    </span>
                </div>
            </div>
            <div class="row">
            <?php 
                $the_query = new WP_Query( array(
                    'posts_per_page' => 4,
                ) ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <!-- POST -->
                        <div class="col-sm-12 col-lg-6 mb-4">
                            <a href="<?php the_permalink(); ?>"
                                class="img-overlay d-flex justify-content-end align-items-start flex-column h-100 p-3">
                                <div class="post-meta">
                                    <span><?php the_date(); ?></span>
                                </div>
                                <h4 class="post-title text-uppercase"><?php the_title(); ?></h4>
                            </a>
                            <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <!-- POST END -->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                </div>
                <div class="row mt-5">
                <div class="col text-center">
                    <a href="<?php echo get_page_link( get_page_by_title( 'Blog' )->ID ); ?>" class="button button-2 text-center">view all posts</a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END-->
</div>

<?php get_footer(); ?>