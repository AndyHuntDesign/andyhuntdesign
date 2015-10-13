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


        <?php wp_footer(); ?>
    </body>
</html>