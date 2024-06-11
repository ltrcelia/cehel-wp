<?php 
// inclure style css
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// inclure scripts javascript
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);

     // inclure ajax
     wp_localize_script('custom-ajax-script', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));

}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// inclure menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

/* filtres catégories */ 
function filter_projects() {
    $category = $_POST['category'];

    $args = array(
        'post_type' => 'realisation',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if (!empty($category)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'categorie',
            'field' => 'slug',
            'terms' => $category,
        );}
    $projects_query = new WP_Query($args);
    if ($projects_query->have_posts()) {
        while ($projects_query->have_posts()) {
            $projects_query->the_post();
            get_template_part('templates_part/realisation_block');
        }
        wp_reset_postdata();
    } else {
        echo 'Aucun projet trouvé.';
    }
    
    wp_die();
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

?>