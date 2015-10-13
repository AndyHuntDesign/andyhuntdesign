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




    
<div class="contact-form-wrap">
    <div class="row">
        <div class="info">
            <?php the_block( 'info' ); ?>
        </div>
        <div class="form">
            <?php the_block( 'Form' ); ?>
            <div class="entry-title"></div>
            <div class="entry-content"></div>
        </div>
    </div>
</div>



    
</div>
<div class="portfolio-divider"></div>
<?php get_footer(); ?>