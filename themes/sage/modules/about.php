<?php
if ( function_exists( 'get_field' ) ):
	if ( have_rows( 'about_field' ) ):
		while ( have_rows( 'about_field' ) ) : the_row();
			if ( get_row_layout() == 'about_layout' ): ?>
				<section class="row about parallax-container"
				         data-parallax="scroll"
				         data-bleed="10"
				         data-speed="0.2"
					     data-image-src="<?php the_sub_field('about_image'); ?>">
					<div class="box dark">
						<h3><?php the_sub_field( 'about_heading' ); ?></h3>
						<p><?php the_sub_field( 'about_text' ); ?></p>
					</div>
				</section>
				<?php
			endif;
		endwhile;
	endif;
endif;
?>

