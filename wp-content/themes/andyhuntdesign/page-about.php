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
        <div class="about-top-divider"></div>
    </div>
</div>

<!--
<div class="about-black black black-top">
    <div class="block-row ">
        <div class="block-image-left">
        </div>
        <div class="block-copy-right">
            <h2>I wanted to be rock star</h2>
            <p>After my formative years of busting shapes to the likes of A-Ha and T-Pau, I progressed to being a total grunge head. I still play the banjo today. Rock on!</p>
        </div>
    </div>
</div>

<div class="about-blue">
    <div class="block-row">
        <div class="block-copy-left">
            <h2>I wanted to be a footballer</h2>
            <p>I had the usual childhood dream of being a professional footballer, but the ambition stopped when the dream was to play for Wolves. I aimed for the stars, so I did</p>
        </div>
        <div class="block-image-right"></div>
    </div>
</div>

<div class="about-black">
    <div class="block-image-left"></div>
    <div class="block-copy-right"></div>
</div>
-->




<div id="fullpage">
    <div class="section about-black black-top" id="section0">
        <h1>fullPage.js</h1>
        <p>CSS3</p>
        <img src="imgs/fullPage.png" alt="fullPage" />
    </div>
    <div class="section about-blue" id="section1">
        <div class="intro">
            <h1>Speed on mobile</h1>
            <p>
          If CSS3 transforms are supported (e.g. on mobile devices) they will be used for animations, usually a good
          choice if the animation on mobile devices is slow.
            </p>
        </div>
    </div>
    <div class="section about-black" id="section2">
        <div class="intro">
            <h1>No CSS3? No problem!</h1>
            <p>If CSS3 is not available, animations will fall back to jQuery animate.</p>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="intro">
            <h1>No CSS3? No problem!</h1>
            <p>If CSS3 is not available, animations will fall back to jQuery animate.</p>
        </div>
        <div class="portfolio-divider"></div>

    </div>
</div>


<?php get_footer(); ?>