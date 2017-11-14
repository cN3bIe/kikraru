<?php
/*
Template Name: Оптовикам
*/
get_header();?>
<section class="blog box">
	<div class="wrap">

		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

			endwhile; // End of the loop.
			?>
		</div>
	</section>
</main><!-- .content -->
</div><!-- .wrapper -->
<style>
.bigbutton{margin-bottom:10px;}
	.footer {margin: -286px 0 0; height: 286px; padding-top:0; }
</style>
<footer class="footer box">
	<section class="bigbutton">
		<h2>Черная икра от производителя с доставкой по Москве</h2>
		<h3>Доставка в течение дня, оплата при получении!</h3>
		<p>+7 (499) 404-14-60</p>
		<a href="#" class="buy md-trigger" data-modal="modal-opt">Заказать оптом</a>
	</section>
	<div class="wrap clrfx">
		<p class="imm">Интернет-магазин черной икры</p>
		<div class="palka"></div>
		<p class="textt">Данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации.</p>
		<a href="<?php echo home_url( '/' ) ?>politika-konfidentsialnosti-sajta" class="politika">Политика конфиденциальности сайта</a>
		<a href="#" class="spasibo md-trigger" data-modal="modal-spasiba">Заказать звонок</a>

	</div>
</footer><!-- .footer -->


<div class="md-container md-effect-1" id="modal-spasiba">
	<div class="md-content box">
		<h2>Заявка принята</h2>
		<p>Наш менеджер свяжется с Вами в течение 15 минут.</p>
		<button class="md-close">X</button>
	</div>
</div>

<div class="md-container md-effect-1" id="modal-zvonok">
	<div class="md-content">
		<div class="right-form box">
			<h2>Заказ звонка</h2>
			<p>Оставьте свой телефон и наш менеджер перезвонит Вам</p>
			<?php echo do_shortcode('[contact-form-7 id="27" title="Заказ звонка"]'); ?>
		</div>
		<button class="md-close">X</button>
	</div>
</div>

<div class="md-container md-effect-1" id="modal-opt">
	<div class="md-content box">
		<div class="right-form box">
			<h2>Оставьте заявку на оптовые условия и цены</h2>
			<?php echo do_shortcode('[contact-form-7 id="28" title="Оптовая заявка"]'); ?>
		</div>
		<button class="md-close">X</button>
	</div>
</div>




<?php wp_footer(); ?>

<script>
	$(document).ready(function() {

		$('.md-trigger').on('click',function(){

			var modal = $(this).data('modal');
			$("#" + modal).niftyModal();
		});

	});
</script>
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
					navigation : true, // Show next and prev buttons
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true
					// "singleItem:true" is a shortcut for:
					// items : 1,
					// itemsDesktop : false,
					// itemsDesktopSmall : false,
					// itemsTablet: false,
					// itemsMobile : false
				});
	});
</script>
<script>
	jQuery(function($){
		$(".phone").mask("+7(999) 999-9999");
	});
</script>
<script>
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200){
			$('.logo').addClass("logo-small");
		}
		else{
			$('.logo').removeClass("logo-small");
		}
	});
</script>
<script>
	jQuery(document).ready(function($){
	// Прокрутка на все якоря (#) и на a[name]. v1.1
	$('a[href*="#"]').on('click.smoothscroll', function( e ){
		var hash    = this.hash,
		_hash   = hash.replace(/#/,''),
		theHref = $(this).attr('href').replace(/#.*/, '');
		if( theHref && location.href.replace(/#.*/,'') != theHref ) return; // не текущая страница
		var $target = _hash === '' ? $('body') : $( hash + ', a[name="'+ _hash +'"]').first();
		if( ! $target.length ) return;
		e.preventDefault();
		$('html, body').stop().animate({ scrollTop: $target.offset().top }, 400, 'swing', function(){
			window.location.hash = hash;
		});
	});
});
</script>

<script>
	$(document).ready(function(){

		ion.sound({
			sounds: [
			{name: "glass"}
			],
			path: "<?php echo home_url( '/' ) ?>sounds/",
			preload: true,
			volume: 0.1
		});

		$(".submit, .buy, .vybli, .zvo, .toup, .tohome").mouseover(function(){
			ion.sound.play("glass");
		});

		$("#b02").on("click", function(){
			ion.sound.play("bell_ring");
		});

	});
</script>

<div class="md-overlay"></div>
<script type="text/javascript">
	var reformalOptions = {
		project_id: 975432,
		project_host: "k-ikra.reformal.ru",
		tab_orientation: "left",
		tab_indent: "50%",
		tab_bg_color: "#0566b1",
		tab_border_color: "#ffffff",
		tab_image_url: "http://tab.reformal.ru/T9GC0LfRi9Cy0Ysg0Lgg0L%252FRgNC10LTQu9C%252B0LbQtdC90LjRjw==/ffffff/5a751dfaebac066a89e0cea4935e1a85/left/0/tab.png",
		tab_border_width: 0
	};

	(function() {
		var script = document.createElement('script');
		script.type = 'text/javascript'; script.async = true;
		script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'media.reformal.ru/widgets/v3/reformal.js';
		document.getElementsByTagName('head')[0].appendChild(script);
	})();
</script><noscript><a href="http://reformal.ru"><img src="http://media.reformal.ru/reformal.png" /></a><a href="http://k-ikra.reformal.ru">Oтзывы и предложения для Икорный дом Горкунов</a></noscript>
</body>
</html>
