<?php //View Port for Responsive Themes//
	
	function viewport_webriver() {
	echo '
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	';
	}
	add_action( 'wp_head', 'viewport_webriver' );
?>
<?php load_theme_textdomain('arrive-logistics'); ?>
<?php
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 140, 140, true );
	add_image_size( 'full-size-image', 1300, 9999 );
	add_image_size( 'single-post-thumbnail', 300, 9999 );
	add_image_size( 'techpage-thumbnail', 615, 415, true );
	add_image_size( 'accordion-thumbnail', 64, 50, true );
	if ( ! isset( $content_width ) ) $content_width = 665;

	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	// Add Custom Headers
	 add_theme_support( "custom-header" ) ;
	 add_theme_support( "custom-background" ) ;
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
		// Declare sidebar widget zone
	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() {
		register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
	}

		
add_theme_support( 'title-tag' );
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "<div class='clear'></div></div>\n";
     }
}

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'main' => __( 'Main Menu', '' ),
		'footer-left' => __( 'Footer Left Menu', '' ),
		'footer-right' => __( 'Footer Right Menu', '' ),
		'mobile-menu' => __( 'Mobile Menu', '' ),
	) );
}

function fallbackmenu1(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function fallbackmenu2(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'lineheight';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

function add_first_and_last($items) {
    $items[1]->classes[] = 'first-menu-item';
    $items[count($items)]->classes[] = 'last-menu-item';
    return $items;
}
 
add_filter('wp_nav_menu_objects', 'add_first_and_last');

function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

function get_excerpt($count){
	global $post;
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = wp_strip_all_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.' ...';
  $excerpt = $excerpt;
  return $excerpt;
}

function webriver_theme_register_scripts() {
	wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js',array('jquery'), null, true );
	wp_register_script( 'organictabs.jquery', get_template_directory_uri() . '/assets/js/organictabs.jquery.js',array('jquery'), null, true );
	wp_register_script( 'isotope.pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.js',array('jquery'), null, true );
	wp_register_script( 'index', get_template_directory_uri() . '/assets/js/index.js',array('jquery'), null, true );
	wp_register_script( 'jquery-magnificpopup', get_template_directory_uri() . '/assets/js/jquery-magnificpopup.js',array('jquery'), null, true );
  wp_register_script( 'scrollreveal.min', get_template_directory_uri() . '/assets/js/scrollreveal.min.js',array('jquery'), null, true );
	wp_register_script( 'gravityforms', get_template_directory_uri() . '/assets/js/gravityforms.js',array('jquery'), null, true );
	wp_register_script( 'site_scripts', get_template_directory_uri() . '/assets/js/site_scripts.js',array('jquery'), null, true );
}
add_action( 'init', 'webriver_theme_register_scripts' );


function webriver_theme_enqeue_scripts() {
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'isotope.pkgd' );
	wp_enqueue_script( 'index' );
	wp_enqueue_script( 'owl-carousel' );
	wp_enqueue_script( 'organictabs.jquery' );
	wp_enqueue_script( 'scrollreveal.min' );
	wp_enqueue_script( 'jquery-magnificpopup' );
	wp_enqueue_script( 'gravityforms' );
	wp_enqueue_script( 'site_scripts' );
}

add_action( 'wp_enqueue_scripts', 'webriver_theme_enqeue_scripts' );


/**
 * This function will add a new options page to the wp-admin sidebar
 *
 * All data saved on an options page is global. This means it is not attached 
 * to any particular post or page, but is saved in the wp_options table
 *
 * @since MacDonalDesign 1.0
 */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return '"'.home_url().'"';
    }

function custom_login_logo() {
    echo '<style type="text/css">
.login h1 a {
	background-image: url(' . get_stylesheet_directory_uri() . '/assets/images/login-logo.png) !important;
	background-position: center center;
	color:rgba(0, 0, 0, 0);
  background-size: contain;
  height: 80px;
  width: 65%;
	outline: 0;
}
</style>';
    
}
add_action('login_head', 'custom_login_logo');

/*********** CPT *************/

add_action('init', 'cptui_register_position');
function cptui_register_position(){
    register_post_type('position', array(
        'label' => 'Positions',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
		'has_archive'  => false,
        'rewrite' => array(
            'slug' => 'career',
            'with_front' => 1
        ),
        'query_var' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Positions',
            'singular_name' => 'Position',
            'menu_name' => 'Positions',
            'add_new' => 'Add Position',
            'add_new_item' => 'Add New Position',
            'edit' => 'Edit',
            'edit_item' => 'Edit Position',
            'new_item' => 'New Position',
            'view' => 'View Position',
            'view_item' => 'View Position',
            'search_items' => 'Search Position',
            'not_found' => 'No Team Position',
            'not_found_in_trash' => 'No Position Found in Trash',
            'parent' => 'Parent Positions'
)));}

add_action('init', 'cptui_register_my_taxes_position_location');
	function cptui_register_my_taxes_position_location() {
	register_taxonomy( 'location',array (
	  0 => 'position',
	),
	array( 'hierarchical' => true,
		'label' => 'Location',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'location' ),
		'show_admin_column' => true,
		'labels' => array (
	  'search_items' => 'Location',
	  'popular_items' => '',
	  'all_items' => '',
	  'parent_item' => '',
	  'parent_item_colon' => '',
	  'edit_item' => '',
	  'update_item' => '',
	  'add_new_item' => '',
	  'new_item_name' => '',
	  'separate_items_with_commas' => '',
	  'add_or_remove_items' => '',
	  'choose_from_most_used' => '',
	)
	) ); 
	}
add_action('init', 'cptui_register_my_taxes_position_department');
	function cptui_register_my_taxes_position_department() {
	register_taxonomy( 'department',array (
	  0 => 'position',
	),
	array( 'hierarchical' => true,
		'label' => 'Department',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'department' ),
		'show_admin_column' => true,
		'labels' => array (
	  'search_items' => 'Department',
	  'popular_items' => '',
	  'all_items' => '',
	  'parent_item' => '',
	  'parent_item_colon' => '',
	  'edit_item' => '',
	  'update_item' => '',
	  'add_new_item' => '',
	  'new_item_name' => '',
	  'separate_items_with_commas' => '',
	  'add_or_remove_items' => '',
	  'choose_from_most_used' => '',
	)
	) ); 
	}








function blockquote_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'title' => 'title',
      'cite' => 'cite',
	  'image' => 'image'
      ), $atts ) );

   return '<div class="quote-area">
        	<blockquote>
            	<h6>' . esc_attr($title) . '</h6>
                <p>“' . $content . '”</p>
                <cite>– ' . esc_attr($cite) . '</cite>
            </blockquote>
            <div class="quote-image" style="background-image: url(' . esc_attr($image) . ');"></div><!--quote image-->
            <div class="clear"></div>
        </div><!--quote area-->';
   
}
add_shortcode("blockquote", "blockquote_func");


function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );