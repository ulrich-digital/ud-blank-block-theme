<?php
/* =============================================================== *\
   WP-Head
\* =============================================================== */
add_action('wp_head', function () { ?>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="index, follow">

    <!-- Standard SEO -->
    <!--
	<meta name="zipcode" content="6430">
	<meta name="city" content="Schwyz">
	<meta name="country" content="CH">
	<meta name="author" content="ulrich.digital">
	<meta name="publisher" content="Matthias Ulrich">
	<meta name="copyright" content="ulrich.digital">
	<meta name="keywords" content="Webagentur, Webdesign, Website, Internetagentur, Webseite, Design, Schwyz">
	<meta name="title" content="ulrich.digital | Hier entsteht ihre Webseite" />
	<meta name="description" content="Agentur für Webdesign, WordPress, WooCommerce, Online Shops und SEO | Digitalagentur & Webagentur Schwyz | Hier entsteht Ihre Webseite.">
	<meta name="page-topic" content="Webdesign, Webentwicklung, Wordpress-Agentur">
	<meta name="page-type" content="Produktinfo">
	<meta name="audience" content="Profis">
	-->

    <!-- Dublin Core basic info -->
    <!--
	<meta name="DC.Creator" content="ulrich.digital">
	<meta name="DC.Publisher" content="Matthias Ulrich">
	<meta name="DC.Rights" content="ulrich.digital">
	<meta name="DC.Description" content="Webagentur für Webdesign, WordPress, WooCommerce, Online Shops und SEO | Digitalagentur & Webagentur Schwyz | Hier entsteht Ihre Webseite mit ♥">
	<meta name="DC.Language" content="de">
	-->
    <!-- Facebook OpenGraph -->
    <!--
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="de_DE" />
	<meta property="og:title" content="ulrich.digital | Hier entsteht Ihre Webseite" />
	<meta property="og:description" content="Wollen Sie ultimatives Motorräder-Fahrgefühl und einen starken Partner an Ihrer Seite? Kommen Sie bei uns in Ebikon, Luzern vorbei." />
	<meta property="og:site_name" content="ulrich.digital" />
	-->
<?php

});


/* =============================================================== *\
   Google-Analytics only on LiveSite
\* =============================================================== */
if ("https://HIER_DIE_LIVE_SITE_URL_EINTRAGEN" == get_home_url()):
    add_action('wp_head', 'add_google_analytics_tag');
endif;

function add_google_analytics_tag() { ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD9HZ7TQTN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-HD9HZ7TQTN');
    </script>
<?php }



/* =============================================================== *\
   Add Styles
\* =============================================================== */

/* Frontend only */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'ud-theme-frontend',
		get_stylesheet_directory_uri() . '/build/frontend.css',
		array(),
		filemtime(get_stylesheet_directory() . '/build/frontend.css')
	);
});

/* Frontend + Editor */
add_action('enqueue_block_assets', function () {

	wp_enqueue_style(
		'ud-fontawesome',
		get_stylesheet_directory_uri() . '/assets/libs/fontawesome/fontawesome.bundle.css',
		array(),
		filemtime(get_stylesheet_directory() . '/assets/libs/fontawesome/fontawesome.bundle.css')
	);

	wp_enqueue_style(
		'ud-theme-shared',
		get_stylesheet_directory_uri() . '/build/shared.css',
		array(),
		filemtime(get_stylesheet_directory() . '/build/shared.css')
	);

	/* Editor only */
	if (is_admin()) {
		wp_enqueue_style(
			'ud-theme-editor',
			get_stylesheet_directory_uri() . '/build/editor.css',
			array(),
			filemtime(get_stylesheet_directory() . '/build/editor.css')
		);
	}
});


/* =============================================================== *\
   Add Scripts
\* =============================================================== */

/* Frontend */
add_action('wp_enqueue_scripts', function () {

	wp_enqueue_script(
		'ud-theme-shared',
		get_stylesheet_directory_uri() . '/build/shared.js',
		array(),
		filemtime(get_stylesheet_directory() . '/build/shared.js'),
		true
	);

	wp_enqueue_script(
		'ud-theme-frontend',
		get_stylesheet_directory_uri() . '/build/frontend.js',
		array('ud-theme-shared'),
		filemtime(get_stylesheet_directory() . '/build/frontend.js'),
		true
	);

});

/* Editor */
add_action('enqueue_block_editor_assets', function () {

	wp_enqueue_script(
		'ud-theme-shared',
		get_stylesheet_directory_uri() . '/build/shared.js',
		array(),
		filemtime(get_stylesheet_directory() . '/build/shared.js'),
		true
	);

	wp_enqueue_script(
		'ud-theme-editor',
		get_stylesheet_directory_uri() . '/build/editor.js',
		array(
			'ud-theme-shared', // wichtig!
			'wp-blocks',
			'wp-dom-ready',
			'wp-data',
		),
		filemtime(get_stylesheet_directory() . '/build/editor.js'),
		true
	);

});


/* =============================================================== *\
   Custom Admin-Logo
\* =============================================================== */
add_action('login_enqueue_scripts', 'my_login_logo');
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/ulrich_digital_schriftzug_inter.svg);
            padding-bottom: 60px;
            width: 320px;
            background-repeat: no-repeat;
            background-size: 250px auto;
        }
    </style>
<?php }


/* =============================================================== *\
   Custom Admin-Logo link to Home URL
\* =============================================================== */
function my_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');


/* =============================================================== *\
 	 Custom-Logo
\* =============================================================== */
//add_theme_support( 'custom-logo' );
function uldi_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'uldi_custom_logo_setup');

function get_custom_logo_callback($html) {
    if (has_custom_logo()) {
        return $html;
    } else {
        return '<h3>Logo</h3>';
    }
}
add_filter('get_custom_logo', 'get_custom_logo_callback');



/* =============================================================== *\
   Bildqualität für generierte Bilder festlegen
    (betrifft Thumbnails, Medium, Large etc.)
\* =============================================================== */
add_filter('image_editor_output_format', function ($formats) {
    return [
        'image/jpeg' => 'image/avif',
        'image/webp' => 'image/avif',
        'image/png'  => 'image/avif',
    ];
});

add_filter('wp_editor_set_quality', function ($quality, $mime_type) {
    if ('image/avif' === $mime_type) {
        return 90; // AVIF: Hohe Qualität, trotzdem kleine Dateien
    }
    if ('image/webp' === $mime_type) {
        return 95;
    }
    if ('image/jpeg' === $mime_type) {
        return 85;
    }
    return $quality;
}, 10, 2);



/* =============================================================== *\
   Disable image size threshold
\* =============================================================== */
add_filter('big_image_size_threshold', '__return_false');


/* =============================================================== *\
   Add custom image sizes to backend choose
\* =============================================================== */
function ud_add_custom_image_sizes_to_backend_choose($sizes) {
    $custom_sizes = array(
        'neuer_bilder_slug' => __('Neuer Bilderslug', 'uldi')
    );
    return array_merge($sizes, $custom_sizes);
}
//add_filter('image_size_names_choose', 'ud_add_custom_image_sizes_to_backend_choose');


/* =============================================================== *\
   Enable SVG
\* =============================================================== */
function ud_add_svg_to_upload_mimes($upload_mimes) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'ud_add_svg_to_upload_mimes');


/* =============================================================== *\
   Add Custom Admin Footer
\* =============================================================== */
function backend_entwickelt_mit_herz($text) {
    return ('<span style="color:black;">Entwickelt mit </span><span style="color: red;font-size:20px;vertical-align:-3px">&hearts;</span><span style="color:black;"</span><span> von <a href="https://ulrich.digital" target="_blank">ulrich.digital</a></span>');
}
add_filter('admin_footer_text', 'backend_entwickelt_mit_herz');


/* =============================================================== *\
   Disable Comments
\* =============================================================== */
/*
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
*/


/* =============================================================== *\
   Clean Up WP-Admin-Bar
\* =============================================================== */
/*
function example_admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
    $wp_admin_bar->remove_menu( 'comments' );
    $wp_admin_bar->remove_menu( 'new-content' );
    $wp_admin_bar->remove_menu( 'archive' );

}
add_action( 'wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0 );
*/


/* =============================================================== *\
   Remove Admin-Menu-Elements
\* =============================================================== */
/*
function ud_remove_menus () {
	global $menu;
	$restricted = array(__('Beiträge'), __('Kommentare'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
			unset($menu[key($menu)]);
		}
	}
}
add_action('admin_menu', 'ud_remove_menus');
*/


/* =============================================================== *\
   Add is_frontend Class to body
\* =============================================================== */
if (!is_admin()):
    add_filter('body_class', function ($classes) {
        return array_merge($classes, array('is_frontend'));
    });
endif;
?>
