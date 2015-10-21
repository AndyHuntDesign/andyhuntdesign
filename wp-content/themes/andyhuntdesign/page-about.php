<?php
/**
 * Template Name: About
 * Description: Displays portfolio posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>

<?php include ('headerabout.php'); ?>

<div id="about-wrap">
    <div class="aboutwrapper">
        <div class="row">
            <h1>MY NAME IS ANDY <span class="mob-none">AND I'M A DIGITAL DESIGNER</span></h1>
            <span class="italic">and</span><span class="sub">&nbsp;here is a little bit about ol' me</span>
        </div>
    </div>
</div>


<div id="fullpage" style="z-index:100000">
    <div class="portfolio-top-divider"></div>
    <div class="section about-black black-top" id="section0">
        <div class="block-row ">
            <div class="block-image-left">
                <img src="/wp-content/themes/andyhuntdesign/images/about-football.png">
            </div>
            <div class="block-copy-right">
                <h2>I wanted to be rock star</h2>
                <p>After my formative years of busting shapes to the likes of A-Ha and T-Pau, I progressed to being a total grunge head. I still play the banjo today. Rock on!</p>
            </div>
        </div>
    </div>
    <div class="section about-black" id="section1" style="margin-top:-330px; padding-bottom:330px">
        <div class="intro">
            <div class="block-row ">
                <div class="block-copy-left">
                    <h2>I wanted to be a footballer</h2>
                    <p>I had the usual childhood dream of being a professional footballer, but the ambition stopped when the dream was to play for Wolves. I aimed for the stars, so I did</p>
                </div>
                <div class="block-image-right">
                    <img src="/wp-content/themes/andyhuntdesign/images/about-football.png">
                </div>
            </div>
        </div>

    </div>
    <div class="section about-black" id="section2" style="margin-top:-330px;">
        <div class="intro">
            <h1>There is no fold</h1>
            <p>If CSS3 is not available, animations will fall back to jQuery animate.</p>
        </div>
    </div>
    <div class="section" id="section3" style="pointer-events:none;">
        <div class="intro">
            <div class="portfolio-item-divider" style="position:absolute;top:0"></div>
        </div>
    </div>

</div>
<div style="position:absolute; float:left; z-index:-100000; height:100%; width:100%; background:#111111; bottom:0"></div>

<footer style="position:absolute; z-index:1; bottom:0;">
     <div class="container">
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("footer-content");
        } ?>
        <ul>
            <li class="facebook"><img src="<?php bloginfo('template_directory'); ?>/images/footer_facebook.png" /></li>
            <li class="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/footer_twitter.png" /></li>
            <li class="linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/footer_linkedin.png" /></li>
            <li class="youtube"><img src="<?php bloginfo('template_directory'); ?>/images/footer_youtube.png" /></li>
            <li class="behance"><img src="<?php bloginfo('template_directory'); ?>/images/footer_behance.png" /></li>
            <li class="dribbble"><img src="<?php bloginfo('template_directory'); ?>/images/footer_dribbble.png" /></li>
            <li class="instagram"><img src="<?php bloginfo('template_directory'); ?>/images/footer_instagram.png" /></li>
        </ul>
        <p>&copy; Copyright 2000-2015</p>
    </div><!-- /container -->
</footer>


<?php get_footer(); ?>