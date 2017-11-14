<?php
/*
Template Name: Главная
*/

get_header(); ?>

<section class="glav">
	<div class="wrap"><span style="float: left;" class="top-phone">Официальный магазин черной икры</span>
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

</section>
<section class="vitrina" id="sterlyad">
	<div class="wrap">
		<h2>Икра чёрная стерляди, забойная</h2>
		<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
		<ul class="list-tovar">
			<?php
			$args = array(
				'posts_per_page' => 50,
				'orderby' => 'date',
				'order' => 'ASC',
				'post_type' => 'tovar',
				'categor' => 'sterlyad'
				);
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post);
			?>
			<li>

				<h3><?php the_title(); ?></h3>
				<?php the_post_thumbnail('thumbnail'); ?>
				<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
				<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
				<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
				<button class="buy md-trigger" data-modal="modal-<?php the_ID(); ?>">Купить в 1 клик</button>
				<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
				<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', true ); ?></p>

				<div class="mprodukt md-container md-effect-1" id="modal-<?php the_ID(); ?>">
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
								<h2>+7 (499) 404-14-60</h2>
							</div>
						</div>
						<button class="md-close">X</button>
					</div>
				</div>
				<div class="md-overlay"></div>


			</li>
		<?php endforeach; ?>
		<?php wp_reset_postdata() ?>

	</ul>



</div>
</section>
<section class="vitrina" id="osetr">
	<div class="wrap">
		<h2>Икра чёрная осетровая, забойная и дойная</h2>
		<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
		<ul class="list-tovar">
			<?php
			$args = array(
				'posts_per_page' => 50,
				'orderby' => 'date',
				'order' => 'ASC',
				'post_type' => 'tovar',
				'categor' => 'osetr'
				);
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post);
			?>
			<li>
				<?php echo get_post_meta( $post->ID, 'hit', true ); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_post_thumbnail('thumbnail'); ?>
				<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
				<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
				<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
				<button class="buy md-trigger" data-modal="modal-<?php the_ID(); ?>">Купить в 1 клик</button>
				<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
				<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', true ); ?></p>

				<div class="mprodukt md-container md-effect-1" id="modal-<?php the_ID(); ?>">
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
								<h2>+7 (499) 404-14-60</h2>
							</div>
						</div>
						<button class="md-close">X</button>
					</div>
				</div>
				<div class="md-overlay"></div>
			</li>
		<?php endforeach; ?>
		<?php wp_reset_postdata() ?>
	</ul>
</div>
</section>
<section class="vitrina" id="payus">
	<div class="wrap">
		<h2>Икра чёрная осетровая паюсная, забойная</h2>
		<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
		<ul class="list-tovar">
			<?php
			$args = array(
				'posts_per_page' => 50,
				'orderby' => 'date',
				'order' => 'ASC',
				'post_type' => 'tovar',
				'categor' => 'payus'
				);
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post);
			?>
			<li>
				<h3><?php the_title(); ?></h3>
				<?php the_post_thumbnail('thumbnail'); ?>
				<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
				<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', true ); ?></i><span>руб.</span></p>
				<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
				<button class="buy md-trigger" data-modal="modal-<?php the_ID(); ?>">Купить в 1 клик</button>
				<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
				<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', true ); ?></p>

				<div class="mprodukt md-container md-effect-1" id="modal-<?php the_ID(); ?>">
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
								<h2>+7 (499) 404-14-60</h2>
							</div>
						</div>
						<button class="md-close">X</button>
					</div>
				</div>
				<div class="md-overlay"></div>

			</li>
		<?php endforeach; ?>
		<?php wp_reset_postdata() ?>
	</ul>
</div>
</section>
<section class="vitrina noshadow" id="podaroch">
	<div class="wrap">
		<h2>Подарочные наборы "Горкунов"</h2>
		<h3>Высший сорт. Оплата при получении. Доставка от 2 часов</h3>
		<ul class="list-tovar">
			<?php
			$args = array(
				'posts_per_page' => 50,
				'orderby' => 'date',
				'order' => 'ASC',
				'post_type' => 'tovar',
				'categor' => 'gift'
				);
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post);
			?>
			<li>
				<h3><?php the_title(); ?></h3>
				<?php the_post_thumbnail('thumbnail'); ?>
				<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>

				<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
				<button class="buy md-trigger" data-modal="modal-<?php the_ID(); ?>">Купить в 1 клик</button>
				<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
				<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', true ); ?></p>

				<div class="mprodukt md-container md-effect-1" id="modal-<?php the_ID(); ?>">
					<div class="md-content box">
						<div class='md-body'>
							<?php the_post_thumbnail('medium'); ?>
							<div class="desc-tovar"><?php the_content() ?></div>
							<div class="modal-netto">
								<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', true ); ?></p>
							</div>
							<div class="modal-price">

								<p class="price"><?php echo get_post_meta( $post->ID, 'price', true ); ?><span>руб.</span></p>
							</div>
						</div>
						<div class="right-form box">
							<h2>Оставьте заявку</h2>
							<p>менеджер перезвонит и уточнит<br>Ваш заказ.</p>
							<?php echo do_shortcode('[contact-form-7 id="26" title="Форма заявки"]'); ?>
							<div class="rb-phone">
								Или позвоните нам:
								<h2>+7 (499) 404-14-60</h2>
							</div>
						</div>
						<button class="md-close">X</button>
					</div>
				</div>
				<div class="md-overlay"></div>
			</li>
		<?php endforeach; ?>
		<?php wp_reset_postdata() ?>
	</ul>
</div>
</section>
<section class="bigbutton">
	<h2>Мы доставляем только самую свежую черную икру</h2>
	<h3>С каждым заказом привозим все документы!</h3>
	<p>+7 (499) 404-14-60</p>
	<a href="#vybor" class="toup"></a>
</section><?php
get_footer();