<?php get_header(); ?>

<?php get_template_part('content'); ?>

 <?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'My_WordPress_Theme' ),
    'next_text' => __( 'Onward', 'My_WordPress_Theme' ),
) ); ?>

 <?php get_footer(); ?>

