<?php if ( function_exists( 'get_field' ) ): ?>
	<div id="sage-bootstrap-carousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="9000">
		<!-- Indicators -->
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
			endwhile;
			?>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php $z = 0;
			while ( have_rows( 'hero' ) ): the_row();
				$image = wp_get_attachment_image_src( get_sub_field( 'hero_image' ), 'full' ); ?>
				<div class="item <?php if ( $z == 0 ) { echo 'active';} ?> <?php if ( get_sub_field( 'hero_video' ) ) { echo "has-video";} ?>">
					<div class="item-background"
					     style="background: url(<?php the_sub_field( 'hero_image' ); ?>) center center no-repeat / cover; min-height: 50vh;">
						<div class="overlay"
						     style="background: <?php the_sub_field( 'overlay_color' ); ?>; opacity: <?php the_sub_field( 'opacity' ); ?>;"></div>
						<!-- Overlay -->
						<div class="carousel-caption">
							<div class="hero_unit">
								<?php if ( get_sub_field( 'hero_video' ) ) { ?>
									<div class="hero-left">
										<?php the_sub_field( 'hero_video' ); ?>
										<?php /* OLD Ombed Container - disable because of switch to Wistia
										<div class="videoSizeHandler">
											<div class="embed-container">

											</div>
										</div>
                                        */ ?>
									</div>
								<?php } ?>

								<div class="hero-container">
									<h2><?php the_sub_field( 'hero_heading' ); ?></h2>
									<p><?php the_sub_field( 'hero_text' ); ?></p>
									<?php if ( get_sub_field( 'button_url' ) ) { ?>
										<a class="btn" href="<?php the_sub_field( 'button_url' ); ?>">
											<?php
											// Use ACF Button Text Field if filled out, otherwise just use "Click Here"
											if ( get_sub_field( 'button_text' ) ) {
												the_sub_field( 'button_text' );
											} else {
												echo "Click here";
											}
											?>
										</a>
									<?php } ?>
								</div>
							</div> <!-- hero_unit -->
						</div><!-- carousel-caption -->
					</div><!-- background -->
				</div><!-- item -->
				<?php
				$z ++;
			endwhile; ?>
		</div>
		<?php /* Kill Arrows
	<a class="left carousel-control" href="#sage-bootstrap-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#sage-bootstrap-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a> */ ?>
	</div>
<?php endif; ?>
