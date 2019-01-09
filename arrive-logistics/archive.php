<?php get_header(); ?>	
<div class="page-wrapper">
	<div class="s-wrapper">
    	<h6>
	<?php $post = $posts[0]; if (is_category()||is_day()||is_month()||is_year()||is_author()){_e('Archive for the','arrive-logistics');} elseif( is_tag() ) {_e('Posts Tagged', 'arrive-logistics');} elseif (is_day()) { _e('Archive for','arrive-logistics');}elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { _e('Archive for','arrive-logistics');}
    ?></h6>
    <h1 class="heading">
    <?php   if (is_category()){ single_cat_title(); _e(' Category','arrive-logistics'); }elseif( is_tag()){single_tag_title();}elseif (is_day()){the_time('F jS, Y');}elseif (is_month()){the_time('F, Y');}elseif (is_year()) {the_time('Y');}
        elseif (is_author()){the_author();}elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {_e('Blog','arrive-logistics');}?></h1>
		<?php get_template_part( 'template-parts/content/content', 'archive' ); ?> 
    </div><!--s wrpper-->
</div><!--page wrapper-->
<?php get_footer(); ?>
