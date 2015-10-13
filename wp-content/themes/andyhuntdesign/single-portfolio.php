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
<div class="portfolioheader">
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

<div class="container portfoliocopy black slider-mob">
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

<div class="container portfoliocopy screens slider-mob">
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


<div class="portfolio-item-divider"></div>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>

            <?php bootstrapwp_content_nav('nav-below'); ?>

    <?php get_footer(); ?>