		<footer class="footer" role="contentinfo">

			<div id="inner-footer" class="grid-container">

				<div class="grid-col-33"><?php get_sidebar('footer1'); ?></div>
				<div class="grid-col-33"><?php get_sidebar('footer2'); ?></div>
				<div class="grid-col-33"><?php get_sidebar('footer3'); ?></div>

			</div> <?php // end #inner-footer ?>

			<div class="outer-footer">
				<div class="grid-container">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
				</div>
			</div>

		</footer> <?php // end footer ?>

	</div> <? // end #site-container ?>

	<?php // all js scripts are loaded in library/bones.php ?>
	<?php wp_footer(); ?>

	</body>

</html> <?php // end page. what a ride! ?>
