				<div id="footerwidget1" class="sidebar clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'footerwidget1' ) ) : ?>

						<?php dynamic_sidebar( 'footerwidget1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>