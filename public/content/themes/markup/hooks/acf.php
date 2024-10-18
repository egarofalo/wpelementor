<?php

/**
 * Add contact data options page.
 */
add_action('acf/init', function () {
    acf_add_options_page([
        'page_title' => __('Contact data', 'markup'),
        'menu_title' => __('Contact data', 'markup'),
        'menu_slug' => 'contact-data',
        'capability' => 'manage_options',
        'position' => 30,
        'icon_url' => 'dashicons-email',
    ]);
});
