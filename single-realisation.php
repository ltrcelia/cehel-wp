<?php get_header(); ?>

<main>

  <div id="realisation-page">

    <h1><?php the_title(); ?></h1>

    <div class="infos">
        <p><?php echo get_field('annee'); ?></p>
        <p><?php echo get_field('theme'); ?></p>
        <p><?php echo get_field('categorie'); ?></p>
    </div>

    <?php
        $post_id = get_the_ID();
        $video_url = get_field('video', $post_id);

        if ($video_url) {
            echo '<div class="bloc-video">';
            echo '<button id="toggleSound" class="btn-red">Activer le son</button>';
            echo '<video id="videoPlayer" autoplay muted loop>';
            echo '<source src="' . esc_url($video_url) . '" type="video/mp4">';
            echo 'Votre navigateur ne prend pas en charge la vidéo HTML5.';
            echo '</video>';
            echo '</div>';
        } else {
            if (has_post_thumbnail()) {
                echo '<div class="premier-bloc">';
                the_post_thumbnail('full', array('class' => 'image-lightbox'));
                echo '</div>';
            }
        }
    ?>

    <div class="stars">
        <img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2024/06/stars.gif" alt="Etoiles" class="star" />
    </div>

    <?php
        $images_secondaires = get_children(array(
            'post_parent' => $post->ID,
            'post_type' => 'attachment',
            'post_mime_type' => 'image'
        ));

    if ($images_secondaires) {
        echo '<div class="images-secondaires">';
        foreach ($images_secondaires as $image) {
            $image_large = wp_get_attachment_image_src($image->ID, 'large');
            echo '<img src="' . esc_url($image_large[0]) . '" alt="' . esc_attr($image->post_title) . '" class="image-secondaire">';
        }
        echo '</div>';
    }
    ?>

    <div class="lightbox" id="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightbox-img" src="" alt="<?php the_title(); ?>">
    </div>

    <div class="deuxieme-bloc">
        <div class="texte-explication">
            <h2>explication.</h2>
            <p><?php echo get_field('explication'); ?></p>
        </div>
    </div>

    <?php
        $lien = get_field('lien'); 
        if ($lien): $url = esc_url($lien['url']);
        ?>
        <div class="liens-container">
            <a class="btn-red" href="<?php echo $url; ?>" target="_blank">
                Lien vers le code du site
            </a>
        </div>
    <?php endif; ?>

    <div class="stars">
        <img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2024/06/stars.gif" alt="Etoiles" class="star" />
    </div>

    <?php     
        $prev_post = get_previous_post();
        $next_post = get_next_post(); 
    ?>

    <div class="fleches">

        <div class="arrow-prev">
            <a href="<?php echo get_permalink($next_post); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2024/06/arrow-prev.png" alt="Flèche précédente" />
            </a>
        </div>

        <div class="arrow-next">
            <a href="<?php echo get_permalink($prev_post); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/wp-content/uploads/2024/06/arrow-next.png" alt="Flèche suivante" />
            </a>
        </div>

    </div>
    
  </div>

  <?php get_template_part( 'templates_part/encart_contact' ); ?>

</main>

<?php get_footer(); ?>