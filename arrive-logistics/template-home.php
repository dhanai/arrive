<?php
/* Template Name: Home Page */
 get_header();
?>
<span id="homepage-first-scroll-section"></span>
<section class="section-mrg">
    <div class="m-wrapper">
        <h2 class="section-headline"><?php the_field( 'hp_so_headline'); ?></h2>
        <div class="home-intro">
            <?php the_field( 'hp_so_text'); ?>
        </div>
        <!-- /.home-intro -->
        <div class="our-feature-area">
           <div class="our-main-features">
           	<?php if( have_rows('hp_services_bullets') ):  while ( have_rows('hp_services_bullets') ) : the_row();?>
                <div class="our-feature">
                    <div class="our-feature-icon"><img src="<?php the_sub_field('icon'); ?>" alt=""></div>
                    <div class="our-feature-title"><?php the_sub_field('title'); ?></div>
                </div>
                <!-- /.our-feature -->
            <?php endwhile;endif;wp_reset_postdata(); ?>    
                <div class="clear"></div>
            </div>
           <!-- /.our-main-features -->
           <?php $hp_so_button_one = get_field('hp_so_button_one'); ?>
        <?php if($hp_so_button_one['url']){ ?><a href="<?php echo $hp_so_button_one['url']; ?>" class="button" <?php if($hp_so_button_one['target']){ ?>target="<?php echo $hp_so_button_one['target']; ?>"<?php } ?>><?php echo $hp_so_button_one['title']; ?></a><?php } ?>
        
        <?php $hp_so_button_two = get_field('hp_so_button_two'); ?>
         <?php if($hp_so_button_two['url']){ ?><a href="<?php echo $hp_so_button_two['url']; ?>" class="button" <?php if($hp_so_button_two['target']){ ?>target="<?php echo $hp_so_button_two['target']; ?>"<?php } ?>><?php echo $hp_so_button_two['title']; ?></a><?php } ?>
        
        <?php $hp_so_button_three = get_field('hp_so_button_three'); ?>
         <?php if($hp_so_button_three['url']){ ?><a href="<?php echo $hp_so_button_three['url']; ?>" class="button" <?php if($hp_so_button_three['target']){ ?>target="<?php echo $hp_so_button_three['target']; ?>"<?php } ?>><?php echo $hp_so_button_three['title']; ?></a><?php } ?>
        </div>
        <!-- /.our-feature -->
    </div>
    <!-- /.m-wrapper -->
</section>    
<section class="section-mrg">
   <div class="big-wrapper">
        <div class="featured-boxes-area">
           <?php $fbox_counter =0 ; ?>
            <?php if( have_rows('hp_testimonial') ):  while ( have_rows('hp_testimonial') ) : the_row(); $fbox_counter++;?>
            <div class="featured-box" style="background: linear-gradient(100.61deg, rgba(0, 0, 0, 0.5) 12.05%, rgba(0, 0, 0, 0) 69.95%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_sub_field('background_image') ?>); background-size: cover; background-position: center center; background-repeat: no-repeat; ">
                    <div class="featured-box-content">
                        <h2 class="section-headline
                        <?php
                            if( $fbox_counter == 2){
                                echo "home-second-fbox-headline";
                            }    
                        ?>
                        "><?php the_sub_field('title'); ?></h2>
                        <p class="intro-text">"<?php the_sub_field('text'); ?>"
                            <span class="slider-subtext"> - <?php the_sub_field('author'); ?></span>
                        </p>
                         
                         <!-- /.slider-subtext -->
                        <?php $hp_ts_button = get_sub_field('button'); ?>
         <?php if($hp_ts_button['url']){ ?><a href="<?php echo $hp_ts_button['url']; ?>" class="button" <?php if($hp_ts_button['target']){ ?>target="<?php echo $hp_ts_button['target']; ?>"<?php } ?>><?php echo $hp_ts_button['title']; ?></a><?php } ?>
                    </div>
                    <!-- /.featured-box-content -->
                    <div class="feature-box-hover"></div>
                    <!-- /.ibe_inner -->
                </div>
            <!-- /.featured-box -->
        	<?php endwhile;endif;wp_reset_postdata(); ?> 
   
            <div class="clear"></div>
        </div>
        <!-- /.featured-boxes-area -->
    </div>
   <!-- /.large-wrapper -->
</section>
<section class="section-mrg">
    <div class="how-we-diff s-wrapper">
       <div class="how-we-diff-icon"><img src="<?php the_field( 'hau_icon'); ?>" alt=""></div>
       	<div class="we-diff-content">
            <h2 class="section-headline"><?php the_field( 'hau_headline'); ?></h2>
            <p class="intro-text"><?php the_field( 'hau_text'); ?></p>
            <?php $hau_button_one = get_field('hau_button_one'); ?>
        	<?php if($hau_button_one['url']){ ?><a href="<?php echo $hau_button_one['url']; ?>" class="button" <?php if($hau_button_one['target']){ ?>target="<?php echo $hau_button_one['target']; ?>"<?php } ?>><?php echo $hau_button_one['title']; ?></a><?php } ?>
           
            <?php $hau_button_two = get_field('hau_button_two'); ?>
        	<?php if($hau_button_two['url']){ ?><a href="<?php echo $hau_button_two['url']; ?>" class="button" <?php if($hau_button_two['target']){ ?>target="<?php echo $hau_button_two['target']; ?>"<?php } ?>><?php echo $hau_button_two['title']; ?></a><?php } ?>
           
            <?php $hau_button_three = get_field('hau_button_three'); ?>
        	<?php if($hau_button_three['url']){ ?><a href="<?php echo $hau_button_three['url']; ?>" class="button" <?php if($hau_button_three['target']){ ?>target="<?php echo $hau_button_three['target']; ?>"<?php } ?>><?php echo $hau_button_three['title']; ?></a><?php } ?>
        	
        </div>
    </div>
    <!-- /.s-wrapper -->
</section>
<?php get_footer(); ?>
