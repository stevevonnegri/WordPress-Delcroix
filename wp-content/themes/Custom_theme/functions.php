<?php 

function api_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jqueryjs', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true);
    wp_enqueue_script( 'jquery-backtotop-js', get_template_directory_uri().'/JS/jquery.backtotop.js', array(), false, true);
    wp_enqueue_script( 'jquery-mobile-js', get_template_directory_uri().'/JS/jquery.mobilemenu.js', array(), false, true);
    wp_enqueue_script( 'kit-fontawesome-js', 'https://kit.fontawesome.com/d019ecf32d.js', array(), false, true);
    wp_enqueue_script( 'code-jquery-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), false, true);
    wp_enqueue_script( 'cloudflare-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), false, true);
    wp_enqueue_script( 'stackpath-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script( 'slick-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), false, true);

}

function wp_style() {
    wp_enqueue_style( 'boostrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"', array(), null);
    wp_enqueue_style( 'slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), null);
    wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null);
    wp_enqueue_style( 'fomework-css', get_template_directory_uri().'/CSS/framework.css', array(), null);
    wp_enqueue_style( 'layout-theme', get_template_directory_uri().'/layout.css', array(), null);
}

function customTheme_title_separator() {
    return '|';
}

/*
Permet de mettre la classe active sur la page actuel
*/
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

/**
 * Limit de facon personnalise le nombre d'element afficher avec la function wordpress the_excerpt
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}


//Créer un nouveau post_type pour l'equipe (type blog)
register_post_type(
    'Equipes', array(
        'label' => 'equipe',
        'labels'=> array(
            'name'          => 'Equipes',
            'singular_name' => 'Equipe'),
        'public'    =>true,
        'supports'   =>array( 'title'), 'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'menu_position' => 6,
        )
);

//Ajoute du contenu a ACF
if( function_exists('acf_add_options_page') ) {
   
    acf_add_options_page(array(
        'page_title'     => 'Configurateur de thème',
        'menu_title'    => 'Configurateur de thème',
        'menu_slug'     => 'config-theme',
        'capability'    => 'edit_posts',
    ));
   
    acf_add_options_sub_page(array(
        'page_title'     => 'Coordonnées',
        'menu_title'    => 'Coordonnées',
        'parent_slug'    => 'config-theme',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Header',
        'menu_title'    => 'Header',
        'parent_slug'    => 'config-theme',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'config-theme',
    ));
}


// TODO Pagination NON FONCTIONNEL ???!!
function custom_theme_pagination() {
    echo '<ul class="pagination">';
    $pages = paginate_links(['type' => 'array']);
    foreach($pages as $page) {
        echo '<li>';
        echo $page;
        echo '</li>';
    }
    echo '</ul>';
}

function customTheme_register_widget() {
    register_sidebar( [
        'id' => 'projet',
        'name' => 'projet',
        'before_widget' => '<aside class="widget widget_categories %2$s" id="%1$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title text-cap">',
        'after_title' => '</h3> <div class="tiny-border"> </div>',
    ]);
}




add_action('wp_enqueue_scripts','wp_style');
add_action('wp_enqueue_scripts','api_scripts');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support( 'menus') ;
register_nav_menus( 'header', 'menu_header' );
register_nav_menu( 'footer', 'menu_footer' );
add_filter( 'document_title_separator', 'customTheme_title_separator' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );
add_action( 'widgets_init', 'customTheme_register_widget' );


