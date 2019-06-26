<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-map-animation'];
$animation_delay = ( $mosacademy_options['sections-map-animation-delay'] ) ? $mosacademy_options['sections-map-animation-delay'] : 0;
$title = $mosacademy_options['sections-map-title'];
$content = $mosacademy_options['sections-map-content'];


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_map', $page_details ); 
?>
<section id="section-map" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">		
		<?php 
		/*
		* action_before_map hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_map', $page_details ); 
		?>
				<?php if ($title) : ?>				
					<div class="title-wrapper">
						<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
					</div>
				<?php endif; ?>
				<?php if ($content) : ?>				
					<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
				<?php endif; ?>
				<div class="row">
					<div class="col-lg-4 map-con" style="background-image: url(<?php echo wp_get_attachment_url( $mosacademy_options['contact-address'][0]['attachment_id'])?>);"><a class="position-absolute hidden-link" href="<?php echo esc_url(do_shortcode($mosacademy_options['contact-address'][0]['map_link']))?>" target="_blank">View Map</a></div>
					<div class="col-lg-4 map-con" style="background-image: url(<?php echo wp_get_attachment_url( $mosacademy_options['contact-address'][1]['attachment_id'])?>);"><a class="position-absolute hidden-link" href="<?php echo esc_url(do_shortcode($mosacademy_options['contact-address'][1]['map_link']))?>" target="_blank">View Map</a></div>
					<div class="col-lg-4 map-con" style="background-image: url(<?php echo wp_get_attachment_url( $mosacademy_options['contact-address'][2]['attachment_id'])?>);"><a class="position-absolute hidden-link" href="<?php echo esc_url(do_shortcode($mosacademy_options['contact-address'][2]['map_link']))?>" target="_blank">View Map</a></div>
				</div>


		<?php 
		/*
		* action_after_map hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_map', $page_details ); 
		?>	
	</div>
</section>
<?php do_action( 'action_below_map', $page_details  ); ?>