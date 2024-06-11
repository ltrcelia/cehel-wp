<footer>
    <nav id="footer-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-menu',
        ) );
        ?>
    </nav>
    
    <?php wp_footer(); ?>
</footer>

</body>
</html>