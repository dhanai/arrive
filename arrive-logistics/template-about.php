<?php
/* Template Name: About Page */
 get_header();
?>

<section class="section-mrg">
    <div class="we-work-with d-hide">
       <ul>
       		 <?php 
        $location_detail =  get_field('carriers_value_bullet', 'option');
     
            if(!empty($location_detail[0])){
        $i = 0;
        while( (!empty($location_detail[$i]) ) ){ ?>
           
            <li><?php echo $location_detail[$i][title]; ?></li>
             <?php $i++; } ?>
    <?php }  wp_reset_query();?>
       </ul>
    </div>
</section>
<section class="section-mrg">
    <div class="m-wrapper about-intro">
        <div class="technology-intro-text">
            <h2 class="section-headline"><?php the_field('apsb_headline'); ?></h2>
            <?php the_field('apsb_text'); ?>
        </div><!--technology intro text-->
        <div class="technology-services">
        	<?php if( have_rows('apsb_images') ):  while ( have_rows('apsb_images') ) : the_row(); ?>
            	<img src="<?php the_sub_field('image'); ?>" alt="" />
            <?php endwhile;endif;wp_reset_postdata(); ?> 
        </div><!--technology services-->
        <div class="clear"></div>
    </div><!--m wrapper-->
</section>
<section class="section-mrg">
        <div class="big-wrapper">
           <div id="example-one">
            <div class="video-area what-our-value-box">
            	<?php $cunt=0; if( have_rows('apsb_value_bullets') ):  while ( have_rows('apsb_value_bullets') ) : the_row(); $cunt++; ?>
                 <div id="feature<?php echo $cunt; ?>" class="video-box small-box <?php if($cunt!=1){ ?>hide<?php } ?>" style="background-image: url(<?php the_sub_field('image'); ?>);">
                 <?php if(get_sub_field('video_url')){ ?>
                    <a href="<?php the_sub_field('video_url'); ?>" class="mfp-iframe"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.png" alt="Play Video Icon"></a><?php } ?>
                </div><!--video box-->
            	<?php endwhile;endif;wp_reset_postdata(); ?> 
                <div class="video-box-content what-our-value right-distance">
                    <h2 class="section-headline white"><?php the_field('vbb_headline'); ?></h2>
                    <ul class="nav">
                    	<?php $cunt2=0; if( have_rows('apsb_value_bullets') ):  while ( have_rows('apsb_value_bullets') ) : the_row();$cunt2++; ?>
                    	<li>
                            <a href="#feature<?php echo $cunt2; ?>" <?php if($cunt2==1){ ?>class="current"<?php } ?>><?php the_sub_field('title'); ?></a>
                        </li>
                    	<?php endwhile;endif;wp_reset_postdata(); ?> 
                    </ul>
                    <div class="clear"></div>
                </div><!--video box content-->
            </div><!--video area-->
            </div>
        </div><!--big wrapper-->
    </section>
<section class="section-mrg">
    <div class="wrapper">
        <h2 class="section-headline"><?php the_field('tb_headline'); ?></h2>
        <div class="our-team">
        <?php if( have_rows('tb_team_member') ):  while ( have_rows('tb_team_member') ) : the_row(); ?>
        	<div class="team-member">
                <div class="member-image" style="background-image: url(<?php the_sub_field('image'); ?>)">
                    <div class="member-description"><div class="member-content">
                        <span class="mem-headline"><?php the_sub_field('title'); ?></span><br /> <?php the_sub_field('description'); ?></div></div>
                </div><!--Member Image -->
                <div class="member-detail">
                    <div class="member-name"><?php the_sub_field('name'); ?></div>
                    <div class="member-designation"><?php the_sub_field('designation'); ?></div>
                </div>
                <!-- /.member-detail -->
            </div>
            <!-- /.team-member -->
        <?php endwhile;endif;wp_reset_postdata(); ?>
         <?php //$tb_join_button = get_field('tb_join_button'); ?> 
            <!--<a href="<?php //echo $tb_join_button['url']; ?>" class="team-member"> 
                <div class="last-team-member"> 
                    <div class="member-image" style="background-image: url(<?php //echo get_template_directory_uri(); ?>/assets/images/join-team.jpg)">
                       
                    </div> 
                    <span class="join-team"><?php //echo $tb_join_button['title']; ?></span> 
                </div>  
            </a>-->
            
            
            <div class="clear"></div>
        </div>
        <!-- /.our-team -->
    </div>
        
</section>

<section class="section-mrg">
   <div class="wrapper">
       <h2 class="section-headline"><?php the_field('yrb_headline'); ?></h2>
   </div>
    <div class="about-slider owl-carousel owl-theme" id="about-page-slider"> 
    <?php if( have_rows('yr_block') ):  while ( have_rows('yr_block') ) : the_row(); ?>
    	<div class="item">
           <div class="slider-image" style="background-image: url(<?php the_sub_field('yrb_bg_image'); ?>)">
               <div class="about-slide">
                   <div class="posted-year"><?php the_sub_field('yrb_year'); ?></div>
                   <p class="slide-title"><?php the_sub_field('yrb_content'); ?></p>
               </div>
           </div>
       </div>
       
    <?php endwhile;endif;wp_reset_postdata(); ?>
    <div class="num"></div>
</div>
</section>
<section>
    <div class="map-container">
        <div class="big-wrapper">
            <h2 class="map-heading"><?php the_field('tpb_headline'); ?></h2>
        </div><!--big wrapper-->
        <div class="map-area">
            <!-- <img src="<?php the_field('tpb_bg'); ?>" alt=""> -->
            <!-- <iframe src="<?php echo get_template_directory_uri().'/assets/map/map.html' ?>" width="100%" height="400"></iframe> -->
        </div>
        <div class="clear"></div>
    </div><!--map container-->
</section>
<?php get_footer(); ?>