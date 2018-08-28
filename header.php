<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md bg-grey">

		<?php if ( 'container' == $container ) : ?>
			<div class="container align-middle" >
		<?php endif; ?>
                    <div class="col-10">
                        <div class="text-left color-black">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://www.instagram.com/lingeriesilhouette/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.facebook.com/boutiques.silhouette/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.lingeriesilhouette.com/contactez-nous"><i class="fa fa-phone"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2 d-none d-sm-none d-md-block d-lg-block">
                        <div class="text-right">
                            <a href="/recherche/" class="btn btn-default bg-black color-white">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                	<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>
						<?php if ( is_front_page() && is_home() ) : ?>
<!--							<h1 class="navbar-brand mb-0"><a rel="home" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" itemprop="url">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
						<?php else : ?>
<!--							<a class="navbar-brand" rel="home" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" itemprop="url">--><?php //bloginfo( 'name' ); ?><!--</a>-->
						<?php endif; ?>
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
                <div class="col-2 d-block d-sm-block d-md-none d-lg-none">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
        <div class="container">
            <div class="text-center">
                <div class="blog-title">
                    <h1><a href="/"><span class="text-uppercase">Signé </span><br><span class="hijrnotes text-capitalize">Silhouette Lingerie</span></a></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="menu-fullwidth">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container_class' => 'align-items-stretch',
                        'container_id' => 'navFullWidth',
                        'menu_class' => '',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu-fullWidth',
                        'depth' => 1,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div>
        </div>


        </div>
	</div><!-- #wrapper-navbar end -->
