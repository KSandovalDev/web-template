<?php
$gallery_meta = get_post_meta( get_the_ID(), 'qodef_post_format_gallery_images', true );

if ( ! empty( $gallery_meta ) ) { ?>
	<div class="qodef-e-media-gallery qodef-swiper-container">
		<div class="swiper-wrapper">
			<?php
			$gallery_images = explode( ',', $gallery_meta );
			
			foreach ( $gallery_images as $image_id ) { ?>
				<div class="qodef-e-media-gallery-item swiper-slide">
					<?php if ( ! is_single() ) { ?>
						<a itemprop="url" href="<?php the_permalink(); ?>">
					<?php } ?>
						<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
					<?php if ( ! is_single() ) { ?>
						</a>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		<div class="swiper-navigation">
			<div class="swiper-button-prev">
				<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>
				<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>
				<?php echo neobeat_get_icon( 'ion-ios-arrow-back', 'ionicons', '&blacktriangleleft; '.esc_html__( 'Prev', 'neobeat' ) ); ?>
			</div>
			<div class="swiper-button-next">
				<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>
				<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>
				<?php echo neobeat_get_icon( 'ion-ios-arrow-forward', 'ionicons', esc_html__( 'Next', 'neobeat' ) . ' &blacktriangleright;' );?>
			</div>
		</div>
	</div>
<?php } else {
	// Include featured image
	neobeat_template_part( 'blog', 'templates/parts/post-info/image' );
} ?>
