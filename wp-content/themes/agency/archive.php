<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package agency
 */

get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block">
                    <?php get_breadcrumbs(); ?>
                    <div class="block-content">
                        <div class="product-list">
                            <ul>
                                <?php if (have_posts()) : ?>
                                    <?php /* Start the Loop */ ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <li class="item">
                                            <a class="product-img" href="#">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <img src="images/img_list_01.png" alt=""/>
                                                <?php endif; ?>
                                            </a>

                                            <div class="product-shop">
                                                <div class="product-name"><a href="<?php the_permalink(); ?>"
                                                                             title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="desc"><?php echo content(20); ?></div>
                                                <div class="buttons-set"><a class="more" href="#">More</a></div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
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
        </div>
    </div>
    <div class="col-right">
        <?php $categoryTitle = single_cat_title("", false); ?>
        <?php $categoryId = get_cat_ID($categoryTitle); ?>
        <?php if ($categoryId == 25): ?>
            <?php dynamic_sidebar('most_popular_post'); ?>
        <?php else: ?>
            <?php dynamic_sidebar('sidebar_right'); ?>
        <?php endif; ?>
    </div><!-- end col-right -->

    </div><!-- #main -->
    <div class="pagination">
        <?php agency_paging_nav(); ?>
    </div>
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>