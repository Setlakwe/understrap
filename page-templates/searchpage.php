<?php
/*
Template Name: Search Page
*/

get_header();
$container = get_theme_mod('understrap_container_type');
?>

    <div class="wrapper" id="page-wrapper">

        <div class="<?php echo esc_attr($container); ?>" id="content">

            <div class="row">

                <?php get_template_part('sidebar-templates/sidebar', 'left'); ?>

                <div
                        class="<?php
                        if (is_active_sidebar('left-sidebar') xor is_active_sidebar('right-sidebar')) : ?>col-md-8<?php
                        elseif (is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')) : ?>col-md-4<?php
                        else : ?>col-md-12<?php
                        endif; ?> content-area"
                        id="primary">

                    <main class="site-main" id="main" role="main">
                        <?php get_search_form(); ?>
                    </main><!-- #main -->

                </div><!-- #primary -->

                <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>

            </div><!-- .row -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->


<?php get_footer();