<?php /*
 * Template Name: Alfadoh Theme
 * Template Post Type: products
 */ ?>

<?php get_header(); ?>

<?php 
    $origin = get_post_meta($post->ID, 'Origin', true); 
    $information = get_post_meta($post->ID, 'Information', true); 
    $material = get_post_meta($post->ID, 'Material', true); 
    $dimensions = get_post_meta($post->ID, 'Dimensions', true); 
?>

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


<div class="wrapper product page single">
    <section class="padding-single">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12 col-lg-6 mb-5 mb-lg-0">
                        <div class="product-img p-4">
                            <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="product-details d-flex flex-column text-left">
                            <span class="category text-uppercase">
                            <?php 
                                if ( is_singular('products') ) {
                                    $terms = get_the_terms($post->ID, 'categories');
                                    foreach ($terms as $term) {
                                        $term_link = get_term_link($term, 'categories');
                                        if (is_wp_error($term_link))
                                            continue;
                                        echo $term->name;
                                    }
                                }
                                ?>
                            </span>
                            <h2 class="product-title text-uppercase" id="product-title"><?php the_title(); ?></h2>
                            <hr>
                            <!-- <span class="price">700.00€</span> -->
                            <div class="product-bio">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="mt-5 btns">
                                <a href="<?php echo get_page_link( get_page_by_title( 'Contact' )->ID ); ?>" class="button">Get In Touch</a>
                            </div>
                            <!-- <a href="#" class="add-cart-btn mx-auto mt-2"><i class="fas fa-shopping-cart mr-2"></i>add
                                to
                                cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCT INFO -->
        <section class="product-info">
            <div class="container">
                <div class="row">
                    <!-- SINGLE INFO -->
                    <div class="col-sm-12 col-lg-3 text-center mb-5 mb-sm-5 mb-lg-0">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="text-uppercase mb-1 mt-2">origin</h5>
                        <span>
                        <?php echo $origin; ?></span>
                    </div>
                    <!-- SINGLE INFO END -->
                    <!-- SINGLE INFO -->
                    <div class="col-sm-12 col-lg-3 text-center mb-5 mb-sm-5 mb-lg-0">
                        <div>
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <h5 class="text-uppercase mb-1 mt-2">information</h5>
                        <span>
                        <?php echo $information; ?></span>
                    </div>
                    <!-- SINGLE INFO END -->
                    <!-- SINGLE INFO -->
                    <div class="col-sm-12 col-lg-3 text-center mb-5 mb-sm-5 mb-lg-0">
                        <div>
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5 class="text-uppercase mb-1 mt-2">material</h5>
                        <span>
                        <?php echo $material; ?></span>
                    </div>
                    <!-- SINGLE INFO END -->
                    <!-- SINGLE INFO -->
                    <div class="col-sm-12 col-lg-3 text-center">
                        <div>
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <h5 class="text-uppercase mb-1 mt-2">dimensions</h5>
                        <span>
                        <?php echo $dimensions; ?></span>
                    </div>
                    <!-- SINGLE INFO END -->
                </div>
            </div>
        </section>
        <!-- PRODUCT INFO END -->


    </div>





</div>

<?php get_footer(); ?>