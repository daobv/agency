<header>
    <div class="top-links-wrap">
        <div class="top-links-content">
            <?php dynamic_sidebar('hotline'); ?>
        </div>
    </div>
    <div class="logo-wrap ">
        <?php dynamic_sidebar('banner-header'); ?>
    </div>
    <div class="megamenu style-homemenu">
        <ul class="lv0">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'items_wrap' => '%3$s'
            ));
            ?>
        </ul>
    </div>
</header>