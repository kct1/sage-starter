<?php
if ( have_rows( 'blurbs' ) ):
	while ( have_rows( 'blurbs' ) ) : the_row();
		if ( get_row_layout() == 'blurb' ): ?>
			<a class="blurb-link"
			   href="<?php the_sub_field( 'blurb_link' ) ?>">
				<div class="blurb col-md-3 col-sm-6">
					<i class="fa <?php the_sub_field( 'blurb_icon' ); ?>"></i>
					<h2><?php the_sub_field( 'blurb_title' ); ?></h2>
					<p><?php the_sub_field( 'blurb_text' ); ?></p>
				</div>
			</a>
			<?php
		endif;
	endwhile;
endif;