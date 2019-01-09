<?php get_header();
/* Template Name: Search Page */
 ?>
<div class="page-wrapper">
	<div class="s-wrapper">
      <div class="search-form" id="search-top">
            <form action="<?php bloginfo('url'); ?>" id="searchform" method="get">
                <div id="search-top">
                    <label for="s">search term</label>
                    <input type="text" id="s" class="search-input" name="s" value="<?php the_search_query(); ?>"><input type="submit" class="search-button" value="Search" id="searchsubmit">
                    <div class="clear"></div>
                </div>
            </form>
        </div>
        <!--search from-->
		
    </div><!--s wrpper-->
</div><!--page wrapper-->
<?php get_footer(); ?>