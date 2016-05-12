<header class="banner">
    <div class="container">
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            <h1 id="logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>"
                     alt="<?php bloginfo('name'); ?>">
            </h1>
        </a>
        <div class="header-menu">
        <?php include 'phone_number.php'?>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php include 'social_media.php'?>
            <?php
            if (has_nav_menu('primary_navigation')) :
                ?>
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('Menu', 'sage'); ?></button>
                <?php echo
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-menu']);
            endif;
            ?>
        </nav>
        </div>
    </div>
</header>
<?php
if ( is_front_page() ) {
   // include 'hero-slider.php';
} ?>
