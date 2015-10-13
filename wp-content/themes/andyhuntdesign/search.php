<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container search-resuts">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            } ?>
        </div>
    </div><!--/.row -->

	<div class="row content">
        <div class="span8">
            <?php if (have_posts()) : ?>
                 <header class="post-title">
                     <h1><?php printf( __('Search Results for: %s', 'bootstrapwp'),'<span>' . get_search_query() . '</span>'); ?></h1>
                 </header>

    		  <?php while (have_posts()) : the_post(); ?>

                <div <?php post_class(); ?>>
                    <div style="max-width:1180px; margin:0 auto; padding:20px 10px">




                    <?php 
                       $post_type = get_post_type($post);
                       switch ($post_type) {
                           case "post":
                               echo "<img src='/wp-content/themes/andyhuntdesign/images/icon_blog.png'/>";
                               break;
                           case "page":
                               echo "<img src='/wp-content/themes/andyhuntdesign/images/icon_page.png'/>";
                               break;
                           case "portfolio":
                               echo "<img src='/wp-content/themes/andyhuntdesign/images/icon_portfolio.png'/>";
                               break;
                       }
                    ?>


                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="span6">
                        <?php else : ?>
                            <div class="span8 search-entry-result">
                        <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </div>
                    </div><!-- /.row -->
                </DIV>

                    <hr/>
                </div><!-- /.post_class -->
             <?php endwhile; ?>

            <?php else : ?>
            	<div class="row content">
                    <div class="span8 search-entry-result">
                        <header class="post-title">
                            <h1><?php _e('No Results Found', 'bootstrapwp'); ?></h1>
                        </header>
                        <p class="lead">
                            <?php _e(
                                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.',
                                'bootstrapwp'); ?>
                        </p>
                        <div class="well">
                            <?php get_search_form(); ?>
                        </div><!--/.well -->
             <?php endif;?>

             <?php bootstrapwp_content_nav('nav-below'); ?>
        </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>