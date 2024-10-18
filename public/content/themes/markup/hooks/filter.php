<?php

/**
 * Change html tags output before enqueue custom handlers.
 */
add_filter('style_loader_tag', function ($html, $handler) {
    // change output here...
    return $html;
}, 10, 2);

/**
 * Hide dynamic sidebar in certain pages.
 */
add_filter('markup_hide_dynamic_sidebar', function ($name) {
    return in_array(true, [
        // add conditionals here...
    ], true);
});

/**
 * Show static sidebar in certain pages.
 */
add_filter('markup_show_static_sidebar', function () {
    return in_array(true, [
        // add conditionals here...
    ], true);
});

/**
 * Filter the site title.
 */
add_filter('markup_site_title', function (string $title) {
    // change the site title here...
    return $title;
});

/**
 * Add Google Font families with a Beer Blocks plugin filter.
 */
add_filter('beer_blocks_google_fonts_families', function (array $fontFamilies) {
    array_push($fontFamilies, [
        'family' => 'Titillium Web',
        'fallback' => 'sans-serif',
        'variants' => [
            'normal' => [200, 300, 400, 600, 700, 900],
            'italic' => [200, 300, 400, 600, 700],
        ],
    ], [
        'family' => 'Coda',
        'fallback' => 'system-ui',
        'variants' => [
            'normal' => [400, 800],
        ],
    ]);

    return $fontFamilies;
});
