<?php get_header(); ?>
<style>
	.title-page{
		display: none;
	}
</style>
<div class="home-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_gallery_wrap">
					<div class="main_gallery_holder">
						<div class="main_gallery">
						<?php
					        $params = array(
					            'post_type' => 'slider',
					            'posts_per_page' => -1,
					        );
					        $query = new WP_Query( $params );
					        ?>
					        <?php if($query->have_posts()): ?>
					                <?php while ($query->have_posts()): $query->the_post() ?>
											<?php $sliders = get_field('slider_images')?>
											<?php $url = get_field('href_page'); ?>
											<?php $title = get_field('title'); ?>
											<?php $desc = get_field('desc'); ?>
											<?php $button = get_field('button'); ?>

											<div class="main_gallery_slide">
												<?php if($title || $desc){ ?>
													<div class="site-description">
														<h1><?php echo $title; ?></h1>
														<p><?php echo $desc; ?></p>
														<a href="<?php echo $url; ?>"><?php echo $button; ?></a>
													</div>
												<?php } ?>
												<img src="<?php echo $sliders['url'] ?>" alt="">
											</div>

					                <?php endwhile; ?>
					        <?php endif; ?>
						</div>
					</div>
				</div>
				<div class="services">
					<div class="text-center">
						<b class="title-name">Популярные услуги</b>
						<p class="desc-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seмd do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
						<div class="green-line-block">
							<span class="green-line">
								<a href="/services">Смотреть все услуги</a>
							</span>
						</div>
					</div>
					<div class="all-services">
						<div class="row">
							<?php include( locate_template('templates/services.php') ); ?>
						</div>
					</div>
				</div>
				<div class="news">
					<div class="text-center">
						<b class="title-name">Полезные статьи</b>
						<p class="desc-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seмd do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
						<div class="green-line-block">
							<span class="green-line">
								<a href="/news">Смотреть все статьи</a>
							</span>
						</div>
					</div>
					<div class="all-news">
						<div class="row">
							<?php include( locate_template('templates/news.php') ); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="staff">
		<div class="text-center">
			<b class="title-name">Наши сотрудники</b>
			<p class="desc-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seмd do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
			<div class="green-line-block">
				<span class="green-line"></span>
			</div>
		</div>
		<div class="container">
			<div class="staff_gallery">
				<div class="main_gallery">	
					<div class="multiple-items">
						<?php
			        $params = array(
			            'post_type' => 'staff',
			            'posts_per_page' => -1,
			        );
			        $query = new WP_Query( $params );
			        ?>
			        <?php if($query->have_posts()): ?>
			                <?php while ($query->have_posts()): $query->the_post() ?>

									<?php $imgStaff = get_field('img_staff')?>

									<?php $nameStaff = get_field('name_staff'); ?>
									<?php $descriptionStaff = get_field('description_staff'); ?>
									<?php $experienceStaff = get_field('experience_staff'); ?>

								<div class="main_gallery_slide">								
									<div class="staff-only">
										<img src="<?php echo $imgStaff['url'] ?>" alt="">
										<p class="descriptionStaff"><?php echo $descriptionStaff; ?></p>
										<b class="nameStaff"><?php echo $nameStaff; ?></b>
										<p class="experienceStaff"><?php echo $experienceStaff; ?></p>
									</div>
								</div>
			                <?php endwhile; ?>
			        <?php endif; ?>
					</div>
					
			    </div>
			</div>
		</div>
	</div>
	<div class="reviews">
		<div class="text-center">
			<b class="title-name">Отзывы клиентов</b>
			<p class="desc-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, seмd do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
			<div class="green-line-block">
				<span class="green-line">
					<a href="/reviews">Смотреть все отзывы</a>
				</span>
			</div>
		</div>
		<div class="container">
			<?php echo do_shortcode('[testimonial_view id="1" order="random"]'); ?>
		</div>
	</div>
	<div class="why-us">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="text-in">
						<b>Почему стоит лечить зубы с Today?</b>
						<p>По оценке многих наших клиентов стоматологическая клиника ToDay это:</p>
						<ul>
							<li>уютная и приятная атмосфера, избавляющая от страхов;</li>
							<li>опытные, внимательные и доброжелательные сотрудники, </li>
							<li>использование новейших методик лечения и протезирования;</li>
							<li>наличие необходимого оборудования и качественных материалов;</li>
							<li>абсолютная стерильность и безопасность инструмента;</li>
							<li>транспортная доступность и удобный режим работы;</li>
							<li>доступные цены и расширенные гарантии на все предоставленные услуги.</li>
							<p>А самое главное – огромное желание нашего коллектива сделать вашу улыбку по-настоящему счастливой!</p>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<img src="/wp-content/themes/today/images/img_teeth.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="come">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.913134504468!2d36.20779771524911!3d50.05045852398671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a6a7c103c373%3A0xd3a5d60caa3aea96!2z0YPQuy4g0JDRhdGB0LDRgNC-0LLQsCwgMTMsINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1539699274779"  frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<div class="text-in">
						<b>Приходите к нам по адресу: <br>ул. Асхарова 13</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p>Понедельник - Пятница: 9:00 - 21:00. </p>
						<a href="/contacts/">Контакты</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script>
	$('.main_gallery').slick({
		dots: true,
	});
	function changeInfo() {
		var activeBlock = $( $('.main_gallery_slide.slick-active').attr('data-info'));
		if ( activeBlock.hasClass('active') ) {
			activeBlock.removeClass('active');
			activeBlock.slideUp();
			$(this).removeClass('slide_info_btn_active');
			return false;
		}
		$('.slide_info').removeClass('active');
		$('.slide_info').slideUp();
		activeBlock.addClass('active');
		activeBlock.slideDown();
		$(this).addClass('slide_info_btn_active');
		return false;
	}
	$('.main_gallery').on('afterChange', function(event, slick, currentSlide, nextSlide){
		if ( !$(".slide_info").hasClass('active') ) {
			return false;
		}
		changeInfo();
	});
	$(".slide_info_btn").click(changeInfo);



	$('.multiple-items').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  dots: true,
      dotsClass: 'slick-dots',
      responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});




	var burger = $('.navbar-toggler');
	burger.on('click', function addShow(){
		if ( burger.hasClass('addShow') ) {
			$(this).removeClass('addShow');
		}else{
			$(this).addClass('addShow');
		}
	})


</script>
<?php get_footer(); ?>