<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function my_theme_enqueue_styles() {
	$parenthandle = 'twenty-twenty-one-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css', // To reference the parent theme directory
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(), // To reference the child theme directory
		array( $parenthandle ),
		$theme->get( 'Version' ) // This only works if you have Version defined in the style header.
	);

  wp_enqueue_style( 'child-style-2',
    get_stylesheet_directory_uri() . '/css/style.css', // To reference the child theme directory
  );
}

function add_theme_scripts() {
	wp_enqueue_script( 'script', 
    get_stylesheet_directory_uri() . '/js/script.js', 
    array( 'jquery' ), 
    1.1, 
    true
  );
}
?>
