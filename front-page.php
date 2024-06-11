<?php get_header();  ?>

<main>

<?php get_template_part( 'templates_part/ecran_accueil' ); ?>

  <?php get_template_part( 'templates_part/hero_header' ); ?>

  <?php get_template_part( 'templates_part/realisations' ); ?>

  <div class="stars">
    <img src="/portfolio-cehel/wp-content/uploads/2024/06/stars.png" alt="Etoiles" class="star" />
  </div>

  <?php get_template_part( 'templates_part/a_propos' ); ?>

  <?php get_template_part( 'templates_part/encart_contact' ); ?>

  <div class="a-bientot">

    <p>à bientôt !</p>
    <img src="/portfolio-cehel/wp-content/uploads/2024/06/petite-stars.png" alt="Etoiles rouge" class="star" />

  </div>

</main>

<?php get_footer(); ?>