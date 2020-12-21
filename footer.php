<!-- FOOTER -->
<footer class="padding">
    <div class="container text-left">
    <div class="row">
        <div class="col-sm-12 col-lg-5 mb-5 mb-sm-5 mb-lg-0">
        <h5 class="text-uppercase">about</h5>
        <hr />
        <span class="footer_p">
            <p>
                <?php echo get_theme_mod('footer_p', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor qui
            autem velit nostrum harum modi, est eos fugiat quidem quis.'); ?>
            </p>
        </span>
        <div class="social-icons mt-5 mt-lg-3 d-flex justify-content-start align-items-center">
            <div>
                <span class="ig_url">
                    <a href="<?php echo get_theme_mod('ig_url', 'https://www.instagram.com'); ?>"><i class="fab fa-instagram"></i></a>
                </span>
            </div>
            <div>
                <span class="fb_url">
                    <a href="<?php echo get_theme_mod('fb_url', 'https://www.facebook.com'); ?>"><i class="fab fa-facebook-square"></i></a>
                </span>
            </div>
        </div>
        </div>
        <div class="col-sm-12 col-lg-6 offset-lg-1 d-block d-lg-flex justify-content-between">
            <div class="footer-item mb-5 mb-lg-0">
                <div>
                    <h5 class="text-uppercase">navigation</h5>
                    <hr />
                    <?php wp_nav_menu( array(
                            'theme_location' => 'footer_menu'
                        ) ); 
                    ?>
                </div>
            </div>
            <div class="footer-item mb-5 mb-lg-0">
                <div>
                    <h5 class="text-uppercase">services</h5>
                    <hr />
                    <ul>

                    <?php 
                            $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
                            $the_query = new WP_Query( $args ); 
                            ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <!-- SERVICE ROW -->
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                            <!-- SERVICE ROW END -->
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="footer-item">
                <div>
                    <h5 class="text-uppercase">support</h5>
                    <hr />
                    <?php wp_nav_menu( array(
                            'theme_location' => 'footer_menu_2'
                        ) ); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 pb-3">
        <div class="col-12">
            <div>
                <p class="text-uppercase">
                &copy; <span id="date">2020</span>. kendryx alfadoh. all rights
                reserverd.
                 </p>
            </div>
    </div>
    </div>
</footer>
<!-- FOOTER END -->






    <!-- SCROLL UP BTN -->
    <a
      class="scroll-link top-link d-flex align-items-center justify-content-center"
      href="#home"
    >
      <i class="fas fa-caret-up"></i>
    </a>
    <!-- SCROLL UP BTN END -->
    <?php wp_footer(); ?>
</body>

</html>