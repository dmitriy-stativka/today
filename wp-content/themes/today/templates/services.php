<?php
  $params = array(
      'post_type' => 'services',
      'posts_per_page' => 3,
  );
  $query = new WP_Query( $params );
  ?>
  <?php if($query->have_posts()): ?>
          <?php while ($query->have_posts()): $query->the_post() ?>
            <div class="col-md-4">
                <div class="post-col">
                  <a href="<?=the_permalink( $post->ID )?>">
                    <?php $name = get_field('name_service'); ?>
                    <?php $desc = get_field('description_service'); ?>
                    <?php $service_img = get_field('image_service')?>
                    <img src="<?php echo $service_img['url'] ?>" alt="">
                  
                    <div class="descr-text">
                      <div class="text-center">
                        <b><?php echo $name; ?></b>
                      </div>
                      <p><?php echo $desc ?></p>
                      <div class="details clearfix">
                        <?php $min; ?>
                        <?php while ( have_rows('price_name') ) : the_row(); ?>
                          <?php $min[] = get_sub_field('price'); ?>
                        <?php endwhile; ?>
                        <?php if($min){ ?>
                          <div class="price">От <i><?php echo min($min); ?></i></div>
                        <?php } ?>
                        <span>Подробнее</span>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
          <?php endwhile; ?>
  <?php endif; ?>