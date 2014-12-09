<?php
/**
 * @package agency
 */
?>
<?php get_breadcrumbs(); ?>
<div class="block-content">
    <div class="news-content">
        <?php the_title('<h2 class="title">', '</h2>'); ?>
        <p class="date">Thứ năm, 27/11/2014 | 12:32 GMT+7</p>

        <div class="photo">
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
            <?php endif;?>
        </div>
        <br/><br/>
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'agency'),
            'after' => '</div>',
        ));
        ?>
    </div>
</div><!-- #post-## -->
