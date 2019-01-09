<?php
/* Template Name: Blog Page */
 get_header();
?>

<section>
    <div class="page-wrapper">
        <div class="wrapper">
            <div id="filters" class="button-group">
                <ul>
                    <li><a class="flt-button is-checked" data-filter="">All posts</a></li>
                     <?php $categories = get_categories(array( 'hide_empty' => 0,'order' => 'DESC' ));foreach( $categories as $category ) { ?>
      <li><a class="flt-button" data-filter=".<?php echo $category->slug ?>"><?php echo $category->name ?></a></li>
      <?php } ?>
                </ul>         
            </div>
            <select id="filter-select">
              <option value="*" selected="selected">All posts</option> 
               <?php $categories = get_categories(array( 'hide_empty' => 0,'order' => 'DESC' ));foreach( $categories as $category ) { ?>
      <option value=".<?php echo $category->slug ?>"><?php echo $category->name ?></option>
      <?php } ?> 
            </select>

    <div id="container" class="isotope grid">
    
	<?php 
        global $paged;
        query_posts(array(
            'post_type' =>'post',
            'posts_per_page' => -1,
            'paged' => $paged,
            'ignore_sticky_posts' => 1
        )); 
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();   ?>
      <div class="element-item item<?php $categories = get_the_terms($post->ID, 'category');foreach( $categories as $category ) { echo ' '.$category->slug; }?>">
            <div class="blog-post-outer">
                <div class="blog-post">
                    <a href="<?php the_permalink() ?>">
                    <?php $post_bg_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full-size-image')); ?>
                        <div class="post-image" style="background: url(<?php echo $post_bg_img ; ?>) no-repeat; background-size: cover;"></div><!--post image-->
                        <div class="post-content">
                            <div class="post-cat">
                                <?php foreach( $categories as $categorys ) { ?><?php echo $categorys->name.' ' ?><?php } ?>
                            </div><!--post cat-->
                            <h4><?php the_title() ?></h4>
                            <span class="post-date"><?php the_time('M y'); ?></span>
                        </div><!--post content-->
                    </a>
                </div>
            </div>
        </div>
	<?php endwhile; endif; wp_reset_query(); ?> 
    </div>
        </div><!--wrapper-->
    </div><!--page wrapper-->
</section>
<?php get_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($) {

  var $container = $('#container');
	transitionDuration: '0.8s',
  // only opacity for reveal/hide transition
  $container.isotope({})

  $('#filter-select').change( function() {
    $container.isotope({
      filter: this.value
    });
  });
});



jQuery(document).ready(function($) {
    
  var $container = $('#container'),
      filters = {};

  $container.isotope({
    itemSelector : '.vecant-position'
  });

  // filter buttons
  $('select').change(function(){
    var $this = $(this);
    
    // store filter value in object
    // i.e. filters.color = 'red'
    var group = $this.attr('data-filter-group');
    
    filters[ group ] = $this.find(':selected').attr('data-filter-value');
    // console.log( $this.find(':selected') )
    // convert object into array
    var isoFilters = [];
    for ( var prop in filters ) {
      isoFilters.push( filters[ prop ] )
    }
    console.log(filters);
    var selector = isoFilters.join('');
    $container.isotope({ filter: selector });
    return false;
  });
      

});

</script>