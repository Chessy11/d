<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
get_header();
if (!is_home() && !is_front_page()) {
    do_action('solustrid_breadcrumb');
}
?>
<!-- page-container-->
<div class="auto-container">
    <div class="row clearfix">
        <div class="page-detail index-page-detail">
            <div class="content-inner">
                <div class="text">
                    <?php
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', 'page');
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                        endwhile; // End of the loop.
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();