<?php 

extract(shortcode_atts(array(
	"name" => '',
	"subtitle" => '', 
	"quote" => '', 
	'image' => '', 
	'add_image_shadow' => '', 
	'star_rating' => 'none'), $atts));

if( ! isset( $GLOBALS['nectar-testimonial-slider-style'] ) || ! defined( 'NECTAR_THEME_NAME' ) ) {
	$GLOBALS['nectar-testimonial-slider-style'] = 'default';
}
$has_bg = null;
$bg_markup_escaped = null;

if( !empty($image) ) {
	
	$image_src = wp_get_attachment_image_src($image, 'medium');
	$image     = $image_src[0];
	$has_bg    = 'has-bg';
	
	$bg_markup_escaped = 'style="background-image: url('.esc_url($image).');"';
}

$open_quote  = ($GLOBALS['nectar-testimonial-slider-style'] === 'minimal' || $GLOBALS['nectar-testimonial-slider-style'] === 'multiple_visible_minimal') ? '<span class="open-quote">&#8220;</span>' : null; 
$close_quote = ($GLOBALS['nectar-testimonial-slider-style'] === 'minimal' || $GLOBALS['nectar-testimonial-slider-style'] === 'multiple_visible_minimal') ? '<span class="close-quote">&#8221;</span>' : null; 

if( $GLOBALS['nectar-testimonial-slider-style'] !== 'minimal' ) {
 	$image_icon_markup = '<div data-shadow="' . esc_attr($add_image_shadow) . '" class="image-icon '.$has_bg.'" '.$bg_markup_escaped.'>&#8220;</div>';
} else {
	$image_icon_markup = ($GLOBALS['nectar-testimonial-slider-style'] == 'minimal' && $has_bg == 'has-bg') ? '<div data-shadow="' . esc_attr($add_image_shadow) . '" class="image-icon '.$has_bg.'" '.$bg_markup_escaped.'>&#8220;</div>' : null;
}

$rating_markup = null;

if( $star_rating !== 'none' ) {
	$rating_markup = '<span class="star-rating-wrap"> <span class="star-rating"><span style="width: '.$star_rating.';" class="filled"></span></span></span>';
} 

if( $GLOBALS['nectar-testimonial-slider-style'] !== 'multiple_visible_minimal' ) {
	echo '<blockquote> '.$image_icon_markup.' <p>'. $open_quote . wp_kses_post($quote) . $close_quote. $rating_markup .' <span class="bottom-arrow"></span></p>'. '<span class="testimonial-name">'.wp_kses_post($name).'</span><span class="title">'.wp_kses_post($subtitle).'</span></blockquote>';
} else {
	echo '<blockquote> <div class="inner">'.$image_icon_markup.'<span class="wrap"><span class="testimonial-name">'.wp_kses_post($name).'</span><span class="title">'.wp_kses_post($subtitle).'</span></span> <p>'.$open_quote . wp_kses_post($quote) . $close_quote.' </p>'.$rating_markup.'</div></blockquote>';
}

?>