<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Studio cehel</title>
</head>

<body>

	<header id="navBar">

        <div id="mouse">
            <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoile pour souris">
        </div>
        
        <nav id="primary-navigation">

            <a id="logo-link" href="<?php echo esc_url( get_permalink( get_option( 'page_on_front' ) ) ); ?>">
                <img class="logo" src="https://studio-cehel.fr/wp-content/uploads/2024/06/logo-gif.gif" alt="Logo du portfolio céhel">
            </a>

            <?php wp_nav_menu( array(
                'theme_location' => 'primary-menu',
            ) ); ?>

                <div id="btn" class="btn-menu"> 
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

        </nav>

        <div id="menu-burger">

            <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoile rouge" class="bloc-etoile-top">
            <?php wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            ) ); ?>
            <img src="https://studio-cehel.fr/wp-content/uploads/2024/06/stars.gif" alt="Etoiles rouge" class="bloc-etoile-bottom">

        </div>

	</header>