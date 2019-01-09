<?php
/* Template Name: Careers Page */
 get_header();
?>
<section class="section-mrg">
    <div class="m-wrapper about-intro">
        <div class="technology-intro-text">
            <h2 class="section-headline"><?php the_field( 'cpfb_headline'); ?></h2>
            <?php the_field( 'apsb_text'); ?>
        </div><!--technology intro text-->
        <div class="technology-services">
			<?php if( have_rows('cpcs_images') ):  while ( have_rows('cpcs_images') ) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>" alt="" />
            <?php endwhile;endif;wp_reset_postdata(); ?> 
        </div><!--technology services-->
        <div class="clear"></div>
    </div><!--m wrapper-->
</section>


<section class="section-mrg">
    <div class="big-wrapper">
        <div class="video-area">
            <div class="video-box" style="background-image: url(<?php the_field( 'cpvb_v_img'); ?>);">
                <?php $cpvb_video = get_field('cpvb_video');if($cpvb_video){ ?>
                    <a href="<?php echo $cpvb_video; ?>" class="mfp-iframe"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.png" alt="Play Video Icon"></a>
				<?php } ?>
                
            </div><!--video box-->
            <div class="video-box-content what-our-value right-distance">
                <h2 class="section-headline white"><?php the_field( 'cpvb_headline'); ?></h2>
                <?php the_field( 'cpvb_text'); ?>
            </div><!--video box content-->
        </div><!--video area-->
    </div><!--big wrapper-->
</section>
<section class="section-mrg home career-advantages">
    <div class="our-main-features">
        <h2 class="section-headline"><?php the_field( 'cpfeatb_headline'); ?></h2>
		<?php if( have_rows('features_bullets') ):  while ( have_rows('features_bullets') ) : the_row(); ?>
            <div class="our-feature">
                <div class="our-feature-icon"><img src="<?php the_sub_field('icon'); ?>" alt=""></div>
                <div class="our-feature-title"><?php the_sub_field('title'); ?></div>
            </div>
            <!-- /.our-feature -->
        <?php endwhile;endif;wp_reset_postdata(); ?> 
        <div class="clear"></div>
        <a href="#current-opening" class="button-fill">See Openings <i class="fa fa-angle-down"> </i></a>
    </div>
   <!-- /.our-main-features -->
</section> 

<section class="section-mrg career-slider">
   <div class="wrapper">
       <h2 class="section-headline"><?php the_field( 'cptb_headline'); ?></h2>
   </div>
    <div class="about-slider owl-carousel owl-theme"> 
    <?php $counter = 0; ?>
    	<?php if( have_rows('cp_testi_block') ):  while ( have_rows('cp_testi_block') ) : the_row(); ?>    
      <?php $counter++; ?>
       <div class="item">
           <div class="slider-image" style="background-image: url(<?php the_sub_field('bg_image'); ?>)">
               <div class="about-slide">
                   <p class="slide-title">“<?php $quote =  strip_tags ( get_sub_field('quote',false,false));$ltr_group = substr($quote, 0, 120);echo $ltr_group.'...';?>”</p>
                   <div class="team-member-name"><?php the_sub_field('name'); ?></div>
                   <p class="designation"><?php the_sub_field('designation'); ?></p>
                   
                    <?php if(get_sub_field('college_attended')){ ?><span class="member-des">College Attended: <?php the_sub_field('college_attended'); ?></span> <br /><?php } ?>
                   <?php if(get_sub_field('joined_arrive')){ ?><span class="member-des">Joined Arrive: <?php the_sub_field('joined_arrive'); ?></span><?php } ?>
               </div>
               <a class="read-more-member"> <span class="rm-text">Read More</span> </a>
               <div class="member-description">
                    <div class="member-content">
                        <?php the_sub_field('quote'); ?>
                    </div>
               </div>
           </div>
       </div>
		<?php endwhile;endif;wp_reset_postdata(); ?> 
    </div>
    
    <script>

    var about_total_slides = '<?php echo $counter ;?>';

    </script>


</section>

<section class="current-opening section-mrg">
    <div id="current-opening"></div>
    <div class="s-wrapper">
        <h2 class="section-headline"><?php the_field( 'cpob_headline'); ?></h2>
        <div class="intro-text"><?php the_field( 'cpob_text'); ?></div>
		<div id="filters" class="filters-positions">
        <select id="option-locations" class="option-set clearfix select-marg"  data-filter-group="leuchtenart">
        	<option  value="*" data-filter-value="" class="selected">All Locations</option>
        <?php $taxonomies = get_terms( array(
			'taxonomy' => 'location',
			'hide_empty' => false
		) );
		foreach( $taxonomies as $taxlt ) {
		?>
            <option data-filter-value=".<?php echo $taxlt->slug; ?>" class="opts-loc op-<?php echo $taxlt->slug; ?>"><?php echo $taxlt->name; ?></option>
        <?php } ?>    
        </select>

        <select id="option-departments" class="filter option-set clearfix"  data-filter-group="lichtfarbe">
        	<option value="*" data-filter-value="" class="selected">All Departments</option>
           <?php $taxonomies = get_terms( array(
			'taxonomy' => 'department',
			'hide_empty' => false
		) );
		foreach( $taxonomies as $taxld ) { ?>
            <option data-filter-value=".<?php echo $taxld->slug; ?>" class="opts-dep op-<?php echo $taxld->slug; ?>"><?php echo $taxld->name; ?></option>
        <?php } ?>    
        </select>
        <div class="clear"></div>
        </div>
        
        <h3 class="opening-headline"><span class="filter-count"><?php echo  wp_count_posts( 'position' )->publish; ?></span> opening positions</h3>
        <div id="container" class="opening-postions">
        	
            <?php 
				global $paged;
				query_posts(array(
					'post_type' =>'position',
					'posts_per_page' => -1,
					'paged' => $paged
				)); 
			?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="vecant-position <?php global $post; $termslc = get_the_terms($post->ID, 'location');foreach ( $termslc as $terml ) { echo $terml->slug.' ' ;} $termsdp = get_the_terms($post->ID, 'department');foreach ( $termsdp as $termd ) { echo $termd->slug.' ' ;} ?>">
                <a href="<?php the_permalink()?>">
                <span class="dept-name"><?php the_title()?></span>
                <span class="location-name"><?php  echo strip_tags ( get_the_term_list( get_the_ID(), 'location', "",", " ));?>, <?php  echo strip_tags ( get_the_term_list( get_the_ID(), 'department', ""," " ));?></span>
                <span class="location-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt=""/></span>
                </a>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?> 
        </div>    
    </div>
   <!-- /.s-wrapper -->
</section>

<script>
jQuery(document).ready(function($){
    
    
    var styleElem = document.head.appendChild(document.createElement("style"));
    
    var str1 = ".about-slider .owl-dots:after {content: ";
    var str3 = str1.concat()
    var str2 = "counter(slides-num);}";
    
    //styleElem.innerHTML = '.about-slider .owl-dots:after {content: "' + about_total_slides + '" ;}';
    
 });
</script>
<?php get_footer(); ?>