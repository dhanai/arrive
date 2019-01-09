<?php get_header(); ?>
<div class="page-wrapper single-page-wrapper banner-area">
	<div class="s-wrapper">
    	<?php 
			$pmh_headline = get_field('pmh_headline');
			if($pmh_headline==''){ $pmh_headline = get_the_title();}
			$intro_text = get_field('intro_text');
			$pmh_image = get_field('pmh_image');
			if($pmh_image==''){$pmh_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image')); }
			 ?>
    	<!-- <h1 class="heading"><?php echo $pmh_headline; ?></h1> -->
       <?php if($intro_text){ ?> <div class="intro-text">
        	<?php echo $intro_text; ?>
        </div><!--intro text--><?php } ?>
        <?php if($pmh_image){ ?>
         <div class="m-wrapper resource-featured-img">
            <img src="<?php echo $pmh_image; ?>" alt=""/>
        </div>
        <?php } ?>
        <?php get_template_part( 'template-parts/content/content', 'page' ); ?> 
    </div><!--s wrpper-->
</div><!--page wrapper-->
<?php get_footer(); ?>