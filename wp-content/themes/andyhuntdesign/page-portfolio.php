<?php
/**
 * Template Name: Portfolio main
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<div class="home-wrap">
    <div id="hero-home">
        <h1>MY NAME IS ANDY AND I'M A DIGITAL DESIGNER</h1>
        <?php echo do_shortcode('[smartslider2 slider="7"]');?>
    </div>
    <div id="slider-divider">
        <ul>
            <li>famous faces i've helped</li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_boots.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_samsung.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_olympics.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_princestrust.png"></li>
        </ul>
    </div>

    <div class="more-info">
        <div class="row">
            <div class="toprow">
                <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
                <div class="preheader">
                    <h2>YOU WANT MORE</h2>
                </div>
                <p>I draw pictures, I blog on occassions and I tweet. Have a little look</p>
            </div>
            <div class="botrow">
                <div class="col01"></div>
                <div class="col02"></div>
                <div class="col03"></div>
            </div>
        </div>
    </div>
</div>

<div class="case-study">
    <div class="row">
        <div class="toprow">
            <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
            <div class="preheader">
                <h2>FEATURED CASE STUDY</h2>
            </div>
        </div>
        <div class="feature">
            <div class="col1">
                <?php the_block( 'Case Study Image' ); ?>
            </div>
            <div class="col2">
                <?php the_block( 'Case Study Info' ); ?>
            </div>
        </div>
    </div>
</div>
<div class="case-study-divider"></div>




<?php the_content(); ?>
<?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>