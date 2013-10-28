			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div class="footer-col fourcol first"><?php get_sidebar('footer1'); ?></div>
					<div class="footer-col fourcol"><?php get_sidebar('footer2'); ?></div>
					<div class="footer-col fourcol last"><?php get_sidebar('footer3'); ?></div>

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

				</div> <?php // end #inner-footer ?>

				<div class="outer-footer">
					<div class="wrap clearfix">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
					</div>
				</div>

			</footer> <?php // end footer ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
