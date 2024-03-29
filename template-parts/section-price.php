<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-price-animation'];
$animation_delay = ( $mosacademy_options['sections-price-animation-delay'] ) ? $mosacademy_options['sections-price-animation-delay'] : 0;
$title = $mosacademy_options['sections-price-title'];
$content = $mosacademy_options['sections-price-content'];
$slides = $mosacademy_options['sections-price-details'];


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_price', $page_details ); 
?>
<section id="section-price" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">
		
		<?php 
		/*
		* action_before_price hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_price', $page_details ); 
		?>
				<?php if ($title) : ?>				
					<div class="title-wrapper">
						<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
					</div>
				<?php endif; ?>
				<?php if ($content) : ?>				
					<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
				<?php endif; ?>
				<?php if ($slides) : ?>
					<div class="row justify-content-center">
					<?php foreach ($slides as $slide) : ?>
						<div class="col-lg-4"><a class="btn btn-block btn-price" href="<?php echo esc_url(do_shortcode( $slide['link_url'] )) ?>" <?php if ($slide['target']) echo 'target="_blank"';?>><?php echo do_shortcode( $slide['title'] ) ?></a></div>
					<?php endforeach; ?>
					</div>
				<?php endif; ?>
		<?php 
		/*
		* action_after_price hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_price', $page_details ); 
		?>	
	</div>
</section>
<?php do_action( 'action_below_price', $page_details  ); ?>