<?php
  $params = array(
      'post_type' => 'news',
      'posts_per_page' => -1,
  );
  $query = new WP_Query( $params );
  ?>
  <?php if($query->have_posts()): ?>
          <?php while ($query->have_posts()): $query->the_post() ?>
            <div class="col-md-4">
              <div class="post-col new-post">
                <a href="<?=the_permalink( $post->ID )?>">
                  <?php $name = get_field('name_new'); ?>
                  <?php $desc = get_field('description_new'); ?>
                  <?php $service_img = get_field('image_new')?>
                  <img src="<?php echo $service_img['url'] ?>" alt="">
                  <div class="descr-text">
                     <b><?php echo $name; ?></b>
                    <p><?php echo $desc ?></p>
                    <div class="details clearfix">
                      <div class="date"><?php the_date(); ?></div>
                      <span>Подробнее</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
  <?php endif; ?>