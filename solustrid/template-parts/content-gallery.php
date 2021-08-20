<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
$post_class = 'news-block-two';
if (!has_post_thumbnail()) {
    $post_class = 'news-block-two no_post_thumnail';
}
?>
<!-- News Block -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $gallery = get_post_meta(get_the_ID(), 'framework-gallery');
    if (!$gallery) {
        $solustrid_no_image = 'thum_no_image';
    }
    ?>
    <div class="<?php echo esc_attr($post_class); ?>">
        <div class="inner-box <?php echo esc_attr($solustrid_no_image); ?>">
            <?php
            if (!empty($gallery)) {
                ?>
                <div class="gallery-column">
                    <div class="row clearfix">
                        <?php
                        foreach ($gallery as $single) {
                            ?>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <?php echo wp_get_attachment_image($single, 'post-thumbnail') ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }
            ?>
            <div class="lower-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="content-inner">
                    <?php
                    if ('post' === get_post_type()) :
                        ?>
                        <ul class="post-meta">
                            <li>
                                <?php
                                solustrid_posted_on();
                                solustrid_posted_by();
                                ?>
                            </li>
                            <li>
                                <?php solustrid_entry_footer(); ?>
                            </li>
                        </ul><!-- .entry-meta -->
                    <?php endif; ?>
                    <?php
                    the_title('<h3><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                    ?>
                    <div class="text">
                        <?php
                        if (get_option('rss_use_excerpt')) {
                            the_excerpt();
                        } else {
                            the_excerpt();
                        }
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'solustrid'),
                            'after' => '</div>',
                        ));
                        ?>
                    </div>
                    <a class="arrow" href="<?php echo esc_url(get_permalink()); ?>"><span class="icon fas fa-angle-right"></span></a>
                        <?php
                        do_action('solustrid_share_button');
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>