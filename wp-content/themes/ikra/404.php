<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ikra
 */

get_header(); ?>

<section class="blog box">	
<div class="wrap">
    <div class="volna"><h2>СТРАНИЦА НЕ НАЙДЕНА</h2></div>

	<div class="page-content">
		<p>Страница удалена или не существует</p>
        <a href="<?php echo home_url( '/' ) ?>" class="tohome">На главную</a>
		
	</div><!-- .page-content -->
</div>
</section>

<?php
get_footer();
