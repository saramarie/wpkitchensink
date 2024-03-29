<?php get_header(); ?>

<section class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="id-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
        <h2 class="post-tile">
        	<?php if(get_the_title()) : ?>
	            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	        <?php else: ?>
	        	<a href="<?php the_permalink(); ?>" rel="bookmark" title="permanent Link to <?php the_time('F j, Y'); ?>"><?php the_time('F j, Y'); ?></a>
		    <?php endif; ?>
        </h2>

        <?php ks_post_meta(); // Outputs post meta in handy UL format ?>

        <?php if (has_post_thumbnail()) : ?>
        	<figure>
        		<?php the_post_thumbnail('thumbnail'); ?>
        	</figure>
	    <?php endif; ?>

        <div class="post-content clearfix">
        	<?php if (is_single()) : ?>
		        <?php the_content(); ?>
		    <?php else : ?>
		    	<?php the_excerpt(); ?>
			<?php endif; ?>
	    </div>

	    <?php 
	    	$args = array(
	    		'before'	=> '<div class="post-pages">' . __('Pages:'),
	    		'after'		=> '</div>'
	    	);

	    	wp_link_pages($args); 
	    ?>
    </article>
<?php endwhile; ?>
	<?php if(is_single()) : ?>
		<div class="prev-link"><?php previous_post_link(); ?></div>
		<div class="next-link"><?php next_post_link(); ?></div>
	<?php else : ?>
		<div class="prev-link"><?php previous_posts_link(); ?></div>
		<div class="next-link"><?php next_posts_link(); ?></div>
	<?php endif; ?>
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

</section>

<?php get_footer(); ?>