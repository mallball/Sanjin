<?php 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_types = array(
  esc_html__('Blog Posts',' salient-core') => 'post',
);

$is_admin = is_admin();


// Get Post Categories.
$blog_types = ($is_admin) ? get_categories() : array('All' => 'all');

$blog_options = array("All" => "all");

if( $is_admin ) {
	foreach ($blog_types as $type) {
		if(isset($type->name) && isset($type->slug)) {
			$blog_options[htmlspecialchars($type->name)] = htmlspecialchars($type->slug);
    }
	}
} else {
	$blog_options['All'] = 'all';
}

// Get Project Categories.

$portfolio_options = array("All" => "all");

if( class_exists('Salient_Portfolio') ) {
  
  $post_types['Portfolio'] = 'portfolio';
    
  $portfolio_types = ($is_admin) ? get_terms('project-type') : array('All' => 'all');

  if( $is_admin ) {
    
  	foreach ($portfolio_types as $type) {
  		$portfolio_options[$type->slug] = $type->slug;
  	}

  } else {
  	$portfolio_options['All'] = 'all';
  }
  
  $portfolio_options['All'] = 'all';
  
}
    
    
return array(
  'name' => esc_html__( 'Post Grid', 'salient-core' ),
  'base' => 'nectar_post_grid',
  'icon' => 'icon-wpb-portfolio',
  "category" => esc_html__('Nectar Elements', 'salient-core'),
  'description' => esc_html__('Show posts/projects in a stylish grid', 'salient-core' ),
  'params' => array(
    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Post Type', 'salient-core' ),
      'param_name' => 'post_type',
      'value' => $post_types,
      'save_always' => true,
      "admin_label" => true,
      'description' => esc_html__('Select the post type you wish to display the categories from.', 'salient-core' ),
    ),
    array(
      "type" => "dropdown_multi",
      "heading" => esc_html__("Project Categories", "salient-core"),
      "param_name" => "portfolio_category",
      "admin_label" => true,
      "value" => $portfolio_options,
      'save_always' => true,
      "dependency" => array('element' => "post_type", 'value' => 'portfolio'),
      "description" => esc_html__("Please select the categories you would like to display in the grid. You can also select multiple categories if needed (ctrl + click on PC and command + click on Mac).", "salient-core")
    ),
    array(
      "type" => "dropdown_multi",
      "heading" => esc_html__("Blog Categories", "salient-core"),
      "param_name" => "blog_category",
      "admin_label" => true,
      "value" => $blog_options,
      'save_always' => true,
      "dependency" => array('element' => "post_type", 'value' => 'post'),
      "description" => esc_html__("Please select the categories you would like to display for your blog. You can also select multiple categories if needed (ctrl + click on PC and command + click on Mac).", "salient-core")
    ),
    
    array(
			"type" => "textfield",
			"heading" => esc_html__("Posts Per Page", "salient-core"),
			"param_name" => "posts_per_page",
			"description" => esc_html__("How many posts would you like to display per page?  Enter as a number example \"10\"", "salient-core")
		),
    
		array(
			"type" => "textfield",
			"heading" => esc_html__("Post Offset", "salient-core"),
			"param_name" => "post_offset",
			"description" => esc_html__("Optionally enter a number e.g. \"2\" to offset your posts by.", "salient-core")
		),
		
		
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Enable Sortable", "salient-core"),
			"param_name" => "enable_sortable",
			"value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
		),
    
    array(
			"type" => "dropdown",
			"heading" => esc_html__("Order", "salient-core"),
			"param_name" => "order",
			"admin_label" => false,
			"value" => array(
				'Descending' => 'DESC',
				'Ascending' => 'ASC',
			),
			'save_always' => true,
			"description" => esc_html__("Designates the ascending or descending order - defaults to descending", "salient-core")
		),
    
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Orderby", "salient-core"),
			"param_name" => "orderby",
			"admin_label" => false,
			"value" => array(
				'Date' => 'date',
				'Author' => 'author',
				'Title' => 'title',
				'Last Modified' => 'modified',
				'Random' => 'rand',
				'Comment Count' => 'comment_count'
			),
			'save_always' => true,
			"description" => esc_html__("Sort retrieved posts by parameter - defaults to date", "salient-core")
		),
		
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Pagination", "salient-core"),
			"param_name" => "pagination",
			"admin_label" => false,
			"value" => array(
				'None' => 'none',
				'Load More' => 'load-more',
			),
			'save_always' => true
		),
		
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Load More Color', 'salient-core' ),
			'value' => array(
				esc_html__( "Black", "salient-core") => "black",
				esc_html__( "Accent Color", "salient-core") => "accent-color",
				esc_html__( "Extra Color 1", "salient-core") => "extra-color-1",
				esc_html__( "Extra Color 2", "salient-core") => "extra-color-2",	
				esc_html__( "Extra Color 3", "salient-core") => "extra-color-3",
				esc_html__( "Color Gradient 1", "salient-core") => "extra-color-gradient-1",
				esc_html__( "Color Gradient 2", "salient-core") => "extra-color-gradient-2"
			),
			'save_always' => true,
			'dependency' => array(
				'element' => 'pagination',
				'value' => array('load-more'),
			),
			'param_name' => 'button_color',
			'description' => esc_html__( 'Choose a color from your','salient-core') . ' <a target="_blank" href="'. esc_url(admin_url()) .'?page=Salient&tab=6"> ' . esc_html__('globally defined color scheme','salient-core') . '</a>',
		),

    array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Columns', 'salient-core' ),
      'param_name' => 'columns',
      'value' => array(
        '4' => '4',
        '3' => '3',
        '2' => '2',
        '1' => '1'
      ),
      'std' => '4',
      'save_always' => true
    ),
    
    array(
      "type" => "dropdown",
      "heading" => esc_html__("Grid Item Spacing", "salient-core"),
      "param_name" => "grid_item_spacing",
      'save_always' => true,
      "value" => array(
        esc_html__("None", "salient-core") => "none",
        "5px" => "5px",
        "10px" => "10px",
        "15px" => "15px",
        "25px" => "25px"
      ),
      "description" => esc_html__("Please select the spacing you would like between your items. ", "salient-core")
    ),
    
    array(
      "type" => "dropdown",
      "heading" => esc_html__("Grid Item Height", "salient-core"),
      "param_name" => "grid_item_height",
      'save_always' => true,
      "value" => array(
        "Default (30%)" => "30vh",
        "40%" => "40vh",
        "50%" => "50vh",
        "60%" => "60vh",
        "75%" => "75vh"
      ),
      "description" => esc_html__("Please select the height you would like for your items to display in. The percentage is based on the viewport height that the grid is viewed on. ", "salient-core")
    ),
		
		
    
    array(
      "type" => 'checkbox',
      "heading" => esc_html__("Masonry Layout", "salient-core"),
      "param_name" => "enable_masonry",
      "description" => esc_html__("This will allow your portfolio items to display in a masonry layout as opposed to a fixed grid", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
		
		array(
      "type" => "dropdown",
      "class" => "",
      'save_always' => true,
      "heading" => esc_html__("Image Size", "salient-core"),
      "param_name" => "image_size",
      "value" => array(
        "Default (Large)" => "default",
				"small" => "small",
				"Medium" => "medium",
        "Large Featured" => "large_featured",
				"Full" => 'full'
      ),
			"description" => esc_html__("This option allows to you control what size image will load for each item in the grid. Useful to fine tune quality based on your specific use case.", "salient-core"),
      'std' => 'default',
    ),
		
		array(
      "type" => "dropdown",
      "class" => "",
      'save_always' => true,
      "heading" => esc_html__("Image Loading", "salient-core"),
      "param_name" => "image_loading",
      "value" => array(
        "Default" => "default",
				"Lazy Load" => "lazy-load",
      ),
			"description" => esc_html__("Determine whether to load all images on page load or to use a lazy load method for higher performance.", "salient-core"),
      'std' => 'default',
    ),
		
    
		array(
      "type" => 'checkbox',
      "heading" => esc_html__("Add Link Mouse Indicator", "salient-core"),
      "param_name" => "enable_indicator",
      "description" => esc_html__("This will add an indicator when hovering over each item ", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
		
		
		array(
      "type" => "dropdown",
      "class" => "",
      'save_always' => true,
      "heading" => esc_html__("Mouse Indicator Style", "salient-core"),
      "param_name" => "mouse_indicator_style",
			"dependency" => array('element' => "enable_indicator", 'not_empty' => true),
      "value" => array(
        "Default" => "default",
        "See Through" => "see-through",
      ),
      'std' => 'default',
    ),
		array(
      "type" => "dropdown",
      "class" => "",
      'save_always' => true,
      "heading" => esc_html__("Mouse Indicator Text", "salient-core"),
      "param_name" => "mouse_indicator_text",
			"dependency" => array('element' => "enable_indicator", 'not_empty' => true),
      "value" => array(
        "View" => "view",
        "Read" => "read",
      ),
      'std' => 'view',
    ),
		array(
      "type" => "colorpicker",
      "class" => "",
      "heading" => "Mouse Indicator Color",
      "param_name" => "mouse_indicator_color",
      "value" => "",
			"dependency" => array('element' => "mouse_indicator_style", 'value' => 'default'),
    ),
    
    array(
      "type" => 'checkbox',
      "heading" => esc_html__("Display Categories", "salient-core"),
      "param_name" => "display_categories",
      "group" => esc_html__("Meta Data", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
    
    array(
      "type" => 'checkbox',
      "heading" => esc_html__("Display Date", "salient-core"),
      "param_name" => "display_date",
      "group" => esc_html__("Meta Data", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
    
    array(
      "type" => 'checkbox',
      "heading" => esc_html__("Display Excerpt", "salient-core"),
      "param_name" => "display_excerpt",
      "group" => esc_html__("Meta Data", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
  
    
		array(
      'type' => 'dropdown',
      'heading' => esc_html__( 'Text Content Layout', 'salient-core' ),
      'param_name' => 'text_content_layout',
      'value' => array(
        esc_html__('All Top Left', 'salient-core') => 'all_top_left',
        esc_html__('All Middle', 'salient-core') => 'all_middle',
        esc_html__('All Bottom Left', 'salient-core') => 'all_bottom_left',
				esc_html__('All Bottom Left With Shadow', 'salient-core') => 'all_bottom_left_shadow'
      ),
      'save_always' => true,
			"group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'description' => esc_html__( 'Select the layout for your text content.', 'salient-core')
    ),
		  
    array(
      "type" => "colorpicker",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      "heading" => "Color Overlay",
      "param_name" => "color_overlay",
      "value" => "",
      "description" => esc_html__("Use this to set a BG color that will be overlaid on your grid items", "salient-core"),
    ),
    
    array(
      "type" => "dropdown",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'save_always' => true,
      "heading" => esc_html__("Color Overlay Opacity", "salient-core"),
      "param_name" => "color_overlay_opacity",
      "value" => array(
        "0" => "0",
        "0.1" => "0.1",
        "0.2" => "0.2",
        "0.3" => "0.3",
        "0.4" => "0.4",
        "0.5" => "0.5",
        "0.6" => "0.6",
        "0.7" => "0.7",
        "0.8" => "0.8",
        "0.9" => "0.9",
        "1" => "1"
      ),
      'std' => '0.3',
    ),
    
    array(
      "type" => "dropdown",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'save_always' => true,
      "heading" => esc_html__("Color Overlay Hover Opacity", "salient-core"),
      "param_name" => "color_overlay_hover_opacity",
      "value" => array(
        "0" => "0",
        "0.1" => "0.1",
        "0.2" => "0.2",
        "0.3" => "0.3",
        "0.4" => "0.4",
        "0.5" => "0.5",
        "0.6" => "0.6",
        "0.7" => "0.7",
        "0.8" => "0.8",
        "0.9" => "0.9",
        "1" => "1"
      ),
      'std' => '0.4',
    ),
    
    
    array(
      "type" => "dropdown",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'save_always' => true,
      "heading" => esc_html__("Text Color", "salient-core"),
      "param_name" => "text_color",
      "value" => array(
        esc_html__("Dark", "salient-core") => "dark",
        esc_html__("Light", "salient-core") => "light",
      ),
      'std' => 'light',
    ),

    array(
      "type" => "dropdown",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'save_always' => true,
      "heading" => "Text Color Hover",
      "param_name" => "text_color_hover",
      "value" => array(
        esc_html__("Dark", "salient-core") => "dark",
        esc_html__("Light", "salient-core") => "light",
      ),
      'std' => 'light',
    ),
    
    array(
      "type" => 'dropdown',
      "heading" => esc_html__("Hover Effect", "salient-core"),
      "param_name" => "hover_effect",
      'save_always' => true,
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      "value" => array(
        esc_html__("BG Zoom", "salient-core") => "zoom",
        esc_html__("Slow BG Zoom", "salient-core") => "slow_zoom",
      )
    ),
    
    array(
      "type" => "dropdown",
      "class" => "",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      'save_always' => true,
      "heading" => esc_html__("Border Radius", "salient-core"),
      "param_name" => "border_radius",
      "value" => array(
        "None" => "none",
        "3px" => "3px",
        "5px" => "5px",
        "10px" => "10px",
      ),
      'std' => 'none',
    ),
    
    
    array(
      "type" => 'checkbox',
      "heading" => esc_html__("Shadow on Hover", "salient-core"),
      "param_name" => "shadow_on_hover",
      "group" => esc_html__("Grid Item Coloring/Style", "salient-core"),
      "description" => esc_html__("This will add a shadow effect on hover to your grid items", "salient-core"),
      "value" => Array(esc_html__("Yes, please", "salient-core") => 'yes')
    ),
    

  ),
);
