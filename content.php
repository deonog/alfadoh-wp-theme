<!-- Blog Post -->
<div class="blog-post card">
<div class="product-img p-4">
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail(); ?>
    <?php endif; ?>
</div>
<div class="card-body">
    <span class="card-meta">
    <?php the_date(); ?>
    </span>
    <h2 class="card-title">
        <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a>
    </h2>
    <p class="card-text">
        <?php the_excerpt(); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="read-more-btn">Read more</a>
</div>
</div>
<!-- Blog Post End -->