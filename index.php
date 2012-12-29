<?php get_header(); ?>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p class="tagline"><?php bloginfo('description'); ?></p>
</header>

<section class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="<?php post_class(); ?>">
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php the_content(); ?>
    </article>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

</section>

<section class="sidebar">
	<h2>Test Sidebar</h2>

	<ul>
		<li>lorem ipsum</li>
		<li>lorem ipsum</li>
		<li>lorem ipsum</li>
		<li>lorem ipsum</li>
		<li>lorem ipsum</li>
	</ul>
</section>

<?php get_footer(); ?>