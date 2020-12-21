<?php get_header(); ?>

<style>
header {
    background: url(<?php echo get_theme_mod('blog_header_bg', get_bloginfo('template_url').'/inc/img/header.jpg'); ?>);
    height: 50vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
};
</style>


<div class="wrapper page blog">
    <!-- header -->
    <header id="home">
        <div class="container h-100 text-center d-flex flex-column justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <hr class="mr-4">
                        <?php printf( __( '<h1>Search Results for: %s</h1>', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
                    <hr class="ml-4">
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <section class="padding">
              <!-- Page Content -->
      <div class="container">
        <div class="row">
          <!-- Blog Entries Column -->
          <div class="col-sm-12 col-lg-7 mb-5 mb-lg-0">
          <?php 
            $the_query = new WP_Query( array( 's' => get_query_var('s'))); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php get_template_part('content', 'search'); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
          </div>

          <!-- Sidebar Widgets Column -->
          <div class="col-sm-12 col-lg-4 offset-lg-1">

            <div class="sidebar">
                <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->  
    </section>





</div>

<?php get_footer(); ?>