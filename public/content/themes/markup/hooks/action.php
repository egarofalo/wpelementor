<?php

use function Codevelopers\Markup\Helpers\Asset\asset;
use function Codevelopers\Markup\Helpers\Asset\scripts;
use function Codevelopers\Markup\Helpers\Asset\vendor_scripts;
use function Codevelopers\Markup\Helpers\Asset\styles;
use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;

/**
 * Loading translations.
 * https://developer.wordpress.org/themes/functionality/internationalization/#loading-translations
 */
add_action('after_setup_theme', function () {
    load_theme_textdomain('markup', get_template_directory() . '/languages');
});

/**
 * Create custom navigation menus in the dashboard for use in the theme.
 * http://codex.wordpress.org/Function_Reference/register_nav_menus
 */
add_action('after_setup_theme', function () {
    $navMenus = [
        // Primary navigation menu.
        'primary_navigation' => __('Primary navigation', 'markup'),
        // Primary navigation menu for small and medium devices (mobile).
        'primary_navigation_mobile' => __('Primary navigation for mobile devices', 'markup'),
    ];

    register_nav_menus($navMenus);
});

/**
 * Add Block Editor styles.
 */
add_action('enqueue_block_editor_assets', function () {
    // Editor styles.
    wp_enqueue_style(
        'block-editor-styles',
        asset('styles/editor-styles.css')
    );
});

/**
 * Register the dynamic sidebar.
 * https://developer.wordpress.org/reference/functions/register_sidebar
 */
add_action('widgets_init', function () {
    register_sidebar([
        'name' => __('Primary', 'markup'),
        'id' => 'primary_sidebar',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
});

/**
 * Enqueue your styles in this method.
 * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
add_action('wp_enqueue_scripts', function () {
    styles();
});

/**
 * Enqueue the vendor shared scripts here.
 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action('wp_enqueue_scripts', function () {
    vendor_scripts();
}, 0);

/**
 * Enqueue your scripts in this method.
 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action('wp_enqueue_scripts', function () {
    scripts();
});

/**
 * Change the main query in the search page.
 */
add_action('pre_get_posts', function ($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    $post_types = ['post'];

    if (is_search()) {
        $query->set('post_type', $post_types);
    }
});

/**
 * Add the site header contents.
 */
add_action('markup_site_header_contents', function () {
    get_template_part('primary-navbar');
    get_template_part('title');
});

/**
 * Add the static sidebar content here.
 */
add_action('markup_static_sidebar_content', function () {
    // add contents here...
});

/**
 * Add contents before the primary navbar collapse.
 */
add_action('markup_before_primary_navbar_collapse', function () {
    // add contents here...
});

/**
 * Add contents after the primary navbar collapse.
 */
add_action('markup_after_primary_navbar_collapse', function () {
    // add contents here...
});

/**
 * Add contents before the site footer contents.
 */
add_action('markup_before_site_footer_contents', function () {
    // add contents here...
});

/**
 * Add contents after the site footer contents.
 */
add_action('markup_after_site_footer_contents', function () {
    // add contents here...
});
