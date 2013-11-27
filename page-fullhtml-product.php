<?php
/*
Template Name: Product
*/
?>

<?php get_header(); ?>

			<div id="content">
				<header class="page-header-container">
					<?php echo get_post_meta($post->ID, 'pageheader', true); ?>
				</header>
				<div id="inner-content">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<?php 
								remove_filter ('the_content', 'wpautop');
								the_content();
							?>

							<div class="grid-container">
								<div class="grid-col-66 product-features">
									<?php
										$features = get_post_meta(get_the_ID(), 'feature', false);
										if($features) {
											foreach($features as $feature) {
												$values = explode("|", $feature);
												$icon = $values[0];
												$text = $values[1];

												echo '<p><i class="'.$icon.'"></i>'.$text.'</p>';
											}
										}
									?>
								</div>
								<div class="grid-col-33 product-screenshots">
									<?php
										$screenshots = get_post_meta(get_the_ID(), 'screenshot', false);
										if($screenshots) {
											foreach($screenshots as $screenshot) {
												$values = explode("|", $screenshot);
												$thumb = $values[0];
												$full = $values[1];

												echo '<a rel="group" class="fancybox" href="'.$full.'">';
												echo '<img src="'.$thumb.'" />';
												echo '</a>';
											}
										}
									?>
								</div>
							</div>

						</article> <?php // end article ?>

					<?php endwhile; else : ?>

						<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
