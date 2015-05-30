<?php get_header(); ?>
        </nav>
        <!---- header end  ------>   
    
    	<aside class="sidebar">
        <?php get_sidebar(); ?>
        </aside>
        
		<!----- begin content  ----------------------->
     	<div class="background">
        <!-- Begin text ---->
        <div class="journal-section">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php  the_ID(); ?>" class="post">
		<h2><?php the_title(); ?></a></h2>
        <p><small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(', ');?></small></p>
        <?php echo get_the_post_thumbnail($post->ID,'large'); ?>
		<?php the_content(''); ?>
        <?php endwhile; endif; ?>
        <small>single.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>