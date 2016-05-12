<?php
if ( have_rows( 'about' ) ):
	while ( have_rows( 'about' ) ) : the_row();
		if ( get_row_layout() == 'box_of_text' ): ?>
			<div class="box">
			<h3><?php the_sub_field( 'heading' ); ?></h3>
			<p><?php the_sub_field( 'text' ); ?></p>
			</div><?php
		endif;
	endwhile;
endif;