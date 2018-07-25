<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper bg-purple color-white" id="wrapper-footer">
    <div class="container">
        <footer class="site-footer" id="colophon">
            <div class="row">
                <div class="col-md-6 col-xs-12 newsletter-container">
                    <h3>Abonnez-vous</h3>
                    <div class="textbox-newsletter">
                        <span>Soyez à l'affût de nos nouveaux produits, nos offres spéciales, nos événements en boutique  et bien plus en vous inscrivant à notre infolettre.</span>
                    </div>
                    <form action="https://lingeriesilhouette.us2.list-manage.com/subscribe/post?u=eb0ad9717712e9ca8c111a5da&amp;id=bbff55d67c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-form validate" target="_blank" >
                        <div class="input-group">
                            <input type="email" class="form-control" name="EMAIL" id="EMAIL" placeholder="Entrez votre courriel" required="required email">
                            <div class="invalid-feedback" style="width: 100%;">
                                Votre courriel.
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 offset-md-2 col-xs-12 pagelist-container">
                    <div>
                        <h3>Autre pages</h3>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'list-unstyled',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu-footer',
                                'depth' => 1,
                                'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

