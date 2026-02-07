<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( is_front_page() && function_exists( 'ncaa_render_sticky_nav' ) ) : ?>
    <?php ncaa_render_sticky_nav(); ?>
<?php else : ?>
    <header id="site-header" class="site-header">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                }
                ?>
            </div>

            <?php
            if ( has_nav_menu( 'primary' ) ) :
                ?>
                <nav class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                    ) );
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </header>
<?php endif; ?>

<main id="main-content" class="site-main">
