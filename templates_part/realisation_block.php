<div class="overlay-image">

    <a href="<?php echo esc_url(get_permalink()); ?>" class="link-container">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="bloc">
        <h3><?php the_title(); ?></h3>
        <p><?php echo get_field('categorie'); ?></p>
    </a>

</div>
