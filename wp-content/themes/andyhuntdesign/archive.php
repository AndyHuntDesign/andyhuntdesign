<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

    <?php if (have_posts()) :
    // Queue the first post.
    the_post(); ?>

    <div class="container archive">
        
        <div class="row content">
            <div class="span8">

                <header class="page-title">
                    <h1><?php
                        if (is_day()) {
                            printf(__('Daily Archives: %s', 'bootstrapwp'), '<span>' . get_the_date() . '</span>');
                        } elseif (is_month()) {
                            printf(
                                __('Monthly Archives: %s', 'bootstrapwp'),
                                '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'bootstrapwp')) . '</span>'
                            );
                        } elseif (is_year()) {
                            printf(
                                __('Yearly Archives: %s', 'bootstrapwp'),
                                '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'bootstrapwp')) . '</span>'
                            );
                        } elseif (is_tag()) {
                            printf(__('Tag Archives: %s', 'bootstrapwp'), '<span>' . single_tag_title('', false) . '</span>');
                            // Show an optional tag description
                            $tag_description = tag_description();
                            if ($tag_description) {
                                echo apply_filters(
                                    'tag_archive_meta',
                                    '<div class="tag-archive-meta">' . $tag_description . '</div>'
                                );
                            }
                        } elseif (is_category()) {
                            printf(
                                __('CATEGORY: %s', 'bootstrapwp'),
                                '<span>' . single_cat_title('', false) . '</span>'
                            );
                            // Show an optional category description
                            $category_description = category_description();
                            if ($category_description) {
                                echo apply_filters(
                                    'category_archive_meta',
                                    '<div class="category-archive-meta">' . $category_description . '</div>'
                                );
                            }
                        } else {
                            _e('Blog Archives', 'bootstrapwp');
                        }
                        ?></h1>
                </header>
                <div class="portfolio-top-divider"></div>
                <?php
                // Rewind the loop back
                    rewind_posts();
                ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?>>
                    <div class="search-result-group">  
                         <?php
foreach((get_the_category()) as $category) {
    echo '<img src="/wp-content/themes/andyhuntdesign/images/categories/' . $category->cat_name . '.png" alt="' . $category->cat_name . '" />';
}
?> 
                        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                        

                        <div class="row">
                            <?php // Post thumbnail conditional display.
                            if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                                <div class="span2">
                                    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                        <?php echo bootstrapwp_autoset_featured_img(); ?>
                                    </a>
                                </div>
                                <div class="span6">
                            <?php else : ?>
                                <div class="span8">
                            <?php endif; ?>
                                    <?php the_excerpt(); ?>
                                </div>
                        </div><!-- /.row -->
                         <div class="meta-row"></div>
                        <p class="meta"><?php echo bootstrapwp_posted_on();?></p>

                        
                    </div>
                    <hr/>
                    </div><!-- /.post_class -->
                <?php endwhile; ?>

                <?php bootstrapwp_content_nav('nav-below');?>

            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<div class="portfolio-divider"></div>

    <?php get_footer(); ?>