<?php
$the_query = new WP_Query( array(
	'post_type'   => 'jetpack-testimonial',
	'posts_per_page' => '3'
) );
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="testimonial">
		<h4><?php echo the_title(); ?></h4>
		<?php echo the_content(); ?>
	</div>
	<?php
endwhile;
wp_reset_postdata();