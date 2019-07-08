	<div class="question">
		<div class="container">
			<div class="text-center">
				<b class="title-name">Остались вопросы?</b>
				<p class="desc-title">Еси у Вас возникли вопросы или Вы хотите проконсультироваться, заполните форму<br> обратной связи, и наш оператор свжется с Вами. </p>
				<div class="green-line-block">
					<span class="green-line"></span>
				</div>
			</div>
			<div class="form-send">
				<?php echo do_shortcode('[contact-form-7 id="97" title="Контактная форма 1"]'); ?>
			</div>
		</div>
	</div>	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 info-foo">
					<a href="<?php echo $home_url; ?>">
						<img src="/wp-content/themes/today/images/logo_footer.png" alt="">
					</a>
					<p>Понедельник - Пятница: 9:00 - 21:00</p>
					<p>Суббота, воскресенье - выходной </p>
					<span>
						© Клиника расширенных гарантий<br>«TODAY» все права защищены.
					</span>
					<span>Сайт разработан: <a href="mailto:dimastativka@gmail.com">Stativka</a></span>
				</div>
				<div class="col-md-3">
					<b class="title-footer">Навигация</b>
					<ul class="footer-list">
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				<div class="col-md-3">
					<b class="title-footer">Услуги</b>
					<ul class="footer-list">
						<?php
						  $params = array(
						      'post_type' => 'services',
						      'posts_per_page' => -1,
						  );
						  $query = new WP_Query( $params );
						  ?>
						  <?php if($query->have_posts()): ?>
						          <?php while ($query->have_posts()): $query->the_post() ?>
						                <?php $name = get_field('name_service'); ?>
											<li> <a href="<?=the_permalink( $post->ID )?>"><?php echo $name; ?></a></li>
						          <?php endwhile; ?>
						  <?php endif; ?>
					</ul>
				</div>
				<div class="col-md-3">
					<b class="title-footer">Контакты</b>
					<ul class="footer-list">
						<li>
							<p>г. Харьков, ул. Ахсарова 13</p>
						</li>
						<li>
							<a href="mailto:todaystomat@gmail.com">todaystomat@gmail.com</a>
						</li>
						<li>
							<a href="tel:+380686018105">+38 (068) 601-81-05</a>
						</li>
						<li>
							<a href="tel:+380936018105">+38 (093) 601-81-05</a>
						</li>
						<li>
							<a href="tel:+380666810138">+38 (066) 681-01-38</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="popup__overlay">
		    <div class="popup">
		        <a href="#" class="popup__close"></a>
		        
		        <div class="text-center">
					<b class="title-name">Оставить заявку</b>
					<p class="desc-title">Оставьте свои контактные данные. Мы свяжемся с вами для уточнения деталей.</p>
					<div class="green-line-block">
						<span class="green-line"></span>
					</div>
				</div>
		        <?php echo do_shortcode('[contact-form-7 id="97" title="Контактная форма 1"]'); ?>
		    </div>
		</div>
	<script type='text/javascript'>
		/* <![CDATA[ */
			var wpcf7 = {"apiSettings":{"root":"http://today\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"\u0411\u0443\u0434\u044c \u043b\u0430\u0441\u043a\u0430, \u043f\u0456\u0434\u0442\u0432\u0435\u0440\u0434\u0456\u0442\u044c, \u0449\u043e \u0432\u0438 \u043d\u0435 \u0440\u043e\u0431\u043e\u0442."}}};
		/* ]]> */
	</script>
	<script type='text/javascript' src='http://today/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
	<script>
		$('input[type="tel"]').mask('+38 (000) 000-00-00');
	</script>
	<script>
		var p = $('.popup__overlay')
		$('.popup__toggle').click(function() {
		    p.addClass('popup_open')
		})
		p.click(function(event) {
		    e = event || window.event
		    if (e.target == this) {
		        $(p).removeClass('popup_open');
		    }
		})
		$('.popup__close').click(function() {
		    p.removeClass('popup_open')
		})
        $(function() {
            $('.popup__toggle').bind('click', function(e) {
                e.preventDefault();
            });
        });
	</script>



	<script>
		$('.title-footer').on('click', function(){
			$('.footer-list').toggleClass('list-open');
		})
	</script>



</body>
</html>