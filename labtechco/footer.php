<?php
$mailchimp_class = '';
global $ts_mainchimp_formrow;
if( !empty($ts_mainchimp_formrow) && $ts_mainchimp_formrow == 'yes' ){
	$mailchimp_class = 'ts-mailchimp-exists';
}
?>

				</div><!-- .site-content-inner -->
			</div><!-- .site-content -->
		</div><!-- .site-content-wrapper -->

		<footer id="colophon" class="site-footer <?php echo esc_attr($mailchimp_class); ?>">
			<div class="footer_inner_wrapper footer<?php echo themestek_sanitize_html_classes(themestek_footer_row_class( 'full' )); ?>">
				<div class="site-footer-bg-layer ts-bg-layer"></div>
				<div class="site-footer-w">
					<div class="footer-rows">
						<div class="footer-rows-inner">
							<?php themestek_footer_cta(); ?>
							<?php get_sidebar( 'first-footer' ); ?>
							<?php get_sidebar( 'second-footer' ); ?>
						</div><!-- .footer-inner -->
					</div><!-- .footer -->
					<?php get_sidebar( 'footer' ); ?>
				</div><!-- .footer-inner-wrapper -->
			</div><!-- .site-footer-inner -->
		</footer><!-- .site-footer -->

	</div><!-- #page .site -->

</div><!-- .main-holder -->

<!-- To Top -->
<a id="totop" href="#top"><i class="ts-labtechco-icon-angle-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>
