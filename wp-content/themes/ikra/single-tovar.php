<?php get_header(); ?>
<section class="tovarpage box">
	<div class="wrap">
		<h1><?php the_title(); ?></h1>
		<h2>Высший сорт</h2>
		<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_idm = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
		$thumb_urlm = wp_get_attachment_image_src($thumb_id,'large', true);
		?>
		<div class="left-tovar box">
			<nav class="thumbs">
				<a href="<?php echo $thumb_url[0]; ?>" class="current">
					<img src="<?php echo $thumb_urlm[0]; ?>" alt="">
				</a>
				<?php

		if ( get_post_meta( get_the_ID(), 'photo2', false ) ){ //images название вашего произвольного поля
		$image_array = get_post_meta( get_the_ID(), 'photo2', false ); //images название вашего произвольного поля
	}
	if ( $image_array ) {

		foreach ( $image_array as $image ) {

			$thumbimg = wp_get_attachment_image( $image['ID'], 'large');
			$fullimg = pods_image_url( $image['ID'], 'medium');
			echo '<a href="'.  $fullimg . '">' . $thumbimg . '</a>';
		}
	}
	?>
</nav>
</div>

<div class="center-tovar">

	<div class="photo">
		<img src="<?php echo $thumb_url[0]; ?>" alt="">
	</div>

	<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <strong><?php echo get_post_meta( $post->ID, 'netto', true ); ?></strong></p>
	<div class="line"></div>


	<?php $metas = get_post_meta( $post->ID );
	if( isset($metas['description']) ){
		echo get_post_meta( $post->ID, 'description', true );
	}
	?>

	<p class="nal">Есть в наличии</p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>#vybor" class="tocatalog">В каталог</a>
</div>
<div class="right-tovar">
	<p class="price old"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
	<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>

	<button class="buy md-trigger" data-modal="modal-tov">Быстрый заказ</button>

	<?php echo $GLOBALS['wpshop_obj']->GetGoodWidget(); ?>


	<div class="dost">
		<img src="<?php echo get_template_directory_uri(); ?>/img/fast-deliver.png" alt="">
		<h3>Доставка</h3>
		<p><strong>При заказе икры
			более 250 грамм - доставка по Москве бесплатно! (только в будни)</strong></p></p>
			<p>Мы доставляем нашу икру в специальном холодильнике, что позволяет сохранять её истинный вкус</p>
			<a href="<?php echo home_url( '/' ) ?>dostavka">Подробнее...</a>
		</div>
	</div>
	<div class="clr"></div>



	<div class="mprodukt md-container md-effect-1" id="modal-tov">
		<div class="md-content box">
			<div class='md-body'>
				<?php the_post_thumbnail('medium'); ?>
				<div class="desc-tovar"><?php the_content() ?></div>
				<div class="modal-netto">
					<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
				</div>
				<div class="modal-price">
					<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
					<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
				</div>
			</div>
			<div class="right-form box">
				<h2>Оставьте заявку</h2>
				<p>менеджер перезвонит и уточнит<br>Ваш заказ.</p>
				<?php echo do_shortcode('[contact-form-7 id="26" title="Форма заявки"]'); ?>
				<div class="rb-phone">
					Или позвоните нам:
					<h2>+7 (495) 767-30-32</h2>
				</div>
			</div>
			<button class="md-close">X</button>
		</div>
	</div>
	<div class="md-overlay"></div>


</div>
</section>

<section class="related">
	<div class="wrap">
		<?php
// необязательно, но в некоторых случаях без этого не обойтись
		global $post;

// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
		$related_tax = 'categor';

// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
		$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );

// массив параметров для WP_Query
		$args = array(
	'posts_per_page' => 5, // сколько похожих постов нужно вывести,
	'post__not_in' => array($post->ID), //Не выводить текущую запись
	'tax_query' => array(
		array(
			'taxonomy' => $related_tax,
			'field' => 'id',
			'include_children' => false, // нужно ли включать посты дочерних рубрик
			'terms' => $cats_tags_or_taxes,
			'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
			)
		)
	);
		$misha_query = new WP_Query( $args );

// если посты, удовлетворяющие нашим условиям, найдены
		if( $misha_query->have_posts() ) :

	// выводим заголовок блока похожих постов
			echo '<h3>Другие товары этой категории</h3>';
		echo '<ul>';
	// запускаем цикл
		while( $misha_query->have_posts() ) : $misha_query->the_post(); ?>

		<li>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
			<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
			<p class="price"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
			<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
			<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
			<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', true ); ?></p>
		</li>

	<?php endwhile;
	echo '</ul>';
	endif;

// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
	wp_reset_postdata();
	?>
</div>
</section>

<script>
	$("nav.thumbs").on("click", "a", function () {
		$(this).addClass("current").siblings().removeClass("current")
		$(".photo img").attr("src", $(this).prop("href"))
		return false;
	})
</script>
<?php get_footer(); ?>
