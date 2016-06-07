<?php
/* Template Name: Home Template */
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
	<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
	browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action( 'get_header' );
get_template_part( 'templates/header' );
?>
<div class="wrap" role="document">
	<div class="content row">
		<main class="main">
			<?php
			/*
			FEATURES! ...and other things to know
			1. CSS Animations! (via http://animate.css) visit to see the options
				1.1 Samples are set up on _hero.scss in the /assets/ folder
				1.2 Example:
					.hero_unit {
					  animation: fadeInRight 2s;
					}
					.hero button:hover {
					  animation: shake 1s;
					}
			2. Parallax! (via https://github.com/pixelcog/parallax.js/)
				2.1 Notice the "parallax-container" class and all the data attributes below it
				2.2 Also Notice "data-image-src" this is where the image url needs to spit out.
				2.3 Example:
					<section class="row about parallax-container"
							 data-parallax="scroll"
							 data-bleed="10"
							 data-speed="0.2"
							 data-image-src="<?php the_sub_field('image');?>"
							 data-natural-width="1400"
							 data-natural-height="1400">
						  <div class="box">
							<h3><?php the_sub_field( 'heading' ); ?></h3>
							<p><?php the_sub_field( 'text' ); ?></p>
						</div>
					</section>
			*/ ?>

			<?php require_once( 'modules/hero.php' ); ?>

			<?php require_once( 'modules/blurbs.php' ); ?>

			<?php require_once( 'modules/about.php' ); ?>

			<?php require_once( 'modules/jetpack-testimonials.php' ); ?>

			<?php require_once( 'modules/cta.php' ); ?>

			<?php require_once ( 'modules/video.php' ); ?>


		</main><!-- /.main -->
		<?php if ( Setup\display_sidebar() ) : ?>
			<aside class="sidebar">
				<?php include Wrapper\sidebar_path(); ?>
			</aside><!-- /.sidebar -->
		<?php endif; ?>
	</div><!-- /.content -->
</div><!-- /.wrap -->

<?php
do_action( 'get_footer' );
get_template_part( 'templates/footer' );
wp_footer();
?>
</body>
</html>
