<?php /*
 * Template Name: Alfadoh Theme
 * Template Post Type: services
 */ ?>

<?php get_header(); ?>

<div class="wrapper services page">
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




</div>

<?php get_footer(); ?>