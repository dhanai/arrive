<?php get_header(); ?>
<div class="banner-area ">
	<div class="s-wrapper">
    	<h1 class="heading"><?php global $wp_query; echo $wp_query->found_posts.' results'; ?></h1>
      <div class="search-form" id="search-top">
            <form action="<?php esc_url( home_url() ); ?>" id="searchform" method="get">
                <div id="search-top">
                    <label for="s">search term</label>
                    <input type="text" id="s" class="search-input" name="s" value="<?php the_search_query(); ?>"><input type="submit" class="search-button" value="Search" id="searchsubmit">
                    <div class="clear"></div>
                </div>
            </form>
        </div>
        <!--search from-->
		<?php get_template_part( 'template-parts/content/content', 'archive' ); ?> 
    </div><!--s wrpper-->
</div><!--page wrapper-->
<?php get_template_part( 'template-parts/content/cta' ); ?>
<?php get_footer(); ?>