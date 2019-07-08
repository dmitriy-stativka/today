<?php get_header(); ?>
<style>
	.breadcrumbs-top{
		display: none;
	}
</style>
<div class="container single-new single-services">
	<?php $img = get_field('image_bg')["url"]; ?>
	<img class="top-img" src="<?php echo $img; ?>" alt="">

	<div class="content_new">
		<div class="text-center">
			<h1><?php wp_title(); ?></h1>
			<span class="date_new"><?php the_date(); ?></span>
		</div>
		<?php the_field('text_new'); ?>
	</div>
</div>
<?php get_footer(); ?>