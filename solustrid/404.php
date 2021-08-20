<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package solustrid
 */
get_header();
?>
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Our Blog-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="our-blog">
                    <!-- News Block -->
                    <div class="title-box"><h1><?php echo esc_html__('Oops! That page can&rsquo;t be found.', 'solustrid'); ?></h1></div>
                    <p><?php echo esc_html__('It looks like nothing was found at this location. Maybe try a search?', 'solustrid'); ?></p>
                    <?php get_search_form(); ?>
                </div
            </div>
        </div>
    </div>
</div>
<?php
get_footer();