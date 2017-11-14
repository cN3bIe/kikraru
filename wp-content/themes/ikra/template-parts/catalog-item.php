<li><?php
	echo get_post_meta( $post->ID, 'hit', !0 );
	 ?><h3><?php the_title(); ?></h3>
	<?php the_post_thumbnail('thumbnail'); ?>
	<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', !0 ); ?></p>
	<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', !0 ); ?></i><span>руб.</span></p>
	<p class="price"><?php echo get_post_meta( $post->ID, 'price', !0 ); ?><span>руб.</span></p>
	<button class="buy md-trigger" data-modal="modal-<?php the_ID(); ?>">Купить в 1 клик</button>
	<p class="one-click"><a href="<?php the_permalink() ?>">Подробнее</a></p>
	<p class="stock"><?php echo get_post_meta( $post->ID, 'stock', !0 ); ?></p>
	<div class="mprodukt md-container md-effect-1" id="modal-<?php the_ID(); ?>">
		<div class="md-content box">
			<div class='md-body'><?php
				the_post_thumbnail('medium');
				 ?><div class="desc-tovar"><?php the_content();?></div>
				<div class="modal-netto">
					<p class="netto"><img src="<?php echo get_template_directory_uri(); ?>/img/sim1.png" alt="">Вес: <?php echo get_post_meta( $post->ID, 'netto', !0 ); ?></p>
				</div>
				<div class="modal-price">
					<p class="oldprice"><i><?php echo get_post_meta( $post->ID, 'old_price', !0 ); ?></i><span>руб.</span></p>
					<p class="price"><?php echo get_post_meta( $post->ID, 'price', !0 ); ?><span>руб.</span></p>
				</div>
			</div>
			<div class="right-form box">
				<h2>Оставьте заявку</h2>
				<p>менеджер перезвонит и уточнит<br>Ваш заказ.</p>
				<?php echo do_shortcode('[contact-form-7 id="26" title="Форма заявки"]'); ?>
				<div class="rb-phone">Или позвоните нам: <h2>+7 (499) 404-14-60</h2></div>
			</div>
			<button class="md-close">X</button>
		</div>
	</div>
	<div class="md-overlay"></div>
</li>