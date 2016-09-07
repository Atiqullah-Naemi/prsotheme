<?php get_header(); ?>

<?php get_template_part('content'); ?>

 <?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'prsotheme' ),
    'next_text' => __( 'Onward', 'prsotheme' ),
) ); ?>

 <?php get_footer(); ?>

