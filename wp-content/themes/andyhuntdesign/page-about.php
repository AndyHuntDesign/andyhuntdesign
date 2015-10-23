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

        <div class="section about-black black-top" id="section2" style="margin-top:-330px; padding-bottom:330px">
            <div class="block-row ">
                <div class="block-image-left">
                    <img src="/wp-content/themes/andyhuntdesign/images/about-football.png">
                </div>
                <div class="block-copy-right">
                    <h2>Inspired by doodling</h2>
                    <p>If i’m stuck in a bit of a pickle, I like to doodle ideas down and it helps me out. Not that I’m likely to design a website that’s a bunch of smiley faces with moustaches any time soon</p>
                </div>
            </div>
        </div>

        <div class="section about-black" id="section3" style="margin-top:-330px; padding-bottom:330px">
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

    
    <div class="section about-black" id="section5" style="margin-top:-330px;">
        <div class="intro">
            <h1>I work at Graphic Alliance in London</h1>
            <img src="sasas.png">
            <p>Like what you see? Hiot me up and let's banter. I think that means get in touch</p>
        </div>
    </div>
    <div class="section" id="section3" style="pointer-events:none;">
        <div class="intro">
            <div class="portfolio-item-divider" style="position:absolute;top:0"></div>
            - FIN -
        </div>
    </div>

</div>












<div style="position:absolute; float:left; z-index:-100000; height:100%; width:100%; background:#111111; bottom:0"></div>



<?php get_footer(); ?>