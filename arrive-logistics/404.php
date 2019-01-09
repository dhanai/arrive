<?php get_header(); ?>
<div class="page-wrapper">
	<div class="s-wrapper">
    	<h1 class="heading"><?php _e('Error 404','arrive-logistics'); ?></h1>
        <h2 class="sub-heading"><?php _e("Oops! You broke it :(",'arrive-logistics'); ?></h2>
      	<p><?php _e("It looks like you may have taken a wrong turn.",'arrive-logistics'); ?><br />
	<?php _e("Don't worry... it happens to the best of us.",'arrive-logistics'); ?></p>
	<p><?php _e("Here's a little map that might help you get back on track:",'arrive-logistics'); ?></p>
		<?php wp_nav_menu( array( 'theme_location' => 'main','fallback_cb'=> 'fallbackmenu1' ) ); ?>
    <div class="clear"></div>
	<p><?php _e("Or you can look for your way here:",'arrive-logistics'); ?></p>
    <form action="<?php esc_url( home_url() ); ?>" id="searchform" method="get">
        <div id="search-top">
            <input type="text" id="s" class="search-input" name="s" value="" /><input type="submit" class="search-button" value="<?php _e("Search",'arrive-logistics'); ?>" id="searchsubmit" />
        </div>
    </form>
    <a href="javascript:history.go(-1);">Go back to previous page</a>
    </div><!--s wrpper-->
</div><!--page wrapper-->    
    
    
<?php get_footer(); ?>