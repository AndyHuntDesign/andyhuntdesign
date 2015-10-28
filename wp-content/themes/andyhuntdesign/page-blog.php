<?php
/**
 * Template Name: Blog
 * Description: Displays portfolio posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>

<?php include ('header.php'); ?>

<div id="portfolio-wrap">
    

     
    <div class="portfoliowrapper">
        <div class="row">
            <h1>MY NAME IS ANDY <span class="mob-none">AND I'M A DIGITAL DESIGNER</span></h1>
            <span class="italic">and</span><span class="sub">&nbsp;here is my work</span>
        </div>
        <div class="portfolio-top-divider"></div>
        <div class="portfoliocontent">
            <?php  $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4));  ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php global $post; ?>
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>
            <ul> 
                <li>
                    <a href="<?php the_permalink() ?>">
                        <div class="image">
                            <div class="thumb wow fadeIn" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center!important; background-size:cover!important;"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="contents">
                <div class="pad">
                    <ul class="wow fadeIn">
                        <li><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></li>
                        <li class="orange"><?php
                            $categories = get_the_category();
                            $separator = '   |   ';
                            $output = '';
                            if($categories){
                                foreach($categories as $category) {
                                    $output .= '<a class="cat" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name. '</a>'.$separator;
                                    }
                                    echo trim($output, $separator);
                            }
                            ?>
                        </li>
                        <li><?php the_excerpt(); ?></li>
                        <li><a class="project" href="<?php the_permalink() ?>">View project</a>&nbsp;<img src="<?php echo get_template_directory_uri();?>/images/arrowlink.png" width="12" height="9"></li>
                    </ul>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</div>
<div class="portfolio-divider"></div>
<?php get_footer(); ?>