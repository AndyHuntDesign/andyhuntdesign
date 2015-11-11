<?php
/**
 * Template Name: Home page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<div class="home-wrap">
    <div id="hero-home">
        <h1>MY NAME IS ANDY <span class="mob-none">AND I'M A DIGITAL DESIGNER</span></h1>
        <div class="home-slider">
          <div id="demo">
            <div class="home-slider-container">
              <div id="owl-demo" class="owl-carousel">
                 <div class="item">
                  <div class="heading">
                    <span class="italic">and</span> <span class="sub">I'm a designer for web</span> 
                  </div>
                  <div class="avatar">
                    <img src="<?php echo get_template_directory_uri();?>/images/slider/slide_illustration.png" alt="Geek">
                  </div>
                </div>  
                <div class="item">
                  <div class="heading">
                    <span class="italic">and</span> <span class="sub">I'm a front end developer</span> 
                  </div>
                  <div class="avatar">
                    <img src="<?php echo get_template_directory_uri();?>/images/slider/slide_geek.png" alt="Geek">
                  </div>
                </div> 
                <div class="item">
                  <div class="heading">
                    <span class="italic">and</span> <span class="sub">I totally rock</span>
                  </div>
                  <div class="avatar">
                    <img src="<?php echo get_template_directory_uri();?>/images/slider/slide_rock.png" alt="Rocking">
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.9.1.min.js"></script> 
        <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
        <style>
            #owl-demo .item img{
                display: block;
                width: 100%;
                height: auto;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                autoplay:true,
                autoplayTimeout:8000,
                autoplayHoverPause:true,
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                })
            });
        </script>
        <div id="slider-back"></div>
    </div>
    <div id="slider-divider">
        <ul class="dev-none">
            <li>famous faces i've helped</li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_boots.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_samsung.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_olympics.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_princestrust.png"></li>
        </ul>
        <ul class="mob-view">
            <p>famous faces i've helped</p>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_boots.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_samsung.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_olympics.png"></li>
            <li><img src="<?php echo get_template_directory_uri();?>/images/l_princestrust.png"></li>
        </ul>
    </div>

    <div class="more-info">
        <div class="row">
            <div class="toprow wow fadeIn">
                <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
                <div class="preheader">
                    <h2>YOU WANT MORE</h2>
                </div>
                <p>I draw pictures, I blog on occassions and I tweet. Have a little look</p>
            </div>
            <div class="botrow desktop-view">
                <div class="col01 wow fadeInUp"><a href="https://twitter.com/andyhuntdesign" target="_blank"></a></div>
                <div class="col02 wow fadeInUp delay01"><a href="/blog" target="_blank"></a></div>
                <div class="col03 wow fadeInUp delay02"><a href="https://twitter.com/andyhuntdesign" target="_blank"></a></div>
            </div>
            <div class="botrow mob-view">
                <ul>
                    <li class="wow fadeInUp delay01"><img src="<?php echo get_template_directory_uri();?>/images/block_about.png"></li>
                    <li class="wow fadeInUp delay01"><a href="/blog"><img src="<?php echo get_template_directory_uri();?>/images/block_blog.png"></a></li>
                    <li class="wow fadeInUp delay01"><a href="https://twitter.com/andyhuntdesign" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/block_twitter.png"></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="case-study">
    <div class="row">
        <div class="toprow wow fadeIn">
            <img src="<?php echo get_template_directory_uri();?>/images/bulb.png">
            <div class="preheader">
                <h2>FEATURED CASE STUDY</h2>
            </div>
        </div>
        <div class="feature">
            <div class="col1 wow slideInLeft">
                <?php the_block( 'Case Study Image' ); ?>
            </div>
            <div class="col2 wow slideInRight">
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