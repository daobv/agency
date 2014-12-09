<?php
/**
 * The template for displaying all single posts.
 *
 * @package agency
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="block block-detailpage">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', 'single'); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || get_comments_number()) :
                   // comments_template();
                endif;
                ?>
            <?php endwhile; // end of the loop. ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-subscribe wow fadeIn">
                <?php dynamic_sidebar("register_form"); ?>
            </div>
            <div class="block block-formRequest wow fadeIn">
                <div class="block-title">Biểu mẫu</div>
                <?php dynamic_sidebar("supporting_template")?>
            </div>
        </div>
        <!-- end col-right -->
    </div>
    <!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
