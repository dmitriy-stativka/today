<?php
/**
 * Template Name: Default
 * Description: The default template.
 */
?>
<?php do_action( 'wpmtst_before_view' ); ?>
<div class="strong-view <?php wpmtst_container_class(); ?>"<?php wpmtst_container_data(); ?>>
	<?php do_action( 'wpmtst_view_header' ); ?>
	<div class="strong-content <?php wpmtst_content_class(); ?>">
		<div class="main_gallery">	
			<div class="multiple-item-reviews">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="main_gallery_slide">
						<!-- <?php wpmtst_the_title( '<b class="name-author">', '</b>' ); ?> -->
						<div class="date-client">
							<?php wpmtst_the_client(); ?>
						</div>
						<?php wpmtst_the_content(); ?>
						<span class="sk">”</span>
						
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<?php do_action( 'wpmtst_after_content' ); ?>
	</div>
	<?php do_action( 'wpmtst_view_footer' ); ?>
</div>
<?php do_action( 'wpmtst_after_view' ); ?>
<script>
	$('.multiple-item-reviews').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1
});
</script>