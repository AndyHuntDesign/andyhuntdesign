<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container search-resuts">

	<div class="row content">
        <div class="span8">
            <?php if (have_posts()) : ?>
                 <header class="post-title">
                     <h1><?php printf( __('SEARCH RESULTS FOR: %s', 'bootstrapwp'),'<span>' . get_search_query() . '</span>'); ?></h1>
                 </header>
                 <div class="portfolio-top-divider"></div>

    		      <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?>>
                    <div class="search-result-group">
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
                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="span6">
                                <?php else : ?>
                                <div class="span8 search-entry-result">
                                    <?php endif; ?>
                                    <?php the_excerpt(); ?>
                                    <div class="meta-row"></div>
                                    <p class="meta">
                                        <?php echo bootstrapwp_posted_on();?>
                                    </p>
                                </div>
                            </div><!-- /.row -->
                    </div>
                    <hr/>
                </div><!-- /.post_class -->
            <?php endwhile; ?>

            <?php else : ?>
            	<div class="row content">
                    <div class="span8 search-entry-result">
                        <header class="post-title">
                            <h1><?php _e('I TRIED, BUT FOUND NOTHING', 'bootstrapwp'); ?></h1>
                        </header>
                        <div class="portfolio-top-divider"></div>
                        <div class="no-results">
                            <p class="lead">
                                <?php _e(
                                    'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.',
                                    'bootstrapwp'); ?>
                            </p>
                        </div>
             <?php endif;?>
             <?php bootstrapwp_content_nav('nav-below'); ?>
            </div>
        </div>

    


<div class="portfolio-divider"></div>
    <?php get_footer(); ?>