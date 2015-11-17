<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        
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