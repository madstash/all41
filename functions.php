<?php

/*
Theme name: Maddy Homem's All for one Wordpress demo
Author: Maddy Homem
Author URI: maddyswebnation.com/
Description: This is my web170 wordpress class demo
Version: 1.0
*/

//Register sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//

// Register menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//



?>