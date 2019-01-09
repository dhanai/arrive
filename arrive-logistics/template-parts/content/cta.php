<?php 
$show_hide_cta = get_field( 'show_hide_cta');
$cta_box_one_title = get_field( 'cta_box_one_title_po');
if(!$cta_box_one_title){$cta_box_one_title = get_field('cta_box_one_title','option');}
$cta_box_one_link = get_field( 'cta_box_one_link_po');
if(!$cta_box_one_link){$cta_box_one_link = get_field('cta_box_one_link','option');}
/*$cta_box_one_image = get_field( 'cta_box_one_image_po');
if(!$cta_box_one_image){$cta_box_one_image = get_field('cta_box_one_image','option');} */
$cta_box_two_title = get_field( 'cta_box_two_title_po');
if(!$cta_box_two_title){$cta_box_two_title = get_field('cta_box_two_title','option');}
$cta_box_two_link = get_field( 'cta_box_two_link_po');
if(!$cta_box_two_link){$cta_box_two_link = get_field('cta_box_two_link','option');}
$cta_box_two_image = get_field( 'cta_box_two_image_po');
if(!$cta_box_two_image){$cta_box_two_image = get_field('cta_box_two_image','option');}
if($show_hide_cta==1){
?>
<div class="footer-cta-container">
    	<a href="<?php echo $cta_box_one_link['url']; ?>" class="footer-cta">
        	 <div class="footer-cta-bg">
                    <div class="cta-content-box">
                        <div class="cta-box-title">
                            <?php echo $cta_box_one_title; ?>
                        </div><!--cta box title-->
                        <span class="button-white"><?php echo $cta_box_one_link['title']; ?></span>
                    </div><!--cta content box-->
                </div><!--footer cta bg-->
        </a><!--footer cta-->
        <a href="<?php echo $cta_box_two_link['url']; ?>" class="footer-cta" >
                <div class="footer-cta-bg">
                    <div class="cta-content-box" style="background-image: url(<?php echo $cta_box_two_image; ?>);">
                        <div class="cta-box-title">
                            <?php echo $cta_box_two_title; ?>
                        </div><!--cta box title-->
                        <span class="button-white"><?php echo $cta_box_two_link['title']; ?></span>
                    </div><!--cta content box-->
                </div><!--footer cta bg-->
        </a><!--footer cta-->
        <div class="clear"></div>
    </div><!--footer cta container-->
<?php } ?>