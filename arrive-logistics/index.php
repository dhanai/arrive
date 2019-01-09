<?php get_header(); ?>	
<div class="page-wrapper">
	<div class="s-wrapper">
        <h1 class="heading"> <?php bloginfo( 'name' ); ?></h1>
        <h6><?php bloginfo('description'); ?></h6>
		<?php get_template_part( 'template-parts/content/content', 'archive' ); ?> 
    </div><!--s wrpper-->
</div><!--page wrapper-->
<?php get_footer(); ?>
