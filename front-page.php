<?php 
get_header();
 ?>

<main>

  <?php get_template_part( 'templates_part/hero_header' ); ?>

  <?php get_template_part( 'templates_part/realisations' ); ?>

  <div class="stars">
    <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoiles" class="star">
  </div>

  <?php get_template_part( 'templates_part/a_propos' ); ?>

  <?php get_template_part( 'templates_part/encart_contact' ); ?>

  <div class="a-bientot">

    <h3>à bientôt !</h3>
    <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoiles rouge" class="star">

  </div>

</main>

<?php get_footer(); ?>