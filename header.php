<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/ihb3gik.css">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( function_exists( 'ncaa_render_sticky_nav' ) ) : ?>
    <?php ncaa_render_sticky_nav(); ?>
<?php endif; ?>

<main id="main-content" class="site-main">
