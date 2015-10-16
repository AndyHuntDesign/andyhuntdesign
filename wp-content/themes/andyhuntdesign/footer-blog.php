<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer>
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
        <script src="<?php echo get_template_directory_uri();?>/js/wow.js"></script>
          <script>
            wow = new WOW(
              {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
              }
            );
            wow.init();
            document.getElementById('moar').onclick = function() {
              var section = document.createElement('section');
              section.className = 'section--purple wow fadeInDown';
              this.parentNode.insertBefore(section, this);
            };
          </script>

          <!-- include jQuery -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  
<script>
/* detect touch */
if("ontouchstart" in window){
    document.documentElement.className = document.documentElement.className + " touch";
}
if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax").css("background-attachment", "fixed");
}

/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

/* set parallax background-position */
function parallaxPosition(e){
    var heightWindow = $(window).height();
    var topWindow = $(window).scrollTop();
    var bottomWindow = topWindow + heightWindow;
    var currentWindow = (topWindow + bottomWindow) / 2;
    $(".parallax").each(function(i){
        var path = $(this);
        var height = path.height();
        var top = path.offset().top;
        var bottom = top + height;
        // only when in range
        if(bottomWindow > top && topWindow < bottom){
            var imgW = path.data("resized-imgW");
            var imgH = path.data("resized-imgH");
            // min when image touch top of window
            var min = 0;
            // max when image touch bottom of window
            var max = - imgH + heightWindow;
            // overflow changes parallax
            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
            top = top - overflowH;
            bottom = bottom + overflowH;
            // value with linear interpolation
            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
            // set background-position
            var orizontalPosition = path.attr("data-oriz-pos");
            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
            $(this).css("background-position", orizontalPosition + " " + value + "px");
        }
    });
}
if(!$("html").hasClass("touch")){
    $(window).resize(parallaxPosition);
    //$(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
}
</script>

<script type="text/javascript">
         
              var main_menu_top = $('.home-menu').offset().top;
                  //Change the number to the height of your menu
              var menu_bottom = main_menu_top + 2;
              $(window).scroll(function(){    
              var scroll_top = $(window).scrollTop(); // our current vertical scroll position from the top
                  // Check to see if we've scrolled more than the top menu
              if (scroll_top > menu_bottom) {
                      //Our scroll is lower than the main menu, check if the top menu is already displayed
                  if ( ($(".scrollmenu").is(":visible") == false) ) {
                  //Menu isn't visible, so show it
                  $('.scrollmenu').fadeIn();
              } } 
              else {
                      //Scroll bar is higher than the bottom of the main menu so make sure the top menu isn't visible
                  if ( $(".scrollmenu").is(":visible") ) {
                  $('.scrollmenu').fadeOut();
              }
          }
      });
  </script>


        <?php wp_footer(); ?>
    </body>
</html>