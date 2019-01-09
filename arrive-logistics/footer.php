<footer>
    <?php get_template_part( 'template-parts/content/cta' ); ?>
    <div class="footer-bottom">
    	<div class="footer-left-area">
        	<?php wp_nav_menu( array( 'theme_location' => 'footer-left','fallback_cb'=> 'fallbackmenu1' ) ); ?>
            <span class="copy-right d-hide"><?php the_field( 'footer_text','option'); ?></span>
        </div>
        <div class="footer-right">
        	<?php wp_nav_menu( array( 'theme_location' => 'footer-right','fallback_cb'=> 'fallbackmenu1' ) ); ?>
        </div><!--footer right-->
        <div class="footer-socials">
        	<a href="<?php the_field( 'instagram_profile_url','option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
        	<a href="<?php the_field( 'facebook_profile_url','option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>            
            <a href="<?php the_field( 'twitter_profile_url','option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="<?php the_field( 'linkedin_profile_url','option'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
            <span class="copy-right mobile-show"><?php the_field( 'footer_text','option'); ?></span>
        </div><!--footer socials-->
        <div class="clear"></div>
    </div><!--footer bottom-->
</footer>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main-menu.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-theme.css" />
<?php wp_footer(); ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php the_field( 'locality','option'); ?> ",
    "addressRegion": "<?php the_field( 'region','option'); ?> ",
    "postalCode": "<?php the_field( 'postal_code','option'); ?> ",
    "streetAddress": "<?php the_field( 'street_address','option'); ?> "
  },
  "hasMap": "<?php the_field( 'map_short_link','option'); ?>",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "<?php the_field( 'latitude','option'); ?> ",
    "longitude": "<?php the_field( 'longitude','option'); ?> "
  },
  "name": "<?php the_field( 'business_name','option'); ?>",
  "openingHours": [
  <?php the_field( 'opening_hours','option'); ?> 
  ],
  "telephone": "<?php the_field( 'telephone','option'); ?> ",
  "email": "<?php the_field( 'business_email','option'); ?> ",
  "url": "<?php echo esc_url( home_url() ) ; ?>",
  "image": "<?php the_field( 'business_image_logo','option'); ?> ",
  "legalName": "<?php the_field( 'business_legal_name','option'); ?> ",
  "priceRange":"<?php the_field( 'price_range','option'); ?>"
}
</script>

<!--[if IE]>
<style>
    .video-box a {
         top: none;
         bottom: none;
    }
</style>
<![endif]-->
</body>
</html>