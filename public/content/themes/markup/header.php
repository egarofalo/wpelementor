<?php

use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('head'); ?>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" role="banner">
        <?php do_action('markup_site_header_contents') ?>
    </header><!-- .site-header -->

    <div class="site-body">