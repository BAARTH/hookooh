<?php function ajout_scripts() {

/******* SCRIPTS ******/

// BOOTSTRAP
// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', JS_URL.'/bootstrap.min.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');

// MAIN.JS
wp_register_script('main_script', JS_URL.'/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');


/******* STYLES ******/

// GOOGLE FONTS
wp_register_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:300,400,700,900' );
wp_enqueue_style( 'google_fonts' );

// BOOTSTRAP
wp_register_style( 'bootstrap_style', CSS_URL.'/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );

// MAIN.CSS
wp_register_style( 'main_style', CSS_URL.'/main.css' );
wp_enqueue_style( 'main_style' );


}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


