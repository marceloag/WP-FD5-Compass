<?php
        // Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    // CUSTOM THUMBNAILS

    if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true );
    }

    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'slides', 715, 354,true );
        add_image_size( 'producto', 700, 400,true );
        add_image_size( 'productotop', 700, 400, array( 'center', 'top' ));
    }

    // Custom Menu Places
    function register_my_menus() {
      register_nav_menus(
        array(
          'mainmenu' => __( 'mainmenu' ),
          'footer' => __( 'footer' )
        )
      );
    }

    add_action( 'init', 'register_my_menus' );
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

    function any_ptype_on_cat($request) {
    if ( isset($request['category_name']) )
        $request['post_type'] = 'any';

    return $request;
    }
    add_filter('request', 'any_ptype_on_cat');

    // 

    function the_category_unlinked($separator = ' ') {
                        $categories = (array) get_the_category();
                        
                        $thelist = '';
                        foreach($categories as $category) {    // concate
                            $thelist .= $separator . $category->category_nicename;
                        }
                        
                        echo $thelist;
                    }

    function wp_get_attachment( $attachment_id ) {
        $attachment = get_post( $attachment_id );
        return array(
            'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink( $attachment->ID ),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }

    // Upscale thumbnails when the source image is smaller than the thumbnail size. Retain the aspect ratio.
function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null; // let the wordpress default function handle this

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );

add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

// Disable srcset

function disable_srcset( $sources ) {
return false;
}
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );


?>