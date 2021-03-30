<?php
$audio_meta = get_post_meta( get_the_ID(), 'qodef_post_format_audio_url', true );
$has_oembed = false;

if ( ! empty( $audio_meta ) ) {
	$oembed = wp_oembed_get( $audio_meta );
	
	if ( ! empty( $oembed ) ) {
		$has_oembed = true;
	}
}
?>
<article <?php post_class( 'qodef-blog-item qodef-e ' ); ?>>
	<div class="qodef-e-inner">
		<?php
		// Include post media
		neobeat_template_part( 'blog', 'templates/parts/post-info/media' );
		?>
		<?php if ( ! $has_oembed ) { ?>
			<div class="qodef-e-content">
				<div class="qodef-e-info qodef-info--top">
					<?php
					// Include post date info
					neobeat_template_part( 'blog', 'templates/parts/post-info/date' );
					
					// Include post comments info
					neobeat_template_part( 'blog', 'templates/parts/post-info/comments' );
					
					// Include post category info
					neobeat_template_part( 'blog', 'templates/parts/post-info/category' );
					
					// Include post tags info
					neobeat_template_part( 'blog', 'templates/parts/post-info/tags' );
					?>
				</div>
				<div class="qodef-e-text">
					<?php
					// Include post title
					neobeat_template_part( 'blog', 'templates/parts/post-info/title', '', array( 'title_tag' => 'h3' ) );
					
					// Include post excerpt
					neobeat_template_part( 'blog', 'templates/parts/post-info/excerpt' );
					
					// Hook to include additional content after blog single content
					do_action( 'neobeat_action_after_blog_single_content' );
					?>
				</div>
				<div class="qodef-e-info qodef-info--bottom">
					<div class="qodef-e-info-left">
						<?php
						// Include post author info
						neobeat_template_part( 'blog', 'templates/parts/post-info/author' );
						?>
					</div>
					<div class="qodef-e-info-right">
						<?php
						// Include social share
						do_action( 'neobeat_action_after_blog_bottom_right_content' );
						?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</article>