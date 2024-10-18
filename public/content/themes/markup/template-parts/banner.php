<?php

use function Codevelopers\Markup\Helpers\TemplateTags\get_banner_background_styles;
use function Codevelopers\Markup\Helpers\TemplateTags\get_banner_data_attr;

extract($args);
if (!empty($banner)) :
    extract($banner); ?>
    <section class="section banner<?php echo $class ? " {$class}" : "" ?>" data-banner>
        <?php if (!empty($background['image'])) : ?>
            <div class="banner__background d-none d-md-block" style='<?php get_banner_background_styles($background) ?>' <?php get_banner_data_attr($banner) ?>></div>

            <div class="banner__background banner__background__mobile d-block d-md-none" style='<?php get_banner_background_styles($background, 'mobile') ?>' <?php get_banner_data_attr($banner) ?>></div>
        <?php endif; ?>

        <div class="banner__content">
            <div class="container-xxl">
                <h2 class="banner__title" <?php get_banner_data_attr($banner, 'title') ?>><?php echo $title['text'] ?></h2>

                <?php if (!empty($subtitle['text'])) : ?>
                    <p class="banner__subtitle" <?php get_banner_data_attr($banner, 'subtitle') ?>>
                        <?php echo $subtitle['text'] ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($cta['text']) and !empty($cta['link'])) : ?>
                    <div class="banner__cta" <?php get_banner_data_attr($banner, 'cta') ?>>
                        <a href="<?php echo $cta['link'] ?>">
                            <?php echo $cta['text'] ?>
                        </a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif;
