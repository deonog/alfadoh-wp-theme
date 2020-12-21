<?php /* Template Name: Products */ ?>

<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('products_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper products page">
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
            </div>
        </div>
        <div class="row mb-5">
        <?php 
            $args = array( 'post_type' => 'products', 'posts_per_page' => -1 );
            $the_query = new WP_Query( $args ); 
            $taxonomy = 'categories';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
            ?>
            <div class="col-sm-12 col-lg-8 offset-lg-2">
                <div class="categories-wrapper d-flex flex-column flex-lg-row justify-content-lg-around">
                    <div class="category d-flex justify-content-center py-3 w-100 tab-active" data-filter="cat-all">
                        <h5>Alle</h5>
                    </div>
                    <?php if ( $terms && !is_wp_error( $terms ) ) :
                    ?>
                            <?php foreach ( $terms as $term ) { ?>
                                <div class="category d-flex justify-content-center py-3 w-100" data-filter="cat-<?php echo $term->name; ?>">
                                    <h5><?php echo $term->name; ?></h5>
                                </div>
                            <?php } ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="row products">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php 
            $terms = get_the_terms( $post->ID, 'categories' ); 
            ?>
            <!-- SINGLE PRODUCT -->
            <div class="col-sm-12 col-lg-6 col-xl-4 mb-5 mb-sm-5 cat-all cat-<?php foreach ( $terms as $term ) { echo $term->name;} ?>">
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
    </div>
</section>
<!-- PRODUCT SECTION END -->





</div>

<script>
jQuery(document).ready(function () {
  jQuery(".category").click(function () {
    var filterValue = jQuery(this).attr("data-filter");
    if (filterValue == "cat-all") {
      jQuery(".cat-all").show();
    } else {
      jQuery(".cat-all")
        .not("." + filterValue)
        .hide();
      jQuery(".cat-all")
        .filter("." + filterValue)
        .show();
    }

    if (jQuery(this)) {
      jQuery(this).addClass("tab-active");
      jQuery(".category").not(this).removeClass("tab-active");
    }
  });
});
</script>

<?php get_footer(); ?>