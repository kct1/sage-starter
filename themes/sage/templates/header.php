<header class="banner">
	<div class="container">
		<h1 id="logo"><?php sage_logo(); ?></h1>
		<div id="headerMenu">
			<?php require_once 'phone_number.php' ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php require_once 'social_media.php' ?>
				<?php
				if ( has_nav_menu( 'primary_navigation' ) ) :
					?>
					<button class="menu-toggle" aria-controls="primary-menu"
					        aria-expanded="false"><?php esc_html_e( 'Menu', 'sage' ); ?></button>
					<?php echo
				wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav-menu' ] );
				endif;
				?>
			</nav>
		</div>
	</div>
</header>
