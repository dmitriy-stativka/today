<?php get_header(); ?>
<div class="error-page">
	<div class="container">
		<div class="text-center">
			<div class="text-error">
				<b>Страница 404</b>
				<p>Страница, на которую Вы пытаетесь перейти недоступна, либо<br> ее несуществует. Убедитесь в правильности написания адреса,<br> и попробуйте еще раз, либо вернитесь на главную.</p>
				<a href="<?php echo $home_url; ?>">На главную</a>
			</div>
			<img class="img-error" src="/wp-content/themes/today/images/error-img.jpg" alt="">
		</div>
	</div>
</div>

<style>
	.breadcrumbs-top{
		display: none;
	}
</style>
<?php get_footer(); ?>