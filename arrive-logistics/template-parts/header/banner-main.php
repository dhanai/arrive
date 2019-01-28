<?php if ( is_page_template( 'template-home.php' ) ) { ?>
<style>
    .banner-1{
        background: linear-gradient(100.61deg, rgba(0, 0, 0, 0.5) 12.05%, rgba(0, 0, 0, 0) 69.95%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_field( 'background_image_two'); ?>) !important;
        background-position: center center !important;
        background-size: cover !important;
        opacity: 0;
    }
    .banner-2{
        background: linear-gradient(100.61deg, rgba(0, 0, 0, 0.5) 12.05%, rgba(0, 0, 0, 0) 69.95%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_field( 'background_image_three'); ?>) !important;
        background-position: center center !important;
        background-size: cover !important;
        opacity: 0;
    }
    .banner-3{
         background: linear-gradient(100.61deg, rgba(0, 0, 0, 0.5) 12.05%, rgba(0, 0, 0, 0) 69.95%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_field( 'background_image_one'); ?>);
         background-size: cover !important;
         z-index: -3;
    }

    .banner-area-img.first-header-bg .banner-1{
        opacity: 1;
    }
    .banner-area-img.first-header-bg .banner-2{
        opacity: 0;
    }

    .banner-area-img.second-header-bg .banner-1{
        opacity: 0;
    }
    .banner-area-img.second-header-bg .banner-2{
        opacity: 1;
    }
</style>
<div class="section-mrg banner-area banner-area-img">
    <div class="big-wrapper">
        <h1 class="banner-headline slide-up-animation-delay"><span class="hover-eff first-hover"><?php 

        $headline_part_one = get_field('headline_part_one');

        if( $headline_part_one ): 
            $headline_part_one_url = $headline_part_one['url'];
            $headline_part_one_title = $headline_part_one['title'];
            $headline_part_one_target = $headline_part_one['target'] ? $headline_part_one['target'] : '_self';
            ?>

               <a class="home-banner-link" href="<?php echo esc_url($headline_part_one_url); ?>" target="<?php echo esc_attr($headline_part_one_target); ?>"><?php echo esc_html($headline_part_one_title); ?></a>
        <?php endif; ?>
      
       </span><br /> <?php the_field( 'headline_part_two'); ?> <span class="hover-eff second-hover">
        <?php 

        $headline_part_three = get_field('headline_part_three');

        if( $headline_part_three ): 
            $headline_part_three_url = $headline_part_three['url'];
            $headline_part_three_title = $headline_part_three['title'];
            $headline_part_three_target = $headline_part_three['target'] ? $headline_part_three['target'] : '_self';
            ?>

               <a class="home-banner-link " href="<?php echo esc_url($headline_part_three_url); ?>" target="<?php echo esc_attr($headline_part_three_target); ?>"><?php echo esc_html($headline_part_three_title); ?></a>
        <?php endif; ?>
        
        </span></h1>
        <?php $hp_masthead_button = get_field('hp_masthead_button'); ?>
        <a href="#homepage-first-scroll-section" class="banner-bottom-link slide-up-animation-delay" ><?php echo $hp_masthead_button; ?><i class="fa fa-angle-down"> </i></a>
    </div>
    <!-- /.big-wrapper -->
    <div class="masthead-banner banner-1"></div>
    <div class="masthead-banner banner-2"></div>
    <div class="masthead-banner banner-3"></div>
</div>
<!-- /.banner-area -->
<?php } elseif (is_front_page() && is_home()) { ?>
<!--<h5 class="sub-heading"><?php //bloginfo( 'name' ); ?></h5>
<h1 class="heading"><?php //bloginfo('description'); ?></h1>-->
<?php } elseif (is_search()||is_archive()||is_404()||is_page_template( 'template-contact.php' )) { ?>

<?php } elseif (is_page_template( 'template-careers.php' )) { ?>
<div class="banner-area section-mrg">
    <div class="xl-wrapper">
        <div class="career-banner-content banner-content ">
            <h1 class="heading"><?php the_field( 'cp_mh_headline'); ?></h1>
            <p class=""><?php the_field( 'cp_mh_sub_headline'); ?></p>
            <a href="#current-opening" class="button-fill">Jump to Openings <i class="fa fa-angle-down"> </i></a>
            <?php $cp_mh_button = get_field('cp_mh_button'); ?>
        	<?php if($cp_mh_button['url']){ ?><a href="<?php echo $cp_mh_button['url']; ?>" class="button mfp-iframe" <?php if($cp_mh_button['target']){ ?>target="<?php echo $cp_mh_button['target']; ?>"<?php } ?>><?php echo $cp_mh_button['title']; ?> <i class="fa fa-play-circle"></i></a><?php } ?>
          <div class="clear"></div>
        </div>
        <!-- /.carer-banner-contet -->
        
        <div class="career-banner-images">
        	<?php $cntcp=0; if( have_rows('cp_mh_image') ):  while ( have_rows('cp_mh_image') ) : the_row();$cntcp++; ?>
                <div class="career-banner-img career-img<?php echo $cntcp; ?>" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
            <?php endwhile;endif;wp_reset_postdata(); ?> 
        </div>
        <!-- /.career-banner-images -->
    </div>
    <!-- /.big-wrapper -->
</div>
<!-- /.banner-area -->

<?php } elseif (is_page_template( 'template-technology.php' )||is_page_template( 'template-shipper.php' )||is_page_template('template-about.php')||is_page_template('template-carriers.php')) { ?>
<section>
    <div class="banner-area banner-area-img" style="background: linear-gradient(100.61deg, rgba(0, 0, 0, 0.5) 12.05%, rgba(0, 0, 0, 0) 69.95%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_field( 'tp_mh_bg'); ?>);">
        <div class="big-wrapper">
            <div class="banner-content">
                <h1 class="heading white banner-heading slide-up-animation-delay"><?php the_field( 'tp_mh_headline'); ?></h1>
                <p class="white slide-up-animation-delay"><?php the_field( 'tp_mh_text'); ?></p>
                
                
            </div><!--banner content-->
            <div class="banner-content-buttons slide-up-animation-delay">
            	<?php if( have_rows('tp_mhb_button') ):  while ( have_rows('tp_mhb_button') ) : the_row(); ?>
                <?php $tp_mh_button = get_sub_field('tp_mh_button'); ?>
        <?php if($tp_mh_button['url']){ ?><a href="<?php echo $tp_mh_button['url']; ?>" class="button-fill" <?php if($tp_mh_button['target']){ ?>target="<?php echo $tp_mh_button['target']; ?>"<?php } ?>><?php echo $tp_mh_button['title']; ?></a><?php } ?>
            <?php endwhile;endif;wp_reset_postdata(); ?> 
            </div>
        </div>
        <!-- /.big-wrapper -->
    </div>
    <!-- /.banner-area -->
</section>
<?php } elseif (is_page_template( 'template-blog.php' )) { ?>
<?php 
$pmh_headline = get_field('pmh_headline');
if($pmh_headline==''){ $pmh_headline = get_the_title();}
$intro_text = get_field('intro_text');
$pmh_image = get_field('pmh_image');
if($pmh_image==''){$pmh_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image')); }
 ?>
<div class="banner-area">
    <div class="wrapper">
        <h1 class="heading slide-up-animation-delay"><?php echo $pmh_headline; ?></h1>
       <?php if($intro_text){ ?> <div class="intro-text slide-up-animation-delay">
        	<?php echo $intro_text; ?>
        </div><!--intro text--><?php } ?>
        <?php if($pmh_image){ ?>
         <div class="m-wrapper resource-featured-img slide-up-animation-delay">
            <img src="<?php echo $pmh_image; ?>" alt=""/>
        </div>
        <?php } ?>
    </div>
</div>       
<?php } elseif (is_singular('position')) { ?> 
<?php 
$op_headline = get_field('op_headline');
if($op_headline==''){ $op_headline = get_the_title();}
$intro_text = get_field('intro_text');
global $post;
?>
<div class="banner-area" style="background-color: #2aaae2;">
    <div class="s-wrapper">
        <div class="banner-content">
                <h1 class="heading white banner-heading slide-up-animation-delay"><?php echo $op_headline; ?></h1>
                <h3 class="slide-up-animation-delay"><?php  echo strip_tags ( get_the_term_list( get_the_ID(), 'location', "",", " ));
?></h3>
            </div><!--banner content-->
    </div>
    <!-- /.big-wrapper -->
</div>
<!-- /.banner-area -->
<section class="">
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
<?php } elseif (is_single()) { ?>
<?php $post_bnr_bg = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image'));  ?>
  <?php 
$pmh_headline = get_field('pmh_headline');
if($pmh_headline==''){ $pmh_headline = get_the_title();}
$intro_text = get_field('intro_text');
$pmh_image = get_field('pmh_image');
if($pmh_image==''){$pmh_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image')); }
 ?>
<section class="banner-area">
<div class="s-wrapper">
    	 <h1 class="heading slide-up-animation-delay"><?php echo $pmh_headline; ?></h1>
         <div class="resource-meta slide-up-animation-delay">
            <ul>
                <?php $categories = get_the_terms($post->ID, 'category');foreach( $categories as $category ) {?><li><?php echo ' '.$category->slug; ?></li><?php } ?>
                <li><?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
        <!-- /.resource-meta -->
       <?php if($intro_text){ ?> <div class="intro-text slide-up-animation-delay">
        	<?php echo $intro_text; ?>
        </div><!--intro text--><?php } ?>
        
    </div><!--s wrapper-->
    <?php if($pmh_image){ ?>
         <div class="m-wrapper resource-featured-img">
           <!-- <div class="single-post-image" style="background: url(<?php echo $pmh_image; ?>); background-size: cover; "></div> -->
           <img src="<?php echo $pmh_image; ?>" alt=""/>
           <!-- /.single-post-image -->
            <img src="" alt=""/>
        </div>
        <?php } ?>
</section>
<?php } else {?>
<?php $post_bnr_bg = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image'));  ?>
  <?php 
$pmh_headline = get_field('pmh_headline');
if($pmh_headline==''){ $pmh_headline = get_the_title();}
$intro_text = get_field('intro_text');
$pmh_image = get_field('pmh_image');
if($pmh_image==''){$pmh_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image')); }
 ?>
<section class="banner-area">
<div class="s-wrapper">
    	 <h1 class="heading slide-up-animation-delay"><?php echo $pmh_headline; ?></h1>
       <?php if($intro_text){ ?> <div class="intro-text slide-up-animation-delay">
        	<?php echo $intro_text; ?>
        </div><!--intro text--><?php } ?>
        <?php if($pmh_image){ ?>
         <div class="m-wrapper resource-featured-img">
            <img src="<?php echo $pmh_image; ?>" alt=""/>
        </div>
        <?php } ?>
    </div><!--s wrapper-->
</section>
<?php } ?>
