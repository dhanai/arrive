<?php get_header(); ?>
<div class="page-wrapper">
    <div class="s-wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content/content', 'archive' ); ?> 
        <?php edit_post_link(__('Edit','arrive-logistics'),'','.'); ?>
        <?php //comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php 
    $reference_title = get_field('reference_title');
    $reference_url = get_field('reference_url');
    if($reference_url&&$reference_title){ ?>
            <div class="orignal-article">
                <strong><?php echo $reference_title; ?></strong> <br />
                <a href="<?php echo $reference_url; ?>"><?php echo $reference_url; ?> </a>
            </div>
    <?php } ?>        
            <div class="footer-socials post-share">
                <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="twi-share"><i class="fab fa-twitter"></i></a>
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fb-share"><i class="fab fa-facebook-f"></i></a>   
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="li-share"><i class="fab fa-linkedin"></i></a>
            </div><!--footer socials-->
            <div class="clear"></div>
             <?php  $next_post = get_next_post();
    if (!empty( $next_post )): ?>
            <div class="read-next-post">
                <h2 class="section-headline">Read Next</h2>
                <div class="home-intro">
                
             <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/read-next-arrow.png" alt="" class="read-next-arrow"></a></div>
            </div>
            <!-- /.read-next-post -->
            <?php endif; ?>
      <div style="display:none"><?php the_posts_pagination() ?> </div>
    </div>
</div>    
<?php get_footer(); ?>