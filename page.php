<?php get_header(); ?>

<div class="container main-content">
	<div class="row">
		<?php if(is_active_sidebar('sidebar')) : ?>
			<div class="col-md-8">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<?php the_post_thumbnail(); ?>
								<hr>
								<p>
									<?php the_content(); ?>
								</p>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('sidebar'); ?>
			</div>
		<?php else : ?>
			<div class="col-md-12">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<?php the_post_thumbnail(); ?>
								<hr>
								<p>
									<?php the_content(); ?>
								</p>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>