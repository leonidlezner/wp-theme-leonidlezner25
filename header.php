<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="icon" type="image/png" href="<?php echo get_versioned_asset('images/favicon-16x16.png') ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_versioned_asset('images/favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_versioned_asset('images/favicon-96x96.png') ?>" sizes="96x96">
    <link rel="apple-touch-icon" href="<?php echo get_versioned_asset('images/apple-touch-icon.png') ?>">

    <style>
        @font-face {
            font-family: "Roboto";
            src: url('<?php echo get_font_url("Roboto/Roboto-Regular.ttf") ?>') format("truetype");
            font-weight: normal;
        }

        @font-face {
            font-family: "Roboto";
            src: url('<?php echo get_font_url("Roboto/Roboto-Bold.ttf") ?>') format("truetype");
            font-weight: bold;
        }

        @font-face {
            font-family: "Roboto";
            src: url('<?php echo get_font_url("Roboto/Roboto-Medium.ttf") ?>') format("truetype");
            font-weight: 600;
        }

        @font-face {
            font-family: "Nunito";
            src: url('<?php echo get_font_url("Nunito/static/Nunito-Regular.ttf") ?>') format("truetype");
            font-weight: normal;
        }

        @font-face {
            font-family: "Nunito";
            src: url('<?php echo get_font_url("Nunito/static/Nunito-Bold.ttf") ?>') format("truetype");
            font-weight: bold;
        }

        @font-face {
            font-family: "Nunito";
            src: url('<?php echo get_font_url("Nunito/static/Nunito-SemiBold.ttf") ?>') format("truetype");
            font-weight: 600;
        }
    </style>

    <?php wp_head(); ?>
</head>

<?php get_template_part('src/layout/body', 'begin'); ?>

<?php get_template_part('src/layout/header'); ?>