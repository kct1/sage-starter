<section class="hero-section row">
	<?php
	if ( function_exists( 'get_field' ) ):
		if ( have_rows( 'hero' ) ):
			while ( have_rows( 'hero' ) ) : the_row();
				if ( get_row_layout() == 'hero_content' ): ?>
					<div class="hero jumbotron"
					     style="background: url(<?php the_sub_field( 'hero_image' ); ?>) center center no-repeat; background-size: cover;">
						<div class="hero_unit box">
							<h2><?php the_sub_field( 'hero_heading' ); ?></h2>
							<p><?php the_sub_field( 'hero_text' ); ?></p>
							<?php if ( get_sub_field( 'button_url' ) ): ?>
								<a class="btn" href="<?php the_sub_field( 'button_url' ); ?>">
									<?php the_sub_field( 'button_text' ); ?>
								</a>
							<?php endif; ?>
						</div>
					</div> <?php
				endif;
			endwhile;
		endif;
	endif;
	?>
	<div class="overlay"></div><?php /* .overlay handles the filter over the hero picture */ ?>
</section>