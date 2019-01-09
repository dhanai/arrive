<?php
/* Template Name: Contact Page */
 get_header();
?>
<section>
    <div class="banner-area contact-banner">
        <div class="wrapper">
        <?php $rq_headline = get_field('rq_headline'); if($rq_headline==''){ $rq_headline = get_the_title();}?>
        	<h1 class="heading"><?php echo $rq_headline ?></h1>
            <div class="contact-container">
                <div class="form-area">
                    <?php echo do_shortcode( get_field( 'rq_form_code')); ?>
                </div><!--form area-->
            </div><!--contact container-->
        </div><!--wrapper-->
        <div class="contact-ways wrapper"> 
            <div class="contact-area">
            	<?php if( have_rows('contact_widget') ):  while ( have_rows('contact_widget') ) : the_row(); ?>
                <a href="<?php the_sub_field('url'); ?>">
                    <span class="contact-icon"><img src="<?php the_sub_field('icon'); ?>" alt="Phone"></span>
                    <span class="contact-text"><span><?php the_sub_field('title'); ?></span><?php the_sub_field('description'); ?></span>
                    <div class="clear"></div>
                </a>
                <?php endwhile;endif;wp_reset_postdata(); ?> 
            </div><!--contact area-->
            <div class="clear"></div>
            
        </div><!--wrapper--> 
    </div><!--page wrapper-->
</section>
<section>
	<div class="wrapper">
       <h2 class="section-headline"><?php the_field('cols_headline'); ?></h2>
    	<div class="location-container">
        	<?php if( have_rows('ls_location') ):  while ( have_rows('ls_location') ) : the_row(); ?>
            <div class="location">
            	<div class="location-image">
                	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
                </div><!--location image-->
                <h3><?php the_sub_field('name'); ?></h3>
                <?php the_sub_field('address'); ?>
            </div><!--location-->
            <?php endwhile;endif;wp_reset_postdata(); ?> 
        </div><!--location container-->
        <div class="clear"></div>
    </div><!--wrapper-->
</section>
<?php get_footer(); ?>