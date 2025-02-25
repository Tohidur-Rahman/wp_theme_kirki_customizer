<?php 
// Kirki Customizer
require_once(get_theme_file_path('/inc/stack-customizer.php'));

function stack_theme_setup() {

	load_theme_textdomain( 'stack', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'stack' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('custom-logo');
}

add_action( 'after_setup_theme', 'stack_theme_setup' );

function stack_assets() {

    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.0', 'all');
    // Line Icons CSS
    wp_enqueue_style('line-icons', get_template_directory_uri().'/assets/fonts/line-icons.css', array(), '1.0', 'all');
    // Slicknav CSS
    wp_enqueue_style('slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), '1.0', 'all');
    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    // Owl Theme CSS
    wp_enqueue_style('owl-theme', get_template_directory_uri().'/assets/css/owl.theme.css', array(), '4.0', 'all');
    // Magnific CSS
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all');
    // Nivo Lightbox CSS
    wp_enqueue_style('nivo-lighbox', get_template_directory_uri().'/assets/css/nivo-lightbox.css', array(), '1.0', 'all');
    // Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0', 'all');
    // Main CSS
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', array(), '4.0', 'all');
    // Responsive CSS
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all');
    // Style CSS
    wp_enqueue_style( 'style', get_stylesheet_uri() );


    // Popper JS
    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('mixitup', get_template_directory_uri().'/assets/js/jquery.mixitup.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('nav', get_template_directory_uri().'/assets/js/jquery.nav.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('scrolling', get_template_directory_uri().'/assets/js/scrolling-nav.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('nivo-lightbox', get_template_directory_uri().'/assets/js/nivo-lightbox.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.js', array('jquery'), '1.0', true);
    // Popper JS
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'stack_assets');