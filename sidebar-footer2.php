				<div id="footerwidget2" class="sidebar clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'footerwidget2' ) ) : ?>

						<?php dynamic_sidebar( 'footerwidget2' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>