# 2024-01-19

-   Add **Advanced Custom Fields Pro v6.2.4**
-   Move **Contact info** and **Socials media** group fields to a new options page **Contact data**
-   Change **Banners list** custom field to a repeater field and update logic of `banner` shortcode
-   Remove `get_homepage` helper function
-   Remove `wpackagist-plugin/advanced-custom-fields`
-   Remove `wpackagist-plugin/olympus-google-fonts`
-   Update `johnpbloch/wordpress` (6.4.1 => 6.4.2)
-   Update `wpackagist-plugin/beer-blocks` (1.8.0 => 1.9.1)
-   Update `wpackagist-plugin/loginpress` (3.0.0 => 3.0.5)
-   Update `wpackagist-plugin/wp-mail-smtp` (3.10.0 => 3.11.0)
-   Remove `jquery` from `package.json`

# 2023-12-04

-   Add `wpackagist-plugin/wp-mail-smtp` plugin for STMP configuration
-   Remove STMP configuration from `env` files
-   Remove `wpackagist-plugin/wp-optimize` plugin
-   Update `johnpbloch/wordpress` (6.3.2 => 6.4.1)
-   Update `johnpbloch/wordpress-core` (6.3.2 => 6.4.1)
-   Update `symfony/deprecation-contracts` (v3.3.0 => v3.4.0)
-   Update `wpackagist-plugin/advanced-custom-fields` (6.2.2 => 6.2.4)
-   Update `wpackagist-plugin/beer-blocks` (1.7.0 => 1.8.0)
-   Update `wpackagist-plugin/olympus-google-fonts` (3.4.5 => 3.4.6)
-   Update `wpackagist-plugin/loginpress` (1.8.0 => 3.0.0)
-   Change login admin page styles
-   Fixes in `contact-from` shortcode

# 2023-10-31

-   Remove **Advanced Custom Fields Pro** plugin and replace it with **Advanced Custom Field** free edition
-   Remove `hook/acf.php` hook file in wpstack theme
-   Replace **Webpack Encore** with **LaravelMix**
-   Update `johnpbloch/wordpress` => (6.2.0 => 6.3.2)
-   Update `johnpbloch/wordpress-core` => (6.2.0 => 6.3.2)
-   Update `wpackagist-plugin/beer-blocks` => (1.6.1 => 1.7.0)
-   Update `wpackagist-plugin/force-regenerate-thumbnails` => (2.1.2 => 2.1.3)
-   Update `wpackagist-plugin/loco-translate` (2.6.4 => 2.6.6)
-   Update `wpackagist-plugin/login-press` => (1.7.1 => 1.8.0)
-   Update `wpackagist-plugin/olympus-google-fonts` => (3.3.8 => 3.4.5)
-   Update `wpackagist-plugin/wp-optimize` => (3.2.14 => 3.2.21)
-   Change Banners behavior
-   Change thumbnail sizes
-   Fix editor styles
-   Major changes!

# 2023-05-12

-   Remove `wpackagist-plugin/wordpress-seo`
-   Update `johnpbloch/wordpress` => (6.1.1 => 6.2.0)
-   Update `johnpbloch/wordpress-core` => (6.1.1 => 6.2.0)
-   Update `wpackagist-plugin/wp-optimize` => (3.2.12 => 3.2.14)
-   Update `wpackagist-plugin/beer-blocks` => (1.5.0 => 1.6.1)
-   Update `wpackagist-plugin/force-regenerate-thumbnails` => (2.1.1 => 2.1.2)
-   Update `wpackagist-plugin/loco-translate` => (2.6.3 => 2.6.4)
-   Update `wpackagist-plugin/login-press` => (1.7.0 => 1.7.1)
-   Update `wpackagist-plugin/olympus-google-fonts` => (3.3.4 => 3.3.8)
-   Remove google fonts styles enqueued in `asset.php` helper file.
-   Change header logo image
-   Change header logo width

# 2023-02-16

-   Add new `str_toupper` php function in string helper file
-   Add new translation strings in wpstack theme pot file
-   Add new translations in `ES` language
-   Apply changes and fixes in `contact-form` shortcode
-   Update `bootstrap` => (4.6.1 => 4.6.2)
-   Update `gsap` => (3.10.4 => 3.11.4)
-   Update `browser-sync` => (2.27.10 => 2.27.11)
-   Update `cocur/slugify` (v4.1.0 => v4.3.0)
-   Update `composer/installers` (v1.12.0 => v2.2.0)
-   Update `johnpbloch/wordpress` (6.0.1 => 6.1.1)
-   Update `johnpbloch/wordpress-core` (6.0.1 => 6.1.1)
-   Update `symfony/console` (v4.4.44 => v4.4.49)
-   Update `symfony/polyfill-ctype` (v1.26.0 => v1.27.0)
-   Update `symfony/polyfill-mbstring` (v1.26.0 => v1.27.0)
-   Update `symfony/polyfill-php73` (v1.26.0 => v1.27.0)
-   Update `symfony/polyfill-php80` (v1.26.0 => v1.27.0)
-   Update `wpackagist-plugin/font-awesome` (4.2.0 => 4.3.2)
-   Update `wpackagist-plugin/force-regenerate-thumbnails` (2.0.6 => 2.1.1)
-   Update `wpackagist-plugin/loco-translate` (2.6.2 => 2.6.3)
-   Update `wpackagist-plugin/loginpress` (1.6.2 => 1.7.0)
-   Update `wpackagist-plugin/svg-support` (2.4.2 => 2.5.5)
-   Update `wpackagist-plugin/wordpress-seo` (19.5.1 => 20.1)
-   Update `wpackagist-plugin/wp-optimize` (3.2.6 => 3.2.12)
-   Update `wpackagist-plugin/beer-blocks` (1.4.1 => 1.5.0)
-   Remove `wpackagist-plugin/font-awesome` wordpress plugin
-   Remove `.active` rule styles in `_nav.scss` (this behavior was changed with a variable in `variables/_navbar.scss`)
-   Remove `.navbar-toggler` padding rule in `_nav.scss` (this behavior was changed with a variable in `variables/_navbar.scss`)
-   Remove `background: none` rule in `.navbar-toggler-icon` class (this behavior was changed with a variable in `variables/_navbar.scss`)

# 2022-08-09

-   Add new **banner** custom fields for change the banners behaviour in the admin
-   Add new `banner-mobile` thumbnail used for banners images in mobile devices
-   Add new `image-header-mobile` thumbnail used for header images in mobile devices
-   Add Google Fonts in `enqueue_block_editor_assets` and `wp_enqueue_scripts` action hooks using `google_fonts` helper
-   Update `advanced-custom-fields/advanced-custom-fields-pro` (5.9.9 => 5.12.3)
-   Update `wpackagist-plugin/font-awesome` (4.1.1 => 4.2.0)
-   Update `wpackagist-plugin/loginpress` (1.6.0 => 1.6.2)
-   Update `wpackagist-plugin/wp-optimize` (3.2.5 => 3.2.6)
-   Update `wpackagist-plugin/wordpress-seo` (18.9 => 19.5.1)
-   Remove `wpackagist-plugin/olympus-google-fonts` wordpress plugin
-   Update translations
-   Grouped sass vars into multiple sass files
-   Run database optimizations

# 2022-06-08

-   Add new fake posts
-   Fix BrowserSync config params in `assets.json` file
-   Update `browser-sync` (**2.27.9** => **2.27.10**)
-   Update `sass` => (**1.51.0** => **1.52.2**)
-   Update `wpackagist-plugin/loco-translate` (2.6.1 => 2.6.2)
-   Update `wpackagist-plugin/olympus-google-fonts` (3.0.17 => 3.0.20)
-   Update `wpackagist-plugin/wp-optimize` (3.2.3 => 3.2.5)
-   Update `wpackagist-plugin/wordpress-seo` (18.8 => 18.9)
-   Change image size (**loop** => **large**) in `content-page.php` template part
-   Change image size (**loop** => **large**) in `content-single.php` template part
-   Change styles in `_paginator.scss` sass file
-   Run database optimization

# 2022-05-15

-   Change alternative logo settings in the `customizer.php` action hook file
-   Change alternative logo image size to `thumbnail` in the `footer.php` template file
-   Fix nav styles in `_nav.scss` sass file
-   Add `markup_site_header_contents` action hook used in `header.php` template file
-   Add `markup_before_primary_navbar_collapse` and `markup_after_primary_navbar_collapse` action hooks used both in `primary-navbar.php` template part
-   Add `markup_before_site_footer_contents` and `markup_after_site_footer_contents` used in `footer.php` template file

# 2022-05-07

-   Add `sass` node dependency for compile sass files
-   Remove `node-sass` node dependency
-   Update node engine in `package.json` (**14.x** => **16.x**)
-   Update `sass-loader` node package (**^8.0.2** => **10.2.0**)
-   Update `postcss-loader` node package (**^3.0.0** => **4.3.0**)
-   Update `wpackagist-plugin/beer-blocks` (**1.3.2** => **1.4.1**)
-   Update `wpackagist-plugin/wordpress-seo` (**18.6** => **18.8**)

# 2022-05-02

-   Update WordPress core (**5.9.2** => **5.9.3**)
-   Update `wpackagist-plugin/wordpress-seo` (**18.3** => **18.6**)
-   Update `wpackagist-plugin/olympus-google-fonts` (**3.0.14** => **3.0.17**)
-   Update translations
-   Replace all containers class `container-xl` to `container-xxl`

# 2022-04-11

-   Change Bootstrap 4 grid breakpoints and add new `XXL` breakpoint (more than 1400px)
-   Add `plugin:install` console command to install WordPress plugins via composer
-   Add `plugin:uninstall` console command to uninstall WordPress plugins via composer
-   Add `plugin:update` console command to update WordPress plugins via composer

# 2022-03-17

-   Update `wpackagist-plugin/beer-blocks` (**1.3.1** => **1.3.2**)
-   Update `wpackagist-plugin/loco-translate` (**2.6.0** => **2.6.1**)
-   Update translations
-   Update **Beer Blocks** page contents

# 2022-03-16

-   Add `CHANGELOG.md` file
-   Add `customizer.php` hook file
-   Add alternative logo on `footer.php` template file via the WordPress Cutomizer
-   Update WordPress core (**5.8.2** => **5.9.2**)
-   Update `wpackagist-plugin/font-awesome` (**4.0.4** => **4.1.1**)
-   Update `wpackagist-plugin/loco-translate` (**2.5.5** => **2.6.0**)
-   Update `wpackagist-plugin/loginpress` (**1.5.10** => **1.6.0**)
-   Update `wpackagist-plugin/svg-support` (**2.3.19** => **2.4.2**)
-   Update `wpackagist-plugin/wordpress-seo` (**17.8** => **18.3**)
-   Update `wpackagist-plugin/beer-blocks` (**1.3.0** => **1.3.1**)
-   Update `wpackagist-plugin/olympus-google-fonts` (**3.0.13** => **3.0.14**)
-   Update `wpackagist-plugin/loginpress` (**1.5.13** => **1.6.0**)
-   Update `wpackagist-plugin/wp-optimize` (**3.2.2** => **3.2.3**)
-   Update `reboot()` mixin to normalize editor styles
-   Fix `asset(...)` helper function
-   Remove `composer.lock` on `.gitignore`
-   Remove `yarn.lock` on `.gitignore` theme folder file
-   Remove **Tiny MCE** editor styles
