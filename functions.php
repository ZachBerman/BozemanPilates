<?php
/* enqueue styles and scripts */
function load_script_css() {
  wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Poiret+One');
  wp_enqueue_style( 'googleFonts');

  wp_register_style( 'bootstrapCss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  wp_enqueue_style('bootstrapCss');

  wp_register_script('fontAwesomeCss', 'https://use.fontawesome.com/3bbbe7ee7f.js' );
  wp_enqueue_script( 'fontAwesomeCss');

  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js' ); 
  wp_enqueue_script( 'jquery');

  wp_register_script('bootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',false, '3.3.4', true);
  wp_enqueue_script( 'bootstrapJs');

  wp_register_script('easingJS', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', false, 1.3, true);
  wp_enqueue_script( 'easingJS');

  wp_register_script('masterJS', get_template_directory_uri() . '/js/master.js', array(), 1.0 );
  wp_enqueue_script('masterJS');
}

add_action( 'wp_enqueue_scripts' , 'load_script_css' );
?>

