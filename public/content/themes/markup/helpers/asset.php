<?php

namespace Codevelopers\Markup\Helpers\Asset;

$assets = json_decode(file_get_contents(get_template_directory() . '/dist/mix-manifest.json'), true);

/**
 * Get an asset file with version added.
 */
function asset($filename)
{
    global $assets;

    return get_template_directory_uri() . '/dist/' . ltrim($assets['/' . trim($filename, '/')], '/');
}

/**
 * Enqueues your styles.
 */
function styles()
{
    // Add site styles
    wp_enqueue_style('main', asset('styles/main.css'));
}

/**
 * Enqueue the vendor scripts used in all pages.
 */
function vendor_scripts()
{
    // Add manifest.js
    wp_enqueue_script('manifest', asset('scripts/manifest.js'));

    // Add vendor.js
    wp_enqueue_script('vendor', asset('scripts/vendor.js'), ['manifest', 'jquery'], false, true);
}

/**
 * Enqueues your scripts.
 */
function scripts()
{
    // Add main.js
    wp_enqueue_script('main', asset('scripts/main.js'), ['jquery'], false, true);

    // Add forms.js
    wp_enqueue_script('forms', asset('scripts/forms.js'), ['jquery'], false, true);

    // Add comment-reply js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
