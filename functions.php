<?php

/*
Theme name: Maddy Homem's All for one Wordpress demo
Author: Maddy Homem
Author URI: maddyswebnation.com/
Description: This is my web170 wordpress class demo
Version: 1.0
*/

//Register my sidebar
register_sidebars(3,array(
	
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));



//

// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//featured images and post thumnails
add_theme_support('post-thumbnails' );

// page excerpts
add_post_type_support('page', 'excerpt' );



?>