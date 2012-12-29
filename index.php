<?php get_header(); ?>

<div><!-- Start container -->

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p class="tagline"><?php bloginfo('description'); ?></p>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="<?php post_class(); ?>">
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

</div><!-- End container -->

<?php get_footer(); ?>