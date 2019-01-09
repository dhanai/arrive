<script type="text/javascript">
var templateUrl = '<?= get_bloginfo("template_url"); ?>';
</script>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
		<?php
			if ( ! function_exists( '_wp_render_title_tag' ) ) {
			 function theme_slug_render_title() {
			?>
			<title><?php wp_title( '|', true, 'right' ); ?></title>
			<?php
			 }
			 add_action( 'wp_head', 'theme_slug_render_title' );
			}
		?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
<?php
		$tracking = get_field('tracking_code','option');
		$ccss = get_field('custom_css','option');
		$hscripts = get_field( 'head_scripts', 'option');
		$bscripts = get_field( 'body_scripts', 'option');
	?>    
	<?php 
        // Add Tracking Code
        if ($tracking != ''){
            echo $tracking;
        }
		
        // Add Custom CSS
        if ($ccss != ''){
            echo '<style type="text/css">';
            echo $ccss;
            echo '</style>';
        }
		
        // Add Head Scripts
        if ($hscripts != ''){
            echo $hscripts;
        }
    ?>   
    
</head>
<body <?php body_class(); ?>>
<?php 
	if ($bscripts != '') {
		echo $bscripts;
	}
?>
<?php if (is_page_template('template-home.php')||is_page_template('template-technology.php')||is_page_template('template-shipper.php')||is_page_template('template-about.php')||is_singular('position')||is_page_template('template-carriers.php')) { ?>
<header class="header-banner-img">
<?php }else{ ?>
<header>
<?php } ?>
    <div class="inner-header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" class="colored-logo"><img src="<?php the_field( 'logo','option'); ?>" alt="Logo"></a>
            <a href="<?php echo home_url(); ?>" class="white-logo"><img src="<?php the_field( 'white_logo','option'); ?>" alt="Logo"></a>
            <a href="<?php echo home_url(); ?>" class="sticky-logo"><img src="<?php the_field( 'sticky_logo','option'); ?>" alt="Logo"></a>
        </div><!--logo-->
        <div class="request-btn d-hide">
        <?php $header_button = get_field('header_button','option'); ?>
            <?php if($header_button['url']){ ?><a href="<?php echo $header_button['url']; ?>" class="button-fill" <?php if($header_button['target']){ ?>target="<?php echo $header_button['target']; ?>"<?php } ?>><?php echo $header_button['title']; ?></a><?php } ?>
        </div><!--request btn-->
        <div class="main-menu d-hide">
            <div class="nav-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'main','fallback_cb'=> 'fallbackmenu1' ) ); ?>
            </div><!--nav menu-->
        </div><!--main menu-->
        <div class="outer-menu">
        	<input class="checkbox-toggle" type="checkbox" />
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu-mobile">
                <div>
                    <div>
                        <div class="mobile-main-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'main','fallback_cb'=> 'fallbackmenu1' ) ); ?>
                        </div><!--main menu-->
                        <div class="request-btn">
                            <?php $header_button = get_field('header_button','option'); ?>
            <?php if($header_button['url']){ ?><a href="<?php echo $header_button['url']; ?>" class="button-fill" <?php if($header_button['target']){ ?>target="<?php echo $header_button['target']; ?>"<?php } ?>><?php echo $header_button['title']; ?></a><?php } ?>
                        </div><!--request btn-->
                    </div><!--empty-->
                </div><!--empty-->
            </div><!--menu-->
    </div><!--outer menu-->
        <div class="clear"></div>
    </div>
    <!-- /.inner-header -->
</header>
<?php get_template_part( 'template-parts/header/banner', 'main' ); ?>
