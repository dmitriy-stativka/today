<?php get_header(); ?>
<div class="container">
	<div class="desc-page">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do iusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
	</div>
	<button id="buttonReview">Оставить отзыв
		<span></span>
	</button>
	<script>
		$("#buttonReview").click(function() {
			var Genbutton = $("#buttonReview");
		  $("#fadeBlock").slideToggle('slow');
			if(Genbutton.hasClass('active-add')){
				$("#buttonReview").removeClass('active-add');
			}else{
				$("#buttonReview").addClass('active-add');
			}
			$('#wpmtst_client_name').attr('placeholder', 'Имя');
			$('#wpmtst_post_content').attr('placeholder', 'Сообщение');
		});
	</script>
	<div id="fadeBlock">
		<div class="text-center">
			<b class="title-name">Оставьте свой отзыв!</b>
			<p class="desc-title">Пользователи смогут видеть Ваше сообщение после <br>прохождения модерации.</p>
			<div class="green-line-block">
				<span class="green-line"></span>
			</div>
		</div>
		<?php echo do_shortcode('[testimonial_view id="2"]'); ?>
	</div>
	<?php echo do_shortcode('[testimonial_view id="3"]'); ?>
</div>
<?php get_footer(); ?>