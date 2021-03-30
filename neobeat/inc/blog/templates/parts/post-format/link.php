<?php
$link_url_meta  = get_post_meta( get_the_ID(), 'qodef_post_format_link', true );
$link_url       = ! empty( $link_url_meta ) ? $link_url_meta : get_the_permalink();
$link_text_meta = get_post_meta( get_the_ID(), 'qodef_post_format_link_text', true );

$blog_list_image = get_post_meta( get_the_ID(), 'qodef_blog_list_image', true );
$has_image       = ! empty ( $blog_list_image ) || has_post_thumbnail();
$image_url       = get_the_post_thumbnail_url( get_the_ID() );
$style           = ! empty( $image_url ) ? 'background-image: url( ' . esc_url( $image_url ) . ')' : '';

if ( ! empty( $link_url ) ) {
	$link_text = ! empty( $link_text_meta ) ? $link_text_meta : get_the_title();
	$title_tag = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h4';
	?>
	<div class="qodef-e-link" <?php echo neobeat_is_installed( 'framework' ) ? qode_framework_inline_style( $style ) : ''; ?>>
		<?php neobeat_render_icon( 'icon_link', 'elegant-icons', '' ); ?>
		<<?php echo esc_attr( $title_tag ); ?> class="qodef-e-link-text"><?php echo esc_html( $link_text ); ?></<?php echo esc_attr( $title_tag ); ?>>
		<a itemprop="url" class="qodef-e-link-url" href="<?php echo esc_url( $link_url ); ?>" target="_blank"></a>
	</div>
<?php } ?>