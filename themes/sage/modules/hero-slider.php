<?php if ( function_exists( 'get_field' ) ): ?>
	
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="sage-bootstrap-carousel">

	<!-- Overlay -->
	<div class="overlay"></div>

	<ol class="carousel-indicators">
		<?php
		$i = 0;
		while ( have_rows( 'hero' ) ): the_row();
			if ( $i == 0 ) {
				echo '<li data-target="#sage-bootstrap-carousel" data-slide-to="0" class="active"></li>';
			} else {
				echo '<li data-target="#sage-bootstrap-carousel" data-slide-to="' . $i . '"></li>';
			}
			$i ++;
		endwhile; ?>
	</ol>


	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php
		$z = 0;
		while ( have_rows( 'hero' ) ): the_row();
			$image = wp_get_attachment_image_src( get_sub_field( 'hero_image' ), 'full' ); ?>

			<div class="item slides <?php if ( $z == 0 ) {
				echo 'active';
			} ?>">
				<img class="first-slide"
				     src="<?php the_sub_field( 'hero_image' ); ?>"
				     alt="First slide">
				<div class="hero" style="width:96%;">
					<div class="container">
						<div class="carousel-caption">
							<h1><?php the_sub_field( 'hero_heading' ); ?></h1>
							<?php the_sub_field( 'hero_text' ); ?>
							<?php if ( get_field( 'hero_content' ) ):
								while ( has_sub_field( 'button_url' ) ):
									?>
									<a href="<?php the_sub_field( 'button_url' ); ?>">
										<button class="btn btn-hero btn-lg"
										        role="button"><?php the_sub_field( 'button_text' ); ?>
										</button>
									</a>
								<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
			$z ++;
		endwhile; ?>
	</div>
	<a class="left carousel-control" href="#sage-bootstrap-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#sage-bootstrap-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<?php endif; ?>