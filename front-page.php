<?php 
// session_start();
// $_SESSION["toto"] = true; 
get_header();
//  $id_session = session_id();
//  var_dump($id_session);
// var_dump(session_save_path());
 ?>

<main>
<!-- <?php if (!isset($_SESSION['toto']) && !$_SESSION['toto']) : ?> -->
<!-- <?php get_template_part( 'templates_part/ecran_accueil' ); ?> -->
<!-- <?php $_SESSION['toto'] = true; ?>
<?php endif ?> -->

  <?php get_template_part( 'templates_part/hero_header' ); ?>

  <?php get_template_part( 'templates_part/realisations' ); ?>

  <div class="stars">
    <img src="/portfolio-cehel/wp-content/uploads/2024/06/stars.gif" alt="Etoiles" class="star" />
  </div>

  <?php get_template_part( 'templates_part/a_propos' ); ?>

  <?php get_template_part( 'templates_part/encart_contact' ); ?>

  <div class="a-bientot">

    <h3>à bientôt !</h3>
    <img src="/portfolio-cehel/wp-content/uploads/2024/06/stars.gif" alt="Etoiles rouge" class="star" />

  </div>

</main>

<?php get_footer(); ?>