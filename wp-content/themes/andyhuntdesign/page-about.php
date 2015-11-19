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




<div class="about-black">
  <div class="portfolio-top-divider"></div>
	<div class="about-fifty-left">
		<div class="wow slideInLeft"><img src="<?php echo get_template_directory_uri();?>/images/kurt.png" alt="Kurt"></div>
    <div class="gradient"></div>
  </div>
  <div class="about-fifty-right">
    <div class="words wow slideInRight">
      <h2>I wanted to be Kurt Cobain</h2>
      <p>After my formative years of busting shapes to the likes of A-Ha and T-Pau, I progressed to being a total grunge head. I still play the banjo today. Rock on!</p>
      <i class="spotify"></i> 
      <a href="#">View my Spotify</a>
    </div>
  </div>
</div>



<div class="about-black">
  <div class="about-full-row wow fadeInUp ">
    <i class="movie"></i>
    <h2>I wanted to be a movie star</h2>
    <div class="videoWrapper">
      <script>
        jQuery(function($) {
          $('.placeholder').click(function(){
          var video = '<iframe src="'+ $(this).attr('data-video') +'"></iframe>';
          $(this).replaceWith(video);
          });
        });
      </script>
      <img src="<?php echo get_template_directory_uri();?>/images/movie-block.png" alt="Kurt" class="placeholder" data-video="http://www.youtube.com/embed/zP_D_YKnwi0?autoplay=1">
    </div>
    <p>Reading about people can be boring so I turned my CV into a cartoon. Grab some pop corn and prepare to be bored in a different way</p>
    <i class="youtube"></i>
    <a href="#">Watch on YouTube</a>
  </div>
</div>


<div class="about-black">
  <div class="block-row-doodle">
    <div class="about-fifty-left">
      <div class="wow fadeInUp"><img src="/wp-content/themes/andyhuntdesign/images/about-football.png"></div>
    </div>
    <div class="about-fifty-right wow slideInRight">
      <i class="doodle"></i>
      <h2>Inspired by doodling</h2>
      <p>If i’m stuck in a bit of a pickle, I like to doodle ideas down and it helps me out. Not that I’m likely to design a website that’s a bunch of smiley faces with moustaches any time soon</p>
    </div>
  </div>
</div>


<div class="about-black">
  <div class="typo-full">
    <div class="typo-love wow slideInLeft">
      <p class="proxima">I love clear & beautiful typography with awesome fonts that are spaced out clearly and uses friendly & engaging language</p>
    </div>
    <div class="typo-hate wow slideInRight">
      <p class="impact">I can't stand nonsense typography and stale fonts that seem to have been lobbed in to a design last minute and utilises formal language that doesn't mean a thing</p>>
    </div>
  </div>
</div>


<div class="about-black working">
  <div class="about-full-row wow fadeInUp ">
      <i class="work"></i>
      <h2>I work at Graphic Alliance</h2>
      <img src="/wp-content/themes/andyhuntdesign/images/graphicalliance.png">
      <p>Like what you see? Hit me up and let's banter. I think that means get in touch</p>
  </div>
</div>


<div class="case-study-divider" style="float:left;"></div>













<?php include ('footer.php'); ?>