<div class="qodef-e-info-item qodef-e-info-author">
	<a itemprop="author" class="qodef-e-info-author-image-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
	</a>
	<span class="qodef-e-info-author-label"><?php esc_html_e( 'By', 'neobeat' ); ?></span>
	<a itemprop="author" class="qodef-e-info-author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
		<?php the_author_meta( 'display_name' ); ?>
	</a>
</div>