<div class="qodef-e-media">
	<?php switch ( get_post_format() ) {
		case 'gallery':
			neobeat_template_part( 'blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			neobeat_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			neobeat_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			neobeat_template_part( 'blog', 'templates/parts/post-info/image' );
			break;
	} ?>
</div>