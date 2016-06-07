<footer class="content-info">
	<div class="container">
		<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
			<aside class="row widget-container">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</aside>
		<?php endif; ?>


		<div class="footer-left">
			<p id="footer-info">
				<a href="#">
					<?php echo bloginfo();?>
				</a> | All Rights Reserved &copy; <?php echo date("Y") ?>
			</p>
		</div>
		<div class="footer-right">
			<?php include 'social_media.php'; ?>
			<?php include 'phone_number.php'; ?>
		</div>



	</div>
</footer>
