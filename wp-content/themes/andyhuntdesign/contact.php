<?php
/**
 * Template Name: Contact
 * Description: Displays portfolio posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>

<?php include ('header.php'); ?>


<div id="contact-wrap">

    <div class="contactwrapper">
        <div class="row">
            <h1>MY NAME IS ANDY <span class="mob-none">AND I'M A DIGITAL DESIGNER</span></h1>
            <span class="italic">and</span><span class="sub">&nbsp;I don't bite</span>
        </div>
        <div class="about-top-divider"></div>
    </div>

    <div class="contact-icons">
        <div class="row">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/images/block_skype.png">
                    <h4>andy.hunt78</h4>
                    <p>Don't be offended if I reject you if you're called angel_whore87</p>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/images/block_email.png">
                    <h4>andy@andyhuntdesign.com</h4>
                    <p>You may go to my junk mail so you're better using the form below</p>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/images/block_location.png">
                    <h4>The Garden of England</h4>
                    <p>Kinda</p>
                </li>
            </ul>
        </div>
        <div class="case-study-divider"></div>
    </div>
       
    <div class="contact-form-wrap">
        <div class="row">
            <?php the_block( 'Form' ); ?>
            <div class="entry-title"></div>
            <div class="entry-content"></div>
        </div>
    </div>

</div>
<div class="portfolio-divider"></div>
<?php get_footer(); ?>