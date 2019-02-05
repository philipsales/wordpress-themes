<?php
/*
 *
 *  Single Portfolio - Top image
 *
 */

?>

<div class="ts-pf-single-content-wrapper ts-pf-view-top-image">

	<div class="themestek-common-box-shadow ts-pf-single-content-wrapper-innerbox">
		
		
		<!-- =============================================================== -->
		<div class="ts-pf-top-content">
			
			<div class="ts-row wpb_row vc_row-fluid vc_row container ts-bgimage-position-center_center">
				<div class="vc_row-o-equal-height vc_row-flex"> 	
					
					<div class="ts-column wpb_column vc_column_container vc_col-sm-8 themestek-pf-single-short-desc">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
							
								<h4 style="text-align:left;" class="ts-custom-heading "><?php esc_attr_e('PROJECT OVERVIEW','labtechco'); ?></h4>
								<?php echo themestek_portfolio_shortdesc(); ?>
								
							</div>
						</div>
					</div>

					<div class="ts-column wpb_column vc_column_container vc_col-sm-4 ts-span ts-right-span">
						<div class="vc_column-inner themestek-pf-single-details-area"> 
							<div class="wpb_wrapper">
								<h5>INFORMATION</h5>
								<?php echo themestek_portfolio_detailsbox(); ?>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<div class="ts-row wpb_row vc_row-fluid">
				<div class="vc_row container"> 	
					<div class="ts-column wpb_column vc_column_container vc_col-sm-12 ts-overlap-row">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<?php echo themestek_get_featured_media('', 'themestek-img-1170x575'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div> <!-- .ts-pf-top-content -->
		
		<?php echo themestek_portfolio_description(); ?>
		
		<!-- =============================================================== -->
			
		

	

		<div class="themestek-pf-single-content-bottom container">
			<?php
			// Portfolio Category
			$row_value = get_the_term_list( get_the_ID(), 'ts-portfolio-category', '', ' ', '' );
			if( !empty($row_value) ){ ?>
				<div class="ts-pf-single-category-w">
					<?php echo themestek_wp_kses($row_value); ?>
				</div>
			<?php } ?>
			<?php echo themestek_social_share_box('portfolio');  // Social share ?>
		</div>
		
	</div><!-- .themestek-common-box-shadow -->
	
	<div class="container">
		<div class="ts-pf-single-np-nav"><?php echo themestek_portfolio_next_prev_btn(); // Next/Prev button ?></div>
		<?php edit_post_link( esc_attr__( 'Edit', 'labtechco' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
	</div>
	
</div><!-- .ts-pf-single-content-wrapper -->



