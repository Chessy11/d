<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
get_header();
if (!is_front_page()) {
    $solustrid_options = solustrid_options();
    $solustrid_show_breadcrumb = isset($solustrid_options['solustrid-show-breadcrumb']) ? $solustrid_options['solustrid-show-breadcrumb'] : 0;
    $solustrid_show_post_title = $solustrid_options['solustrid-show-post-title'];
    if ($solustrid_show_breadcrumb && $solustrid_show_post_title) {
        ?>
        <section class="page-banner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1><?php echo strip_tags(get_the_archive_title()); ?></h1>
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php
    }
}
$solustrid_container_class = 'col-lg-12';
$solustrid_without_sidebar = 'without-sidebar-blog';
if (is_active_sidebar('sidebar')) {
    $solustrid_container_class = 'col-lg-8';
    $solustrid_without_sidebar = 'with-sidebar-blog';
}
?>
<div class="sidebar-page-container-archive <?php echo esc_attr($solustrid_without_sidebar); ?>">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Our Blog-->
            <div class="content-side <?php echo esc_attr($solustrid_container_class); ?> col-md-12 col-sm-12">
                <div class="our-blog index-blog-area">
                    <!-- News Block -->
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => '<span class="fa fa-angle-left"></span>',
                            'next_text' => '<span class="fa fa-angle-right"></span>'
                        ));
                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>
            </div>
            <?php
            if (is_active_sidebar('sidebar')) {
                get_sidebar();
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();