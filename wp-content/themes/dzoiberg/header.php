<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dzoiberg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="topmenu">
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
                <div class="dropdown">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    
                       <!-- <a class="nav-item nav-link" href="#about-me">About me</a>
                        <a class="nav-item nav-link" href="#my-clinic">My clinic</a>
                        <a class="nav-item nav-link" href="#best-moments">Best moments</a>
                        <a class="nav-item nav-link" href="#">Price</a>
                        <a class="nav-item nav-link" href="#">Rewiews</a>
                        <a class="nav-item nav-link" href="#">Contacts</a>-->
						<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
					'menu_class'      => 'navbar-nav',
					'container'       => 'div',
					'container_class' => 'navbar-nav d-flex align-items-end nav-menu ',
					'link_class'      => 'nav-item nav-link'
				)
			);
			?>
                    
                </div>
            </div>
        </nav>
		
    </header>
    <main>
        <section class="main">
            <div class="container h-100 mw-100">
                <div class="row align-items-center h-100">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12">
                        <div class="main_title">
                            <h1>Hi<br> I'm John Zoidberg </h1>
                            <h4>Decapodian, a crustacean species of alien.I work as a staff physician at Planet Express </h4>
                            <a class="btn btn-outline-secondary " href="#about-me" role="button">About me</a>
                            <a class="btn btn-outline-secondary" href="#my-clinic" role="button">My clinic</a>
                        </div>
                    </div>
                </div>

            </div>

        </section>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dzoiberg' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$dzoiberg_description = get_bloginfo( 'description', 'display' );
			if ( $dzoiberg_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dzoiberg_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dzoiberg' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
