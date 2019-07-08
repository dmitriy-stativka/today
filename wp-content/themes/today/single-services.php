<?php get_header(); ?>
	<div class="container single-services">
		<?php if(have_rows('price_name')){ ?>
		<div class="price-right">
			<p class="price-top">
				<strong>Цены на импланты</strong>
			</p>                   
	        <?php
	        $params = array(
	            'post_type' => 'services',
	            'posts_per_page' => -1,
	        );
	        $query = new WP_Query( $params );
	        ?>
	        <?php if($query->have_posts()): ?>
				<table class="attribute" cellspacing="0">
	                <tbody>
	                  	<tr class="head">
							<td>Наименование</td>
							<td>Страна - пр-тель</td>
							<td>Гарантия</td>
							<td>Цена</td>
						</tr>
	            
	                <?php while ( have_rows('price_name') ) : the_row(); ?>
	                    <tr>
	                        <td class="name-price"><?php the_sub_field('name') ?></td>
	                        <td><?php the_sub_field('country') ?></td>
							<td><?php the_sub_field('garantiya') ?></td>
							<td class="name-price"><?php the_sub_field('price') ?></td>
	                    </tr>
	                <?php endwhile; ?>
	                </tbody>
	            </table>
	        <?php endif; ?>
	        <div class="help">
	        	<p>Нужна помощь с выбором? Давайте мы Вам позвоним!</p>
	        	<a id="popup-on" class="popup__toggle">Обратный звонок</a>
	        </div>
		</div>
		<?php } ?>
		<div class="text">
			<?php the_field('text_service'); ?>
		</div>
	</div>
<?php get_footer(); ?>