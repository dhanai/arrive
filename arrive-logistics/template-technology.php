<?php
/* Template Name: Technology Page */
 get_header();
?>
<div class="page-wrapper">
	<section>
       
       <div class="technology-page-accordion">
        <div class="m-wrapper">
            <div class="technology-intro">
                <div class="technology-intro-text">
                    <h2 class="section-headline"><?php the_field('tpsb_default_headline'); ?></h2>
                    <p><?php the_field('tpsb_default_content'); ?></p>
                </div>
            </div><!--technology intro text-->
        </div>
            <div class="ms-wrapper">
                <div class="technology-accordion">
                    <div class="accordion">
                    <?php $cnt=0; if( have_rows('tp_service_bullet') ):  while ( have_rows('tp_service_bullet') ) : the_row(); $cnt++; ?>
                    
            			<dt><a href="" style="background-image:url(<?php  the_sub_field('bullet_icon'); ?>);"><?php the_sub_field('section_headline'); ?></a></dt>
            			<div class="accordion-content">
            				<p><?php the_sub_field('section_text'); ?></p>
                        </div>
                        
                      <?php endwhile;endif;wp_reset_postdata(); ?> 
                        
        			</div><!--accordion-->
                </div><!--tachnology accordion-->
        </div><!--ms wrapper-->
    </div>
        <!-- /.technology-page-accordion -->
        
      
    
    <div class="our-feature-area">
                	<div class="wrapper">
                       <div class="our-main-features feature-hoverd-container">
                       <?php $cnt=0; if( have_rows('tp_service_bullet') ):  while ( have_rows('tp_service_bullet') ) : the_row(); $cnt++; ?>
                            <div class="our-feature">
                                <div class="our-feature-icon"><img src="<?php the_sub_field('bullet_icon'); ?>" alt=""></div>
                                <div class="our-feature-title"><?php the_sub_field('bullet_title'); ?></div>
                                <div class="feature-info">Info</div>
                                <div class="feature-hover-content">
                                	<div class="our-feature-icon"><img src="<?php the_sub_field('bullet_icon'); ?>" alt=""></div>
                                    <div class="our-feature-title"><?php the_sub_field('bullet_title'); ?></div>
                                    <p><?php the_sub_field('section_text'); ?></p>
                                </div><!--feature-hover-contet-->
                            </div><!-- /.our-feature -->
                            <?php endwhile;endif;wp_reset_postdata(); ?>    
                            <div class="clear"></div>
                        </div>
           <!-- /.our-main-features -->
           </div><!--wrapper-->
        </div><!-- /.our-feature area -->
    
    
        
        
    </section>
    <section class="section-mrg">
        <div class="big-wrapper">
            <div class="video-area">
                <div class="video-box" style="background-image: url(
                
                 <?php 

                $image = get_field('tp_aub_image');

                if( !empty($image) ): 

                    // vars
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                    $caption = $image['caption'];

                    // thumbnail
                    $size = 'techpage-thumbnail';
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
              
              ?>
               
               <?php echo $thumb; ?>
                
               
              
                
                <?php endif; ?>
                
                
                );"><?php $tp_aub_video = get_field('tp_aub_video');if($tp_aub_video){ ?>
                    <a href="<?php echo $tp_aub_video; ?>" class="mfp-iframe"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.png" alt="Play Video Icon"></a>
				<?php } ?>
                </div><!--video box-->
                <div class="video-box-content">
                    <h2 class="section-headline"><?php the_field('tp_aub_headline'); ?></h2>
                    <?php the_field('tp_aub_text'); ?>
                </div><!--video box content-->
            </div><!--video area-->
    	</div><!--big wrapper-->
    </section>
    <section>    
    	<div class="big-wrapper"> 
            <div class="quote-area">
               <div class="quote-image mobile-show" style="background-image: url(<?php the_field('tp_qb_image'); ?>);"></div><!--quote image-->
                <blockquote style="background-color: transparent;">
                    <h6><?php the_field('tp_qb_headline'); ?></h6>
                    <p> <?php the_field('tp_qb_quote'); ?> </p>
                    <cite> <?php the_field('tp_qb_cite'); ?></cite>
                </blockquote>
                <div class="quote-image d-hide" style="background-image: url(
                    
                         <?php 

                $image = get_field('tp_qb_image');

                if( !empty($image) ): 

                    // vars
                    $url = $image['url'];
                    $title = $image['title'];
                    $alt = $image['alt'];
                    $caption = $image['caption'];

                    // thumbnail
                    $size = 'techpage-thumbnail';
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
              
              ?>
               
               <?php echo $thumb; ?>
                
               
              
                
                <?php endif; ?>
                    
                        
                    
                
                    
                );"></div><!--quote image-->
                <div class="clear"></div>
            </div><!--quote area-->
    	</div><!--big wrapper-->
    </section>
</div><!--page wrapper-->
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
