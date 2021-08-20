<?php
/* Template Name: Contact Page */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (!is_home() && !is_front_page()) :
            $show_breadcrumb = get_post_meta(get_the_ID(), 'framework_show_breadcrumb', true);
            $show_title = get_post_meta(get_the_ID(), 'framework_show_page_title', true);
            ?>
            <!--Page Title-->
            <section class="page-banner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <?php if ($show_title != 'off') : ?>
                            <header class="entry-header">
                                <?php echo esc_html(the_title('<h1>', '</h1>')); ?>
                            </header>
                        <?php endif; ?>
                        <?php if ($show_breadcrumb != 'off') : ?>
                            <?php do_action('solustrid_breadcrumb'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
            <?php
        endif;

        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();