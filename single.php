<?php get_header(); ?>

<?php
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
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


<div class="wrapper blog page">

    <section class="padding-single">
              <!-- Page Content -->
      <div class="container">
        <div class="row">
        <div class="col-sm-12 col-lg-7 mb-5 mb-lg-0">
          <!-- Blog Entries Column -->
            <div class="product-img p-4 mb-4">
                <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
            <span class="post-meta">
                <?php the_date(); ?>
            </span>

            <h1 class="mb-2"><?php the_title(); ?></h1>
  

            
            <div class="content">
                <?php the_content(); ?>
            </div>
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