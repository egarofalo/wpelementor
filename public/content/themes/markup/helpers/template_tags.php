<?php

namespace Codevelopers\Markup\Helpers\TemplateTags;

use function CoDevelopers\Markup\Helpers\ConditionalTags\has_dynamic_sidebar;

/**
 * Loads a template part stored in the template-parts directory.
 */
function get_template_part(string $slug, string $name = null, array $args = []): void
{
    \get_template_part('template-parts/' . ltrim($slug, '/'), $name, $args);
}

/**
 * Display the title.
 */
function site_title(bool $echo = true, string $tag = 'h1'): ?string
{
    $title = "";

    if (is_home() && is_front_page()) :
        $title = get_bloginfo('name');
    elseif (is_singular() || (is_home() && !is_front_page())) :
        $title = single_post_title('', false);
    elseif (is_archive()) :
        $title = get_the_archive_title();
    elseif (is_search()) :
        $title = wp_sprintf(
            esc_html__('Search Results for: %s',  'markup'),
            '<span>' . get_search_query() . '</span>'
        );
    elseif (is_404()) :
        $title = esc_html__('Page not found', 'markup');
    endif;

    if ($echo) {
        echo "<{$tag}>{$title}</{$tag}>";
    } else {
        return "<{$tag}>{$title}</{$tag}>";
    }
}

/**
 * Display the class attribute of the site main row container.
 */
function site_main_row_container_class(): void
{
    $classes = 'row' . (has_dynamic_sidebar('primary_sidebar') ? ' with-sidebar' : '');

    echo 'class="' . $classes . '"';
}

/**
 * Display the class attribute of the site main col container.
 */
function site_main_col_container_class(): void
{
    $classes = 'col-12' . (has_dynamic_sidebar('primary_sidebar') ? ' col-sm-8' : '');

    echo 'class="' . $classes . '"';
}

/**
 * Display the class attribute of the primary sidebar container.
 */
function primary_sidebar_container_class(): void
{
    $classes = 'col-12 col-sm-4';

    echo 'class="' . $classes . '"';
}

/**
 * Paginate links in custom queries.
 */
function get_pagination($paged = '', $max_page = ''): ?string
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    if (!$paged) {
        $paged = get_query_var('paged');
    }

    if (!$max_page) {
        $max_page = $wp_query->max_num_pages;
    }

    return paginate_links([
        'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'     => '?paged=%#%',
        'current'    => max(1, $paged),
        'total'      => $max_page,
        'mid_size'   => 1,
        'prev_text'  => '<i class="fas fa-angle-double-left"></i>',
        'next_text'  => '<i class="fas fa-angle-double-right"></i>',
        'type'       => 'list',
    ]);
}

/**
 * Get banner data-* attributes tag.
 */
function get_banner_data_attr(array $banner, string $item_type = 'background'): void
{
    $item = $banner[$item_type];
    $show_attrs = function ($item) {
        $from = [];

        if (trim($item['from'])) {
            $from_lines = preg_split('/\n|\r\n/', trim($item['from']));
            $from = array_reduce(
                array_filter($from_lines, function ($item) {
                    return preg_match('/\s*:\s*/', $item);
                }),
                function ($carry, $item) {
                    [$prop, $value] = preg_split('/\s*:\s*/', $item);
                    $prop = trim($prop);
                    $value = trim($value);

                    if ($prop && !is_null($value)) {
                        $carry[$prop] = $value;
                    }

                    return $carry;
                },
                []
            );
        }

        echo !empty($from) ? " data-banner-from='" . json_encode($from) . "'" : '';
        echo !empty($item['ease']) ? " data-banner-ease='{$item['ease']}'" : '';
        echo !empty($item['start']) ? " data-banner-start='{$item['start']}'" : '';
        echo !empty($item['end']) ? " data-banner-end='{$item['end']}'" : '';
    };

    $show_attrs($item);
}

/**
 * Get banner background styles.
 */
function get_banner_background_styles(array $background, string $device = 'desktop'): void
{
    if (!in_array($device, ['desktop', 'mobile'], true)) {
        return;
    }

    $thumbnail = $device === 'desktop' ? 'banner' : 'banner-mobile';
    $image = wp_get_attachment_image_url($background['image'], $thumbnail);
    echo 'background-image: url("' . $image . '");';
}
