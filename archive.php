<?php get_header(); ?>

<div class="container main-content">
	<div class="black-block">
			<?php

				if(is_category())
				{
					single_cat_title();
				} else if(is_author())
				{
					echo '<h1 class="page-header">Archives By Author: '.get_the_author() . '</h1>';
				} else if(is_tag())
				{
					single_tag_title();
				} else if(is_day())
				{
					echo '<h1 class="page-header">Archives By Day: '.get_the_date() . '</h1>';
				} else if(is_month())
				{
					echo '<h1 class="page-header">Archives By Month: '.get_the_date('M') . '</h1>';
				} else if(is_year())
				{
					echo '<h1 class="page-header">Archives By Year: '.get_the_date('Y') . '</h1>';
				} else
				{
					echo '<h1 class="page-header">Archives: </h1>';
				}
			?>
	</div>
</div>

<?php get_template_part('content'); ?>

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'prsotheme' ),
    'next_text' => __( 'Onward', 'prsotheme' ),
) ); ?>

<?php get_footer(); ?>

