<?php if ( get_the_posts_pagination() !== '' ): ?>

    <div class="qodef-m-pagination qodef--wp qodef-has--circle-hover">
		<?php
		// Load posts pagination (in order to override template use navigation_markup_template filter hook)
		the_posts_pagination( array(
            'prev_text'          => neobeat_get_icon( 'ion-ios-arrow-back', 'ionicons', '&blacktriangleleft; '.esc_html__( 'Prev', 'neobeat' ) ),
            'next_text'          => neobeat_get_icon( 'ion-ios-arrow-forward', 'ionicons', esc_html__( 'Next', 'neobeat' ).'  &blacktriangleright;' ),
            'after_page_number' => '<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>',
		) ); ?>
    </div>

<?php endif; ?>