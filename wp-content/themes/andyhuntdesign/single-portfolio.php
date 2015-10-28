<?php
/**
 * Portfolio Post Template
 * Description: Portfolio template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>

<?php include ('header.php'); ?>
<?php while (have_posts()) : the_post(); ?>

<?php global $post; ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
<div class="portfolioheader" data-img-width="1600" data-img-height="1064" data-diff="100">
    <div class="potfolioitemintro"> 
        <h2><?php echo get_the_title( $ID ); ?><h2>
        <ul>
            <li class="portfolioitemcat">
                <?php
                    $categories = get_the_category();
                    $separator = '   |   ';
                    $output = '';
                        if($categories){
                            foreach($categories as $category) {
                                $output .= '<a class="cat">'.$category->cat_name. '</a>'.$separator;
                            }
                            echo trim($output, $separator);
                            }
                ?> 
            </li>
        </ul>
    </div>
    <?php the_block( 'Hero Image' ); ?>
</div> 






<div class="portfoliooverview">
    <div class="portfolioscreen">
        <?php the_block( 'Screen' ); ?>
    </div> 
    <div class="row">
        <?php
        $categories = get_the_category();
        $separator = '   |   ';
        $output = '';
        if($categories){
        foreach($categories as $category) {
            $output .= '<a class="cat" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name. '</a>'.$separator;
            }
            echo trim($output, $separator);
        }
        ?>
       <?php the_block( 'Overview' ); ?>
   </div>
</div>  

<div class="container portfoliocopy black slider-mob pre-sliders">
    <div class="row content">
        <div class="portfoliocontent">     
            <?php the_content(); ?>
            <div class="row">
                <?php the_block( 'Sliders' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container portfoliocopy screens slider-mob">
    <div class="row content">
        <div class="portfoliocontent">     
            <div class="row">
                <div class="toprow">
                    <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
                    <div class="preheader">
                        <h2>DESIGNS</h2>
                    </div>
                </div>
                <?php the_block( 'Screens' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container portfoliocopy black slider-mob-view">
    <div class="row content">
        <div class="portfoliocontent">     
            <div class="row">
                <div class="toprow">
                    <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
                    <div class="preheader">
                        <h2>DESIGNS</h2>
                    </div>
                </div>
                <?php the_block( 'Mobile View Screens' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container portfoliotestimonial" style="background:#ffffff;">
    <?php the_block( 'Testimonials' ); ?>
</div>

<div class="container portfoliocopy screens slider-mob responsive">
    <div class="row content">
        <div class="portfoliocontent">     
            <div class="row">
                <div class="toprow">
                    <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
                    <div class="preheader">
                        <h2>RESPONSIVE</h2>
                    </div>
                </div>
                <?php the_block( 'Responsive' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="share">
    <div class="sharewrap">
        <div class="share-twitter">
            <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=andyhuntdesign&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>" title="Share on Twitter" rel="nofollow" target="_blank"><img src="/wp-content/themes/andyhuntdesign/images/share_twitter.png"></a>
        </div>
        <div class="share-facebook">
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="/wp-content/themes/andyhuntdesign/images/share_facebook.png"></a>
        </div>
    </div>
    <div class="sharecopy">
        <h4>Do you like this?</h4>
        <p>Share the love</p>
    </div>
</div>

<div class="portfolio-item-divider"></div>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>

            <?php bootstrapwp_content_nav('nav-below'); ?>

    <?php include ('footer-blog.php'); ?>