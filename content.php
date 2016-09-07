<div class="container main-content">
	<div class="row">
		<?php if(is_active_sidebar('sidebar')) : ?>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
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
								<p>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" 
									class="btn btn-primary">Read More</a>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('sidebar'); ?>
			</div>
		<?php else : ?>
			<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
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
								<p>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" 
									class="btn btn-primary">Read More</a>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

	<!-- page pagination -->
	<?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'prsotheme') . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>
</div>