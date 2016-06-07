<?php
/*
 * If you need to change the content width i.e. Jetpack Galleries
 * Uncomment "sage_content_width below"
 * global setting is in functions.php
 */
// sage_content_width(1920);
while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
