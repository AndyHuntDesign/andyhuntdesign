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
<div class="blogpostheader background parallax" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center !important; background-size:cover!important;">
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



<div class="related">
    <?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 3, // Number of related posts that will be shown.
    'caller_get_posts'=>1
    );
    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<div id="related_posts"><h4>Related Posts</h4><p>Have a butchers</p><ul>';
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>
    <li><div class="relatedthumb" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center!important; background-size:cover!important;"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"></a></div>
    <div class="relatedcontent">
    <span class="time"><?php the_time('M j, Y') ?></span>
    <h5><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
    <hr>
    <a class="more" href="<? the_permalink()?>">Read more</a>
    </div>
    </li>
    <?
    }
    echo '</ul></div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>
</div>

<div class="comment-box">
    <div class="row">
        <?php comments_template( '', true ); ?>
    </div>
</div>


<div class="share">
    <div class="sharewrap">
        <div class="share-twitter">
            <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=twitter&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>" title="Share on Twitter" rel="nofollow" target="_blank"><img src="/wp-content/themes/andyhuntdesign/images/share_twitter.png"></a>
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


<div class="blog-divider"></div>
<?php endwhile; // end of the loop. ?>




<?php include ('footer-blog.php'); ?>







