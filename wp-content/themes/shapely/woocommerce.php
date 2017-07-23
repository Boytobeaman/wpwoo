<?php

get_header(); ?>
	<div class="row">
		<div id="primary" class="col-md-12 mb-xs-24">
			<?php woocommerce_content(); ?>
		</div><!-- #primary -->
		<aside id="secondary" class="widget-area col-md-4 hidden" role="complementary">
			<?php dynamic_sidebar( 'shop-sidebar' ); ?>
		</aside><!-- #secondary -->
	</div>
<?php
get_footer();
