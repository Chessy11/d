<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
?>
<div class="inner-box">
    <section class="no-results not-found">
        <header class="page-header">
            <h1 class=""><?php esc_html_e('Nothing Found', 'solustrid'); ?></h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <?php
            if (is_home() && current_user_can('publish_posts')) :
                printf(
                        '<p>' . wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'solustrid'), array(
                            'a' => array(
                                'href' => array(),
                            ),
                                )
                        ) . '</p>', esc_url(admin_url('post-new.php'))
                );
            elseif (is_search()) :
                ?>
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'solustrid'); ?></p>
                <?php
                get_search_form();
            else :
                ?>
                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'solustrid'); ?></p>
                <?php
                get_search_form();
            endif;
            ?>
        </div><!-- .page-content -->
    </section><!-- .no-results -->
</div>
