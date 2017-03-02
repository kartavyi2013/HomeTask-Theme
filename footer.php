<?php

?>
			</div><!-- #content-box -->

			<div id="footer" role="contentinfo">
				<div id="colophon">

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with two columns of widgets.
			 */
			get_sidebar( 'footer' );
		?>

					<div id="site-info">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &middot; <?php bloginfo( 'description' ); ?>
					</div><!-- #site-info -->

					<div id="site-generator">
						 <a href="http://wp-templates.ru/">Шаблоны WordPress</a>
					</div><!-- #site-generator -->

				</div><!-- #colophon -->
			</div><!-- #footer -->

		</div><!-- #page .blog -->
</div><!-- #container -->

<?php do_action( 'hometask_after' ); ?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
