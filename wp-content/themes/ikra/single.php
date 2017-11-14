<?php get_header(); ?>

<section class="blog box">
	<div class="wrap">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'single' );


		// End the loop.
			endwhile;
			?>
		</div>
	</section>
	<section class="vitrina" id="sterlyad">
		<div class="wrap">
			<h2>Икра чёрная стерляди, забойная</h2>
			<h3>Высший сорт. Оплата при получении. Доставка в течение дня</h3>
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
									<h2>+7 (495) 767-30-32</h2>
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
		<h3>Высший сорт. Оплата при получении. Доставка в течение дня</h3>
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
								<h2>+7 (495) 767-30-32</h2>
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
		<h3>Высший сорт. Оплата при получении. Доставка в течение дня</h3>
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
								<h2>+7 (495) 767-30-32</h2>
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
		<h3>Высший сорт. Оплата при получении. Доставка в течение дня</h3>
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
								<h2>+7 (495) 767-30-32</h2>
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
<?php
				/*/
			<ul class="blog-anons clrfx">
				<?php
// необязательно, но в некоторых случаях без этого не обойтись
				global $post;

// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
				$related_tax = 'category';

// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
				$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );

// массив параметров для WP_Query
				$args = array(
	'posts_per_page' => 3, // сколько похожих постов нужно вывести,
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
	);?>
				$misha_query = new WP_Query( $args );

// если посты, удовлетворяющие нашим условиям, найдены
				if( $misha_query->have_posts() ) :

	// выводим заголовок блока похожих постов
					echo '<div class="volna"><h2>Похожие записи</h2></div>';

	// запускаем цикл
				while( $misha_query->have_posts() ) : $misha_query->the_post(); ?>

				<li>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<div class="anons-footer box clrfx">
						<span class="anons-data"><?php the_time('D j F'); ?></span>
						<a href="<?php the_permalink() ?>" class="more">Читать далее</a>
					</div>
				</li>

			<?php endwhile;
			endif;

// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>
/*/
get_footer();
