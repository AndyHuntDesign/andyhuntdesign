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


<div id="fullpage" style="z-index:1000000">
    <div class="portfolio-top-divider"></div>
    <div class="section about-black black-top" id="section0">
        <div class="block-row ">
            <div class="block-image-left">
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
    <div class="section about-black" id="section2" style="margin-top:-330px">
        <div class="intro">
            <h1>There is no fold</h1>
            <p>If CSS3 is not available, animations will fall back to jQuery animate.</p>
        </div>
    </div>
</div>


<?php get_footer(); ?>