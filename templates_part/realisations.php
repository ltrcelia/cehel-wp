<div id="realisations">

  <h2>réalisations.</h2>

  <div class="categories">

    <?php
    $terms = get_terms(array(
        'taxonomy' => 'categorie',
        'hide_empty' => false,
        'orderby' => 'none'
    )); 
    foreach ($terms as $term) :
    ?>

    <button class="btn-pink" data-category="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>

    <?php endforeach; ?>

  </div>

  <div class="realisations">

    <div class="realisation">

      <?php
          $args = array(
              'post_type' => 'realisation',
              'posts_per_page' => 12,
              'orderby' => 'date',
              'order' => 'DESC',
          ); 
          $realisations_query = new WP_Query($args);
          if ($realisations_query->have_posts()) {
              while ($realisations_query->have_posts()) {
                  $realisations_query->the_post();
                  get_template_part('templates_part/realisation_block');
              }
              wp_reset_postdata();
          } else {
              echo 'Aucune photo similaire trouvée.';
          }
      ?>
      
    </div>
  </div>

  <div class="stars">
    <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoiles rouge" class="star" />
  </div>

  <?php get_template_part( 'templates_part/competences' ); ?>

</div>