<?php
//Aqui creo mi menu

if (function_exists('register_nav_menus')) {
    register_nav_menus(array('superior'=>'Menu Principal Superior'));
}

// Aqui creo una clase para el <a>
    add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10,3);

    function clase_menu_invento($atts, $item, $args){
        $class = 'nav-link text-white';
        $atts['class'] = $class;
        return $atts;
    }

// Agregando imagenes destacadas
    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' );
        
    }

//Agregando estilos y scrips
add_action( 'wp_enqueue_scripts', 'add_styles');
add_action( 'wp_enqueue_scripts', 'add_scripts');
function add_styles(){
    wp_enqueue_style('main_style', get_template_directory_uri().'/style.css', '', '', 'all');
}

function add_scripts(){
    wp_enqueue_script('main_script', get_template_directory_uri().'/assets/code/code.js', '', '', 'all');
}

//agregando sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
?>