<?php
/**
 * Template Name: Single Service
 * Template Post Type: post
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package solustrid_services
 */
get_header();
if (!is_home() && !is_front_page()) :
    $show_breadcrumb = get_post_meta(get_the_ID(), 'framework_show_breadcrumb', true);
    ?>
    <!--Page Title-->
    <section class="page-banner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <?php the_title('<h1>', '</h1>'); ?>
                <?php if ($show_breadcrumb != 'off') : ?>
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <?php
endif;
?>
<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar padding-right">
                    <?php get_sidebar('services'); ?>
                </aside>
            </div>
            <!--Content Side / Services Detail-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-detail">
                    <div class="inner-box">
                        <div class="image">
                            <?php the_post_thumbnail('solustrid-serives-single'); ?>
                        </div>
                        <div class="lower-content">
                            <!-- Title Box -->
                            <div class="title-box">
                                <?php
                                $sub_title = get_post_meta(get_the_ID(), 'framework-service-sub-title', TRUE);
                                ?>
                                <div class="title"><?php echo wp_kses_post($sub_title); ?></div>
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <?php
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                            ?>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();