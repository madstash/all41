<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<html>
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>
<!--meta info begins--->
<meta name="description" content="<?php echo (get_the_excerpt()); ?>" />
<meta name="keywords" content="Humanitarianism, Humanitarian, Journals, ending worldwide hunger, disaster relief, Philanthropy />
<meta name="viewport" content="user-scalable=no, intial-scale=1.0, maxium-scale=1.0" />


<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />


<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            slideshow: false,
        });
    })
</script>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!-- start WP head -->
<?php wp_head(); ?>
<!-- end WP head -->
</head>





<body <?php body_class(); ?>>
<div id="content">
	<div id="login">
    	<p>sign in</p>
    
    <header>
    	<a href="http://maddyswebnation.com/web170/templates/wordpress/"><img src="<?php bloginfo('template_directory'); ?>
/images/all41.png" alt="All for One Logo" title="All for one logo"/></a>
    </header>
	</div>
	 <nav class="main-nav">
     <div id="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
				<!--<ul>
                    <li class='active'><a href="">DISCOVER</a></li>
                    <li><a href="">JOURNALS</a></li>
                    	<ul id="navigation-items">
                            <li><a href="">ENDING HUNGER</a></li>
                            <li><a href="">EDUCATION</a> </li>
                            <li><a href="">MEDICAL</a></li>
                            <li><a href="">DISASTER RELIEF</a></li>
                            <li><a href="">CLEAN WATER</a></li>
                            <li><a href="">INNOVATION</a> </li>
                        </ul>
                    <li><a href="">NEWS</a> </li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>-->
            </div>