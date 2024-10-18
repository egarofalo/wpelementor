<?php

use function Codevelopers\Markup\Helpers\Query\get_last_posts;
use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;

/**
 * Last posts Section shortcode.
 * [last-posts-section class="another-classes" count="number_of_posts" /]
 */

add_shortcode('last-posts-section', function ($atts) {
    $atts = shortcode_atts(
        [
            'class' => '',
            'count' => 4,
        ],
        $atts,
        'last-posts-section'
    );

    $atts['posts'] = get_last_posts();
    get_template_part('last-posts-section', null, $atts);
});

/**
 * Banner shortcode.
 * [banner class="class-1 class-2 ... class-N" id="banner-id" /] 
 */
add_shortcode('banner', function ($atts) {
    global $post;

    $atts = shortcode_atts(
        [
            'class' => '',
            'id' => '',
        ],
        $atts,
        'banner'
    );

    $banners = get_field('banners_list', $post);
    $atts['banner'] = (function () use ($banners, $atts) {
        foreach ($banners as $banner) {
            if ($banner['id'] === $atts['id']) {
                return $banner;
            }
        }

        return null;
    })();

    ob_start();
    get_template_part('banner', null, $atts);
    return ob_get_clean();
});
