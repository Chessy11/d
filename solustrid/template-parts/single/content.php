<?php
/**
 * Template part for displaying posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="<?php echo esc_attr('inner-box'); ?>">
        <?php
        $no_images_what = '';
        if (has_post_thumbnail()) {
            ?>
            <div class="image">
                <?php solustrid_post_thumbnail(); ?>
            </div>
            <?php
        } else {
            $no_images_what = 'no-images-what';
        }
        ?>
        <div class="lower-content">
            <div class="content-inner">
                <div class="title-box <?php echo esc_attr($no_images_what); ?>">
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
                        </ul>
                        <!-- .entry-meta -->
                    <?php endif; ?>
                    <?php the_title('<h2>', '</h2>'); ?>
                </div>
                <div class="text">
                    <?php
                    the_content(sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'solustrid'), get_the_title('<span class="screen-reader-text">"', '"</span>')
                    ));
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'solustrid'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
                <!--post-share-options-->
                <div class="post-share-options">
                    <div class="tags">
                        <?php
                        solustrid_entry_footer();
                        ?>
                    </div>
                </div>
                <!-- New Article -->
            </div>
        </div>
    </div>
</div>