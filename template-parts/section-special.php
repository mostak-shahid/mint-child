<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-special-animation'];
$animation_delay = ( $mosacademy_options['sections-special-animation-delay'] ) ? $mosacademy_options['sections-special-animation-delay'] : 0;
$title = $mosacademy_options['sections-special-title'];
$content = $mosacademy_options['sections-special-content'];
$media = $mosacademy_options['sections-special-media'];
$url = $mosacademy_options['sections-special-url'];


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_special', $page_details ); 
?>
<section id="section-special" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">
		
		<?php 
		/*
		* action_before_special hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_special', $page_details ); 
		?>
		
			<div class="row justify-content-end">
				<div class="col-lg-6 order-last">
				<?php if ($media['id']) : ?>
					<img src="<?php echo wp_get_attachment_url( $media['id'] ) ?>" class="img-fluid img-special w-lg-100" alt="<?php echo $alt_tag['inner'] . do_shortcode( strip_tags($title) ); ?>" width="<?php echo $media['width'] ?>" height="<?php echo $media['height'] ?>">
				<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="wrapper">
						<?php if ($title) : ?>				
							<div class="title-wrapper">
								<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
							</div>
						<?php endif; ?>
						<?php if ($content) : ?>				
							<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
						<?php endif; ?>	
						<?php if ($url['text_field_1'] && $url['text_field_2']) : ?>
							<a href="<?php echo esc_url( do_shortcode( $url['text_field_2'] ) ) ?>" class="btn btn-special"><?php echo do_shortcode( $url['text_field_1'] ) ?></a>
						<?php endif ?>					
					</div>
				</div>
			</div>

		<?php 
		/*
		* action_after_special hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_special', $page_details ); 
		?>	
	</div>
</section>
<?php do_action( 'action_below_special', $page_details  ); ?>