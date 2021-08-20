<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package solustrid
 */
if ( ! function_exists( 'solustrid_posted_on' ) ) :

	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function solustrid_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
				/* translators: %s: post date. */
			esc_html( '%s' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
	}

endif;

if ( ! function_exists( 'solustrid_posted_by' ) ) :

	/**
	 * Prints HTML with meta information for the current author.
	 */
	function solustrid_posted_by() {
		$byline = sprintf(
				/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'solustrid' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( ucfirst( get_the_author() ) ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	}

endif;


if ( ! function_exists( 'solustrid_entry_footer' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function solustrid_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'solustrid' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html( '%1$s' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
		}
	}

endif;

if ( ! function_exists( 'solustrid_entry_footer_1' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function solustrid_entry_footer_1() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'solustrid' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'solustrid' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'solustrid' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'solustrid' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
									/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'solustrid' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'solustrid' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}

endif;

if ( ! function_exists( 'solustrid_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function solustrid_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->
		<?php else : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>">
				<?php
				the_post_thumbnail(
					'solustrid_blog_post_featured_image',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>
			<?php
		endif; // End is_singular().
	}
endif;



if ( ! function_exists( 'solustrid_comments_count' ) ) :

	function solustrid_comments_count( $suffix = null ) {

		if ( get_comments_number( get_the_ID() ) == 0 ) {
			$comments_count = '<a href="' . esc_url( get_permalink() ) . '" >' . $suffix . get_comments_number( get_the_ID() ) . __( ' comments', 'solustrid' ) . '</a>';
		} elseif ( get_comments_number( get_the_ID() ) > 1 ) {
			$comments_count = '<a href="' . esc_url( get_permalink() ) . '" >' . $suffix . get_comments_number( get_the_ID() ) . __( ' comments', 'solustrid' ) . '</a>';
		} else {
			$comments_count = '<a href="' . esc_url( get_permalink() ) . '#comments" >' . $suffix . get_comments_number( get_the_ID() ) . __( ' comment', 'solustrid' ) . '</a>';
		}

		echo sprintf( esc_html( '%s' ), $comments_count ); // WPCS: XSS OK.
	}

endif;

if ( ! function_exists( 'solustrid_author_image' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function solustrid_author_image() {
		$get_author_id       = get_the_author_meta( 'ID' );
		$get_author_gravatar = get_avatar_url( $get_author_id, array( 'size' => 35 ) );
		$byline              = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'Author image', 'solustrid' ),
			'<img src="' . esc_url( $get_author_gravatar ) . '" alt=' . esc_attr( 'Author image', 'solustrid' ) . '>'
		);

		echo '' . $byline . ''; // WPCS: XSS OK.

	}
endif;
