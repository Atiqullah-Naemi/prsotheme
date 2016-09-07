  <div class="clearfix"></div>
  <!-- Footer Section -->
  <footer>
    <div class="container footers">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-block">
          <?php if(is_active_sidebar('footer1')) : ?>
            <?php dynamic_sidebar('footer1'); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-block">
          <?php if(is_active_sidebar('footer2')) : ?>
            <?php dynamic_sidebar('footer2'); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-block">
          <?php if(is_active_sidebar('footer3')) : ?>
            <?php dynamic_sidebar('footer3'); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-block">
          <?php if(is_active_sidebar('footer4')) : ?>
            <?php dynamic_sidebar('footer4'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <p class="text-center copy">
        Copyright &copy; <?php echo Date('Y'); ?>. All Rights Reserved.
        <br>
       <small class="pull-right"> Web Design and Development by <a href="https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99">
          Atiqullah Naemi
        </a></small>
      </p>
    </div>
  </footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>