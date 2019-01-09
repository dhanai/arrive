<?php if(is_single()){ ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
    <div class="clear"></div>
    <div style="display:none !important">
    <?php comments_template( $file, $separate_comments ); ?>
      <?php comment_form(); ?>
</div>
</div>
<?php }else{ ?>
<div class="search-results-area">
	<?php if (have_posts()) :   while (have_posts()) : the_post(); ?>
     <div class="search-result">
         <h2 class="section-headline"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
         <p><?php echo get_excerpt(90) ?></p>
     </div>
     <?php endwhile; endif; ?>
</div>
<!-- /.search-results -->
<?php } ?>