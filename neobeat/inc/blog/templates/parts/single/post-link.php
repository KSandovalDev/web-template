<article <?php post_class( 'qodef-blog-item qodef-e' ); ?>>
	<div class="qodef-e-inner">
		<?php
		// Include post format part
		neobeat_template_part( 'blog', 'templates/parts/post-format/link' ); ?>
		
		<div class="qodef-e-content">
			<div class="qodef-e-text">
				<?php
				// Include post content
				the_content();
				
				// Hook to include additional content after blog single content
				do_action( 'neobeat_action_after_blog_single_content' );
				?>
			</div>
		</div>
	</div>
</article>