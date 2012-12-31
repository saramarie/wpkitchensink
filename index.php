<?php get_header(); ?>

<section class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="id-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="post-tile">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php ks_post_meta(); // Outputs post meta in handy UL format ?>

        <div class="post-content">
	        <?php the_content(); ?>
	    </div>
    </article>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

</section>

<?php get_footer(); ?>