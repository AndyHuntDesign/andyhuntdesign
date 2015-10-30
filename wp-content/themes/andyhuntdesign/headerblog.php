<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/libs/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.css">



    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    $(window).load(function(){
         $('.preloader').fadeOut();
    });
    </script>


    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
<!--<div class='preloader'></div>-->

<div class="topstrap">
    <div class="row">
        <div class="floatleft">
            <a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"></a>
        </div>
        <div class="floatright">
            <ul>
                <li class="facebook"><a href="https://www.facebook.com/andyhunt78" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_facebook.png" /></a></li>
                <li class="twitter"><a href="https://twitter.com/andyhuntdesign" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_twitter.png" /></a></li>
                <li class="linkedin"><a href="https://www.linkedin.com/pub/andy-hunt/37/287/b01" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/footer_linkedin.png" /></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>
          <?php wp_nav_menu(
            array(
              'menu' => 'main-menu',
              'container_class' => 'nav-collapse collapse',
              'menu_class' => 'nav',
              'fallback_cb' => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
            )
          ); ?>

          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
          <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
      </div>
    </div>
</div>







    <!-- End Header. Begin Template Content -->