<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
?>
<!-- News Block -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $post_class = 'news-block-two';
    if (!has_post_thumbnail()) {
        $post_class = 'news-block-two no_post_thumnail';
    }
    $solustrid_no_image = '';
    if (!has_post_thumbnail()) {
        $solustrid_no_image = 'thum_no_image';
    }
    ?>
    <div class="<?php echo esc_attr($post_class); ?>">
        <div class="inner-box <?php echo esc_attr($solustrid_no_image); ?>">
            <?php if (has_post_thumbnail()) { ?>
                <div class="image wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <?php solustrid_post_thumbnail(); ?>
                </div>
                <?php
            }
            if (is_sticky()) {
                ?>
                <div class="lower-content wow fadeInUp sticky_post_area" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <?php
                } else {
                    ?>
                    <div class="lower-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <?php }
                    ?>
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
                            <?php
                        endif;
                        if (is_sticky()) {
                            echo '<div class="sticky_post_icon " title="' . esc_attr__('Sticky Post', 'solustrid') . '"><i class="fas fa-paperclip"></i>' . esc_html__('Sticky Post', 'solustrid') . '</div>';
                        }
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
                                'after' => '</div>'                               
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