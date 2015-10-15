<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>


<?php include ('header.php'); ?>
<?php while (have_posts()) : the_post(); ?>


<?php global $post; ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
<div class="blogpostheader" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center !important; background-size:cover!important;">
    <div class="row">

        <div class="col2">
            <div class="categories">
                <?php
                    $categories = get_the_category();
                    $separator = ', ';
                    $output = '';
                      if($categories){
                        foreach($categories as $category) {
                            $output .= '<a class="cat" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name. '</a>'.$separator;
                        }
                echo trim($output, $separator);
                }
                ?>
            </div>
            <div class="panel">
                <h1><?php the_title();?></h1>
                <hr class="tab-none" />
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        <div class="col1">
            <div class="date">
                <ul>
                    <li class="day"><?php the_time('d', '<span class="day">', '</span>'); ?></li>
                    <li class="month"><?php the_time('F', '<span class="month">', '</span>'); ?></li>
                </ul>
            </div>
        </div>

    </div>
</div>    

  <div class="container blogpostcopy">
    <div class="row content">
        <div class="blogpostwrap">
            <div class="blogpostcontent"> 
                <?php the_content(); ?>    
            </div>
        </div>
    </div>
    </div>
    <div class="blog-divider"></div>
     
    <?php endwhile; // end of the loop. ?>

    <?php include ('footer-blog.php'); ?>