<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package agency
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="block wow fadeInLeft">
                <div class="block-title solid">Thủ thuật</div>
                <div class="block-content">
                    <ul class="list">
                        <?php if (have_posts()) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            get_template_part('content', get_post_format());
                            ?>
                        <?php endwhile; ?>
                    </ul>
                    <div class="buttons-set">
                        <?php agency_paging_nav(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block wow fadeInRight">
                <div class="block-title solid">Tin tức</div>
                <div class="block-content">
                    <ul class="list">
                    <?php query_posts( array ( 'category_id' => 6, 'posts_per_page' => 10) );?>
                    <?php  while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
	                <?php endwhile; ?>
                    <?php wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php else : ?>
        <?php get_template_part('content', 'none'); ?>

    <?php
    endif;
    ?>
    <div class="row row-second">
        <div class="col-md-4">
            <div class="block wow fadeInLeft">
                <?php dynamic_sidebar('expert_consultant'); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block wow fadeIn">
                <div class="block-title">Quảng cáo đúng cách</div>
                <div class="block-content">
                    <ul class="list">
                        <?php query_posts( array ( 'category_id' => 6, 'posts_per_page' => 10) );?>
                        <?php  while ( have_posts() ) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <?php wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-partner wow fadeInRight ">
                <div class="block-title">Đối tác thành công</div>
                <div class="block-content">
                    <?php dynamic_sidebar("partners")?>
                </div>
            </div>
        </div>
    </div>
    <!---->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
