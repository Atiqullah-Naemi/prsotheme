
<?php get_header(); ?>

<?php if(get_theme_mod('about_bgcontrol', '1')) : ?>
  <style type="text/css">
      .about
      {
        background-image: url("<?php echo get_theme_mod('about_bg', get_template_directory_uri().'/images/bg.jpg'); ?>");
        background-attachment: fixed;
        background-size: cover;
      }
  </style>
<?php endif; ?>

  <!-- Slideshow -->
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="slideshow">
        <?php echo do_shortcode("[wp1s id='90']"); ?>
    </div>
  </div> <!-- /Container-fluid -->

  <div class="clearfix"></div>

  <!-- About Section -->
  <?php if(get_theme_mod('about_control', '1')) : ?>
  <section class="about">
    <div class="about-content">
      <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
        <h1><?php echo get_theme_mod('about_title', 'About Us'); ?></h1>
        <div>
          <?php echo get_theme_mod('about_text', 'We are a team of developers'); ?>
        </div>
        <a href="<?php echo get_theme_mod('about_btnurl', 'https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99'); ?>" class="btn btn-primary btn-lg pull-right"><?php echo get_theme_mod('about_btn', 'Contact'); ?></a>
      </div>
    </div>
    </div>
  </section>
<?php endif; ?>

  <div class="clearfix"></div>

  <!-- Latest News -->
  <section class="latest">
    <div class="row latest-heading">
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Latest Research</h1>
        <br>
      </div>
      </div>
    </div>
    <div class="container">
      <div class="row news">
        <?php $args = array('category' => 'latest', 'posts_per_page' => 1); ?>
        <?php $latest = new WP_Query($args); ?>
        <?php if($latest->have_posts()) : ?>
          <?php while($latest->have_posts()) : $latest->the_post(); ?>
            <?php if(has_post_thumbnail()) : ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
            <div class="col-md-4 post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php else : ?>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 more-news">
              <p>
                <?php echo get_theme_mod('more_text', 'Read More News'); ?>
              </p>
              <a href="<?php echo get_theme_mod('more_btnurl', 'https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99'); ?>" class="btn btn-primary btn-lg pull-right"><?php echo get_theme_mod('more_btn', 'Read More'); ?></a>
            </div>
      </div>
    </div>
  </section>  <!-- /Latest News -->

<?php get_footer(); ?>