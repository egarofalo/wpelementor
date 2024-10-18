<?php
extract($args);

if (in_array(true, [
    !empty($facebook['url']),
    !empty($instagram['url']),
    !empty($twitter['url']),
    !empty($linkedin['url']),
], true)) : ?>
    <div class="site-footer__socials">
        <?php if (!empty($facebook['url'])) : ?>
            <a class="site-footer__social-link" href="<?php echo $facebook['url'] ?>">
                <i class="fab fa-facebook-f"></i>
            </a>
        <?php endif;
        if (!empty($instagram['url'])) : ?>
            <a class="site-footer__social-link" href="<?php echo $instagram['url'] ?>">
                <i class="fab fa-instagram"></i>
            </a>
        <?php endif;
        if (!empty($twitter['url'])) : ?>
            <a class="site-footer__social-link" href="<?php echo $twitter['url'] ?>">
                <i class="fab fa-twitter"></i>
            </a>
        <?php endif;
        if (!empty($linkedin['url'])) : ?>
            <a class="site-footer__social-link" href="<?php echo $linkedin['url'] ?>">
                <i class="fab fa-linkedin-in"></i>
            </a>
        <?php endif; ?>
    </div>
<?php endif;
