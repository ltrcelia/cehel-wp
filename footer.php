<footer>
    <nav id="footer-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
        ) );
        ?>
    </nav>
    <?php get_template_part( 'templates_part/modal_contact' ); ?>
    
    <?php wp_footer(); ?>
</footer>

</body>
</html>