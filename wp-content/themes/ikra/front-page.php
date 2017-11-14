<?php
/*
Template Name: Главная
*/

$postslist_1 = get_posts( array(
	'posts_per_page' => 50,
	'orderby' => 'date',
	'order' => 'ASC',
	'post_type' => 'tovar',
	'categor' => 'sterlyad'
) );
$postslist_2 = get_posts( array(
	'posts_per_page' => 50,
	'orderby' => 'date',
	'order' => 'ASC',
	'post_type' => 'tovar',
	'categor' => 'osetr'
) );
$postslist_3 = get_posts( array(
	'posts_per_page' => 50,
	'orderby' => 'date',
	'order' => 'ASC',
	'post_type' => 'tovar',
	'categor' => 'payus'
) );
$postslist_4 = get_posts( array(
	'posts_per_page' => 50,
	'orderby' => 'date',
	'order' => 'ASC',
	'post_type' => 'tovar',
	'categor' => 'gift'
) );
get_header(); ?>

<section class="glav">
	<div class="wrap"><h1 style="float: left;" class="top-phone">Официальный магазин черной икры</h1>
		<p class="top-phone">+7 (499) 404-14-60</p>
		<h2>Свежая и вкусная черная икра от производителя!</h2>
		<h3>Бесплатная доставка по Москве от 2 часов, по России от 1 дня!</h3>
		<div class="left-block box">
			<h4>Икра осетровая, 100 г</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/img/333.png" alt="">
			<div class="lb-price old"><i>5 490</i> <span>руб.</span></div>
			<div class="lb-price">4 550 <span>руб.</span></div>
			<div class="lb-hit">ХИТ</div>
		</div>
		<div class="right-block box">
			<h2>ЗАКАЗАТЬ ИКРУ</h2>
			<p class="ggg">Икра осетровая 100г</p>
			<p class="ggg">за <span>4 550 руб.</span></p>
			<?php echo do_shortcode('[contact-form-7 id="63" title="Икра осетровая 100г"]'); ?>
		</div>
		<div class="clr"></div>
		<ul class="vigoda">
			<li class="one"><img src="<?php echo get_template_directory_uri(); ?>/img/anonce_3_src.png" alt=""><p>Икра<br> malosol</p></li>
			<li class="two"><img src="<?php echo get_template_directory_uri(); ?>/img/anonce_4_src.png" alt=""><p>Разбористая и<br>не слипается</p></li>
			<li class="three"><img src="<?php echo get_template_directory_uri(); ?>/img/anonce_5_src.png" alt=""><p>Икра доставляется в<br>сумке-холодильнике.</p></li>
			<li class="foo"><img src="<?php echo get_template_directory_uri(); ?>/img/anonce_6_src.png" alt=""><p>Доставка <br>от 2 часов</p></li>
		</ul>
	</div>
	<section class="vybor-button" id="vybor">
		<div class="volna"><h2>ВЫБЕРИТЕ ВИД ЧЕРНОЙ ИКРЫ</h2></div>
		<ul class="vybor">
			<li class="vybli"><a href="#sterlyad">Икра<br>стерляди</a></li>
			<li class="vybli"><a href="#osetr">Икра<br>осетровая</a></li>
			<li class="vybli"><a href="#payus">Икра<br>паюсная</a></li>
			<li class="vybli"><a href="#podaroch">Подарочные<br>наборы</a></li>
		</ul>
	</section>
</section><?php
if( is_array( $postslist_1 ) && count( $postslist_1 ) ):
	?><section class="vitrina" id="sterlyad">
		<div class="wrap">
			<h2>Икра чёрная стерляди, забойная</h2>
			<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
			<ul class="list-tovar"><?php
				foreach( $postslist_1 as $key=>$post): setup_postdata($post);
					get_template_part( 'template-parts/catalog', 'item' );
				endforeach;
			?></ul>
		</div>
	</section><?php
	wp_reset_postdata();
endif;
if( is_array( $postslist_2 ) && count( $postslist_2 ) ):
	?><section class="vitrina" id="osetr">
		<div class="wrap">
			<h2>Икра чёрная осетровая, забойная и дойная</h2>
			<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
			<ul class="list-tovar"><?php
				foreach( $postslist_2 as $key=>$post): setup_postdata($post);
					get_template_part( 'template-parts/catalog', 'item' );
				endforeach;
			?></ul>
		</div>
	</section><?php
	wp_reset_postdata();
endif;
if( is_array( $postslist_3 ) && count( $postslist_3 ) ):
	?><section class="vitrina" id="payus">
		<div class="wrap">
			<h2>Икра чёрная осетровая паюсная, забойная</h2>
			<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
			<ul class="list-tovar"><?php
				foreach( $postslist_3 as $key=>$post): setup_postdata($post);
					get_template_part( 'template-parts/catalog', 'item' );
				endforeach;
			?></ul>
		</div>
	</section><?php
	wp_reset_postdata();
endif;
if( is_array( $postslist_4 ) && count( $postslist_4 ) ):
	?><section class="vitrina noshadow" id="podaroch">
		<div class="wrap">
			<h2>Подарочные наборы "Горкунов"</h2>
			<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
			<ul class="list-tovar"><?php
				foreach( $postslist_4 as $key=>$post): setup_postdata($post);
					get_template_part( 'template-parts/catalog', 'item' );
				endforeach;
			?></ul>
		</div>
	</section><?php
	wp_reset_postdata();
endif;
?><section class="bigbutton">
	<h2>Мы доставляем только самую свежую черную икру</h2>
	<h3>С каждым заказом привозим все документы!</h3>
	<p>+7 (499) 404-14-60</p>
	<a href="#vybor" class="toup"></a>
</section><?php
get_footer();