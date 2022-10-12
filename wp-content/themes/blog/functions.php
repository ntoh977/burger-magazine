<?php 

wp_enqueue_script( 'jQuery' );



function mp_cpt_mycustomposttype() {

    $labels = array(
        'name'          => __('Изображение вверху', 'textdomain'),
        'singular_name' => __('Product', 'textdomain'),
    );
    $args = array(
        'label'                 => 'TheName',
        'description'           => 'TheNamePlural',
        'labels'                => $labels,
        'supports'              => array( 'title','thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 1,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'customposttypename', $args );
}
add_action( 'init', 'mp_cpt_mycustomposttype', 0 );

add_theme_support( 'post-thumbnails', array( 'post', 'customposttypename' ) );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
			'post-formats',
            'custom-logo',
		)
	);





function prefix_editor_color_palette() {
    register_nav_menus(
        array(
            'Menu_top' => esc_html__( 'Меню вверху', '' ),
             'footer'  => esc_html__( 'Меню внизу', '' ),
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
    add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

    add_theme_support(
        'html5',
        array(
            'admin-bar',
    'align-wide',
    'automatic-feed-links',
    'core-block-patterns',
    'custom-background',
    'custom-header',
    'custom-line-height',
    'custom-logo',
    'customize-selective-refresh-widgets',
    'custom-spacing',
    'custom-units',
    'dark-editor-style',
    'disable-custom-colors',
    'disable-custom-font-sizes',
    'editor-color-palette',
    'editor-gradient-presets',
    'editor-font-sizes',
    'editor-styles',
    'featured-content',
    'html5',
    'menus',
    'post-formats',
    'post-thumbnails',
    'responsive-embeds',
    'starter-content',
    'title-tag',
    'wp-block-styles',
    'widgets',
    'widgets-block-editor',

        )
    );
    
}
add_action( 'after_setup_theme', 'prefix_editor_color_palette' );



function my_style() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'my-slick', get_template_directory_uri(). '/slick/slick.css', false );
}



add_action( 'wp_enqueue_scripts', 'my_style' );
function myscript() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri());
    wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/jquery-1.12.4.js', array(),);	

	wp_enqueue_script('slick-js', get_template_directory_uri().'/slick/slick.min.js',array(), true );
    wp_enqueue_script('main-scripts', get_template_directory_uri().'/js.js',array(), '1.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'myscript' );

function theme_support_options() {
    $defaults = array(
    'height'      => 50,
    'width'       => 50,
    'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   // call the function in the hook
   add_action( 'after_setup_theme', 'theme_support_options' );