<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solustrid
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
// You can start editing here -- including this comment!
if (have_comments()) :
    ?>
    <!--Comments Area-->
    <div class="comments-area">
        <div class="group-title">
            <h2 class="comments-title">
                <span>
                    <?php
                    printf(// WPCS: XSS OK.
                            /* translators: 1: comment count number, 2: title. */
                            esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'solustrid')), number_format_i18n(get_comments_number()), '<b>' . esc_html(get_the_title()) . '</b>'
                    );
                    ?>
                </span>
            </h2>
        </div>

        <?php
        // You can start editing here -- including this comment!
        if (have_comments()) :
            ?>
            <!-- .comments-title -->
            <?php the_comments_navigation(); ?>
            <div class="comment-list content-inner">
                <?php
                wp_list_comments(array(
                    'style' => 'div',
                    'callback' => 'solustrid_comments',
                    'short_ping' => true,
                ));
                ?>
            </div><!-- .comment-list -->
            <?php
            the_comments_navigation();
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if (!comments_open()) :
                ?>
                <p class="no-comments"><?php esc_html_e('Comments are closed.', 'solustrid'); ?></p>
                <?php
            endif;
        endif; // Check for have_comments().
        ?>
    </div>
    <?php
//You can start editing here -- including this comment!
endif;

 if (have_comments()) { ?>
    <div id="comments" class="comments-area-custom">
    <?php } else { ?>
        <div id="comments" class="comments-area-custom custom-comment-margin">
            <?php
        }
        $user = wp_get_current_user();
        $solustrid_user_identity = $user->display_name;
        $req = get_option('require_name_email');
        $aria_req = $req ? " aria-required='true'" : '';

        $formargs = array(
            'id_form' => 'commentform',
            'id_submit' => 'submit',
            'class_form' => 'form-default',
            'title_reply' => '<span class="group-title"><span>' . esc_html__('Leave a Reply', 'solustrid') . '</span></span>',
            'title_reply_to' => esc_html__('Leave a Reply to %s', 'solustrid'),
            'cancel_reply_link' => esc_html__('Cancel Reply', 'solustrid'),
            'label_submit' => esc_html__('Post Comment', 'solustrid'),
            'submit_button' => '<button type="submit" name="%1$s" id="%2$s" class="%3$s theme-btn btn-style-two">%4$s</button>',
            'comment_field' => '<div class="row clearfix"><div class="col-lg-12 col-md-12 col-sm-12 form-group"><textarea placeholder="' . esc_attr__('Comment', 'solustrid') . '"  class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
            '</textarea></div></div>',
            'must_log_in' => '<div>' .
            sprintf(
                    wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'solustrid'), array('a' => array('href' => array()))), wp_login_url(apply_filters('the_permalink', esc_url(get_permalink())))
            ) . '</div>',
            'logged_in_as' => '<div class="logged-in-as">' .
            sprintf(
                    wp_kses(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">Log out?</a>', 'solustrid'), array('a' => array('href' => array()))), esc_url(admin_url('profile.php')), $solustrid_user_identity, wp_logout_url(apply_filters('the_permalink', esc_url(get_permalink()))), esc_attr__('Log out of this account', 'solustrid')
            ) . '</div>',
            'comment_notes_before' => '<p>' .
            esc_html__('Your email address will not be published.', 'solustrid') . ( $req ? '<span class="required">*</span>' : '' ) .
            '</p>',
            'comment_notes_after' => '',
            'fields' => apply_filters('comment_form_default_fields', array(
                'author' =>
                '<div class="row clearfix"><div class="col-lg-6 col-md-6 col-sm-12  form-group">'
                . '<input id="author"  class="form-control" name="author" placeholder="' . esc_attr__('Name', 'solustrid') . '" type="text" value="' . esc_attr($commenter['comment_author']) .
                '" size="30"' . $aria_req . ' /></div>',
                'email' =>
                '<div class="col-lg-6 col-md-6 col-sm-12 form-group">'
                . '<input id="email" name="email"  class="form-control" type="text"  placeholder="' . esc_attr__('Email', 'solustrid') . '" value="' . esc_attr($commenter['comment_author_email']) .
                '" size="30"' . $aria_req . ' /></div></div>'
                    )
            )
        );
        ?>
        <div class="comment-form">
        <?php
        comment_form($formargs);
        ?>
        </div>
    </div><!-- #comments -->