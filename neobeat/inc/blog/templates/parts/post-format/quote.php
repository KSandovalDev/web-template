<?php
$quote_meta = get_post_meta( get_the_ID(), 'qodef_post_format_quote_text', true );
$quote_text = ! empty( $quote_meta ) ? $quote_meta : get_the_title();
$blog_list_image = get_post_meta( get_the_ID(), 'qodef_blog_list_image', true );
$has_image       = ! empty ( $blog_list_image ) || has_post_thumbnail();
$image_url       = get_the_post_thumbnail_url( get_the_ID() );
$style           = ! empty( $image_url ) ? 'background-image: url( ' . esc_url( $image_url ) . ')' : '';

if ( ! empty( $quote_text ) ) {
	$quote_author     = get_post_meta( get_the_ID(), 'qodef_post_format_quote_author', true );
	$title_tag        = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h4';
	$author_title_tag = isset( $author_title_tag ) && ! empty( $author_title_tag ) ? $author_title_tag : 'span';
	?>
	<div class="qodef-e-quote" <?php echo neobeat_is_installed( 'framework' ) ? qode_framework_inline_style( $style ) : ''; ?>>
		<<?php echo esc_attr( $title_tag ); ?> class="qodef-e-quote-text"><?php echo esc_html( $quote_text ); ?></<?php echo esc_attr( $title_tag ); ?>>
		<?php if ( ! empty( $quote_author ) ) { ?>
			<<?php echo esc_attr( $author_title_tag ); ?> class="qodef-e-quote-author"><?php echo esc_html( $quote_author ); ?></<?php echo esc_attr( $author_title_tag ); ?>>
		<?php } ?>
		<?php if ( ! is_single() ) { ?>
			<a itemprop="url" class="qodef-e-quote-url" href="<?php the_permalink(); ?>"></a>
		<?php } ?>
	</div>
<?php } ?>