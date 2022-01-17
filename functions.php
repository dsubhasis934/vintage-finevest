<?php
function vintage_theme_support(){
//add dynamic title tag
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-fields');
}
add_action('after_setup_theme','vintage_theme_support');

?>
<?php
function vintage_register_styles(){  
    wp_enqueue_style('vintage-swiper', "https://unpkg.com/swiper@7.1.0/swiper-bundle.min.css", array(),'1.0','all');
    wp_enqueue_style('vintage-tailwind', "https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css", array(),'1.0','all');
    wp_enqueue_style('vintage-style', get_template_directory_uri() . "../style.css", array(),'1.0','all');
    wp_enqueue_style('vintage-fontawesome', "https://use.fontawesome.com/releases/v5.5.0/css/all.css", array(),'5.5.0','all');
    wp_register_style( 'vintage-fontawesome-css', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}
add_action('wp_enqueue_scripts', 'vintage_register_styles');

function vintage_register_scripts(){  
    wp_enqueue_script('vintage-alpinejs',"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js", array(),'1.0','true');
    wp_enqueue_script('vintage-fontawesome',"https://kit.fontawesome.com/a076d05399.js", array(),'1.16.0','true');
    wp_enqueue_script('vintage-jquary',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(),'4.4.1','true');
    wp_enqueue_script('vintage-waypoints',"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js", array(),'4.4.1','true');
    wp_enqueue_script('vintage-counterup',"https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js", array(),'4.4.1','true');
    wp_enqueue_script('vintage-swiper-js',"https://unpkg.com/swiper@7.1.0/swiper-bundle.min.js", array(),'4.4.1','true');
    wp_enqueue_script('vintage-carousal-js', get_template_directory_uri() . "/assets/js/carousal.js", array(),'1.0','true');
    wp_enqueue_script('vintage-counter-js', get_template_directory_uri() . "/assets/js/counter.js", array(),'1.0','true');
    wp_enqueue_script('vintage-testimonial-js', get_template_directory_uri() . "/assets/js/testimonial.js", array(),'1.0','true');
}
add_action('wp_enqueue_scripts','vintage_register_scripts');

?>
<?php
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://localhost/wp-content/uploads/2021/10/img2.jpeg';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}
?>