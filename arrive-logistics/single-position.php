<?php get_header(); ?>
<?php $op_intro = get_field('op_intro'); ?>
<section class="page-wrapper">
   <div class="s-wrapper">
		<?php if($op_intro){ ?>
        <p class="career-intro"><?php echo $op_intro; ?></p>
    	<?php } ?>
        <div class="content-block">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'template-parts/content/content', 'archive' ); ?> 
            <?php endwhile; endif; ?>
            <?php $opa_button = get_field('opa_button'); ?>
        	<?php if($opa_button['url']){ ?><a href="<?php echo $opa_button['url']; ?>" class="button-fill" <?php if($opa_button['target']){ ?>target="<?php echo $opa_button['target']; ?>"<?php } ?>><?php echo $opa_button['title']; ?></a><?php } ?>
        </div>
        <!-- /.content-block -->
    </div>
   <!-- /.s-wrapper -->
</section>

<?php get_footer(); ?>