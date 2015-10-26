<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer class="aboutfooter">
            <div class="container">

                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-content");
                } ?>

                <ul>
                    <li class="facebook"><a href="https://www.facebook.com/andyhunt78" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_facebook.png" /></a></li>
                    <li class="twitter"><a href="https://twitter.com/andyhuntdesign" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_twitter.png" /></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/pub/andy-hunt/37/287/b01" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_linkedin.png" /></a></li>
                    <li class="youtube"><a href="https://www.youtube.com/user/ThinkCreateSee" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_youtube.png" /></a></li>
                    <li class="behance"><a href="https://www.behance.net/andyhunt" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_behance.png" /></a></li>
                    <li class="dribbble"><a href="https://dribbble.com/think_createsee" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_dribbble.png" /></a></li>
                    <li class="instagram"><a href="https://instagram.com/andy_hunt_" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_instagram.png" /></a></li>
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