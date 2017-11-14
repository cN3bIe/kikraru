<?php get_header(); ?>

<section class="blog box">
	<div class="wrap">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
		<header>
			<div class="volna"><h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1></div>

		</header>

		<?php
		endif; ?>

		<ul class="blog-anons clrfx">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<a class="link-wan" href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?>
					<h2><?php the_title(); ?></h2></a>
					<?php the_excerpt(); ?>
					<div class="anons-footer box clrfx">
						<span class="anons-data"><?php the_time('D j F'); ?></span><?php /*/ ?>
						<a href="<?php the_permalink() ?>" class="more">Читать далее</a>
					<?php /*/ ?></div>

				</li>
			<?php endwhile; ?>
		</ul>
		<?php the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
</section>


<?php get_footer(); ?>
