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
        <article class='post-excerpt">
        <a href="<?php the_permalink(); ?>" title="Permanent link to<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID,'thumbnail'); ?></a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small>Posting on <?php the_time('F j, Y')  ?> in <?php the_category(', ') ?></small>
		<?php //the_content(''); ?>
        <?php echo strip_tags(get_the_excerpt()); ?><a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"> Read More &raquo;</a>
        </article>
        <?php endwhile; endif; ?>
        <small>index.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>