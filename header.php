<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <section class="top-menu"> <!-- Top Menu -->
  <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar-top" class="navbar-collapse collapse">
           <i class="fa fa-search pull-right"></i>
            <?php
              $args = array(
                  'theme_location' => 'top',
                  'depth'          => 2,
                  'container'      => false,
                  'menu_class'     => 'nav navbar-nav navbar-right',
                  'fallback'       => 'wp_bootstrap_navwalker::fallback',
                  'navwalker'      =>  new wp_bootstrap_navwalker()
                );
           ?>
           <?php wp_nav_menu($args); ?>

          </div><!--/.nav-collapse -->
        </div><!--/.container -->
      </nav>
  </section> <!-- /Top Menu -->

  <div class="clearfix"></div>

  <!-- Search Form -->
  <section class="row search-from" id="search-form">
    <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form role="form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <div class="form-group">
            <input class="form-control input-lg" id="inputlg" type="text" placeholder="Search..." name="s">
          </div>
      </form>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section class="top-bar"> <!-- Top Bar -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 logo">
          <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <h1 class="text-center"><?php bloginfo('name'); ?></h1>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </section> <!-- /Top Bar -->

  <div class="clearfix"></div>

  <!-- Navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php
              $args = array(
                  'theme_location' => 'primary',
                  'depth'          => 2,
                  'container'      => false,
                  'menu_class'     => 'nav navbar-nav',
                  'fallback'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'      =>  new wp_bootstrap_navwalker()
                );
           ?>
           <?php wp_nav_menu($args); ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container -->
      </nav>

      <div class="clearfix"></div>