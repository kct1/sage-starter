<?php if ( function_exists( 'get_field' ) ): ?>
	<section class="cta row">
		<div class="ctaOverlay"
		     style="background: url(<?php the_field( 'cta_image' ); ?>) center center no-repeat; background-size: cover;">
		</div>
		<div class="ctaContent container">
			<div class="box">
				<h2 class="headerCopyCta"><?php the_field( 'cta_header' ); ?></h2>
				<p class="subCopyCta"><?php the_field( 'cta_sub_header' ); ?></p>
				<a class="button"
				   href="<?php the_field( 'cta_link' ); ?>"><?php the_field( 'cta_button_text' ); ?></a>
			</div>

		</div>
	</section>
<?php endif;