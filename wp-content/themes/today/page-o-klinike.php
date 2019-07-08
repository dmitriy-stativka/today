<?php get_header(); ?>
<div class="page-o-kompanii">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="text-left">
						<b class="title-name">Популярные услуги</b>
					</div>
					<?php
					  $params = array(
					      'post_type' => 'services',
					      'posts_per_page' => -1,
					  );
					  $query = new WP_Query( $params );
					  ?>
					  <?php if($query->have_posts()): ?>

					  		<ul class="post-list">
					          <?php while ($query->have_posts()): $query->the_post() ?>
					          <?php $name = get_field('name_service'); ?>
								<li>
									<a href="<?=the_permalink( $post->ID )?>"><?php echo $name; ?></a>
								</li>
					          <?php endwhile; ?>
					         </ul>
					  <?php endif; ?>


					<div class="text-left">
						<b class="title-name">Полезные статьи</b>
					</div>


					<?php
					  $params = array(
					      'post_type' => 'news',
					      'posts_per_page' => 6,
					  );
					  $query = new WP_Query( $params );
					  ?>
					  <?php if($query->have_posts()): ?>

					  		<ul class="post-list">
					          <?php while ($query->have_posts()): $query->the_post() ?>
					          <?php $name_new = get_field('name_new'); ?>
								<li>
									<a href="<?=the_permalink( $post->ID )?>"><?php echo $name_new; ?></a>
								</li>
					          <?php endwhile; ?>
					         </ul>
					  <?php endif; ?>


				</div>
			</div>
		</div>
		<div class="why-us">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-in">
							<b>Наши преимущества</b>
							<ul>
								<li>У нас всегда царит доброжелательная и успокаивающая атмосфера. Мы действительно лечим «без страха и боли», используя самые современные методики.</li>
								<li>Специалисты клиники после осмотра составляют оптимальный план лечения, исключающий дополнительные процедуры и траты.</li>
								<li>Мы индивидуально подходим к каждому пациенту и предлагаем максимально доступные условия + расширенные гарантии. </li>
								<li>Дисконтная программа ToDay предусматривает хорошие семейные и корпоративные скидки, выгодные условия для постоянных клиентов.</li>
								<p>Узнать больше или связаться с нами Вы можете на странице <a href="contacts/">Контакты</a>.</p>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<img src="/wp-content/themes/today/images/img_teeth.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>