<?php if (!function_exists('dt_theme_features')) {

	// Register Theme Features
	function dt_theme_features() {
		global $wp_version;

		// Add theme support for Custom Background
		$b_args = array(
			'default-color' => 'ffffff',
			'default-image' => '',
			'wp-head-callback' => '_custom_background_cb',
			'admin-head-callback' => '',
			'admin-preview-callback' => ''
		);
		add_theme_support('custom-background', $b_args);
		// END of Custom Background Feature

		// Add theme support for Custom Header
		$hargs = array( 'default-image'=>'',	'random-default'=>false,	'width'=>0,					'height'=>0,
				'flex-height'=> false,	'flex-width'=> false,		'default-text-color'=> '',	'header-text'=> false,
				'uploads'=> true,		'wp-head-callback'=> '',	'admin-head-callback'=> '',	'admin-preview-callback' => '');
				
		add_theme_support('custom-header', $hargs);
		// END of Custom Header Feature

		// Add theme support for Translation
		load_theme_textdomain('iamd_text_domain', get_template_directory().'/languages');

		// Add theme support for Post Formats
		$formats = array(
			'status',
			'quote',
			'gallery',
			'image',
			'video',
			'audio',
			'link',
			'aside',
			'chat'
		);
		add_theme_support('post-formats', $formats);
		// END of Post Formats

		// Add theme support for custom CSS in the TinyMCE visual editor
		add_editor_style('css/editor-style.css');

		// Add theme support for Automatic Feed Links
		add_theme_support('automatic-feed-links');
		// END of Automatic Feed Links

		// Add theme support for Featured Images
		add_theme_support('post-thumbnails');
		
		// END of Featured Images option
		add_image_size('blog-full', 840, 340, true);
		
		add_image_size("small-thumb", 100, 100, true);
		add_image_size("my-post-thumb", 54, 54, true);
		
		//Gallery Image Sizes
		add_image_size('gallery-onecol', 940, 470, true);
		add_image_size('gallery-onecol-sidebar', 685, 340, true);
		add_image_size('gallery-twocol', 470, 470, true);
		add_image_size('gallery-twocol-sidebar', 342, 342, true);
		add_image_size('gallery-threecol', 313, 313, true);
		add_image_size('gallery-threecol-sidebar', 228, 228, true);
		add_image_size('gallery-fourcol', 235, 235, true);
		add_image_size('gallery-fourcol-sidebar', 171, 171, true);
		
		add_image_size('gallery-with-shape', 460, 460, true);
		
		add_image_size('sidebar-thumb', 60, 60, true);

		add_image_size('gallery-single', 620, 510, true);
		add_image_size('gallery-single-full', 940, 470, true);
	}
	// Hook into the 'after_setup_theme' action
	add_action('after_setup_theme', 'dt_theme_features');
}

if (!function_exists('dt_theme_activation_function')) {
	function dt_theme_activation_function($oldname, $oldtheme=false) {
		update_option(IAMD_THEME_SETTINGS, dt_theme_default_option());
	}
	add_action("after_switch_theme", "dt_theme_activation_function", 10 , 2);
}

if (!function_exists('dt_theme_navigation_menus')) {

	// Register Navigation Menus
	function dt_theme_navigation_menus() {
		$locations = array(
			'primary-menu' => __('Primary Menu', 'iamd_text_domain'),
			'secondary-menu' => __('Secondary Menu', 'iamd_text_domain'),
			'another-secondary-menu' => __('Another Secondary Menu', 'iamd_text_domain')
		);
		register_nav_menus($locations);
	}

	// Hook into the 'init' action
	add_action('init', 'dt_theme_navigation_menus');
}