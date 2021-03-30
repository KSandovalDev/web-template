<?php if ( isset( $query_result ) && intval( $query_result->max_num_pages ) > 1 ) { ?>
	<div class="qodef-m-pagination qodef--standard qodef-has--circle-hover">
		<div class="qodef-m-pagination-inner">
			<nav class="qodef-m-pagination-items" role="navigation">
				<div class="qodef-m-pagination-item qodef--prev">
					<a href="#" data-paged="1">
						<?php neobeat_render_icon( 'ion-ios-arrow-back', 'ionicons', '' ); ?>
					</a>
				</div>
				<?php for ( $i = 1; $i <= intval( $query_result->max_num_pages ); $i ++ ) {
					$classes     = $i === 1 ? 'qodef--active' : '';
					$formatted_i = sprintf( "%01d", $i );
					?>
					<div class="qodef-m-pagination-item qodef--number qodef--number-<?php echo esc_attr( $i ); ?> <?php echo esc_attr( $classes ); ?>">
						<a href="#" data-paged="<?php echo esc_attr( $i ); ?>">
							<?php echo esc_html( $formatted_i ); ?>
							<svg class="qodef-svg-circle"><circle cx="50%" cy="50%" r="45%"></circle></svg>
						</a>
					</div>
				<?php } ?>
				<div class="qodef-m-pagination-item qodef--next">
					<a href="#" data-paged="2">
						<?php neobeat_render_icon( 'ion-ios-arrow-forward', 'ionicons', '' ); ?>
					</a>
				</div>
			</nav>
		</div>
	</div>
<?php } ?>