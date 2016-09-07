<?php get_header(); ?>

<div class="container main-content">
	<div class="row">
		<?php if(is_active_sidebar('sidebar')) : ?>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2></a>
								<div class="meta">
									<p>
										Posted On: <?php the_time('jS M, Y'); ?>
										By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<?php the_author(); ?></a>
									</p>
								</div>
								<hr>
								<?php the_post_thumbnail(); ?>
								<hr>
									<?php the_content(); ?>
									<?php comments_template(); ?>
								</p>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php dynamic_sidebar('sidebar'); ?>
			</div>
		<?php else : ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2></a>
								<div class="meta">
									<p>
										Posted On: <?php the_time('jS M, Y'); ?>
										By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<?php the_author(); ?></a>
									</p>
								</div>
								<hr>
								<?php the_post_thumbnail(); ?>
								<hr>
									<?php the_content(); ?>
									<?php comments_template(); ?>
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