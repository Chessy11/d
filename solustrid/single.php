<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package solustrid
 */
get_header();
if (!is_home() && !is_front_page()) {
    $solustrid_options = solustrid_options();
    $solustrid_show_breadcrumb = $solustrid_options['solustrid-show-breadcrumb'];
    $solustrid_show_post_title = $solustrid_options['solustrid-show-post-title'];
    if ($solustrid_show_breadcrumb && $solustrid_show_post_title) {
        ?>
        <section class="page-banner blog-banner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1><?php echo esc_html(get_the_title(get_option('page_for_posts', true))); ?></h1>
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
<div class="sidebar-page-container <?php echo esc_attr($solustrid_without_sidebar); ?>">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side <?php echo esc_attr($solustrid_container_class); ?> col-md-12 col-sm-12">
                <div class="blog-detail index-blog-detail">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('template-parts/single/content', get_post_format());
                        ?>
                        <div class="new-article">
                            <div class="clearfix">
                                <?php
                                the_post_navigation(array(
                                    'prev_text' => '<span class="fas fa-angle-left"></span>' . esc_html__('prev article', 'solustrid'),
                                    'next_text' => esc_html__('next article', 'solustrid') . '<span class="fas fa-angle-right"></span>'
                                ));
                                ?>
                            </div>
                        </div>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile; // End of the loop.
                    ?>					
                </div>
            </div>
            <!--Sidebar Side-->
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