<?php get_header(); ?>

    <div class="content">
      <?php
        $args = array(
        'post_type' => 'Products',
        'posts_per_page' => 1,
        'order' => 'ASC',
        );

        $products = new WP_Query($args);
        while($products->have_posts()) {
            $products->the_post();
          
      ?>
      <div class="product-name">
        <div class="gen-name g-text">Xbox Series X|S</div>
        <div class="spec-name">
          <div class="inner-spec">
            <?php
              $next_post = get_next_post();
            ?>
            <div class="brand mob1"><?php echo $next_post->post_title; ?></div>
            <div class="brand mob2"><?php echo the_title(); ?></div>
          </div>
        </div>
      </div>

      <div class="product-img">
        <div class="prod">
          <div class="prod-photo">
            <img class="activeProd" src="<?php echo get_the_post_thumbnail_url(); ?>" />
          </div>
          <div class="triangle"></div>
          <div class="letter">
            <div class="text">A</div>
            <div class="text">B</div>
            <div class="text">X</div>
          </div>
        </div>
        <div class="prod" id="changeState">
          <div class="prod-photo">
            
            <img class="subActiveProd" src="<?php echo get_the_post_thumbnail_url( $next_post ) ?>" />
          </div>
          <div class="title">
            <div class="feat-s"><?php echo $next_post->post_title; ?> <?php echo ">"; ?>  </div>
            <div class="feat-x"><?php echo the_title(); ?> <?php echo ">"; ?> </div>
          </div> 
        </div>
      </div>

      <div class="product-specs g-text clearfix">
        <div class="details">
          <div class="spec feat-s">
            <div class="feat"><?php echo get_post_meta(get_the_ID(), 'speed', true); ?></div>
            <div class="name">Gaming</div>
          </div>
          <div class="spec feat-x">
            <?php $nextSpeed = get_field('speed', $next_post->ID);  ?>
            <div class="feat"><?php echo $nextSpeed; ?></div>
            <div class="name">Gaming</div>
          </div>
        </div>

        <div class="details">
          <div class="spec feat-s">
            <div class="feat"><?php echo get_post_meta(get_the_ID(), 'frame_rate', true); ?></div>
            <div class="name">Frames per second</div>
          </div>
          <div class="spec feat-x">
            <?php $nextFrame = get_field('frame_rate', $next_post->ID);  ?>
            <div class="feat"><?php echo $nextFrame; ?></div>
            <div class="name">Frames per second</div>
          </div>
        </div>

        <div class="details">
          <div class="spec feat-s">
            <div class="spec"><?php echo get_post_meta(get_the_ID(), 'dynamic_range', true); ?></div>
            <div class="name">High Dynamic Range</div>
          </div>
          <div class="spec feat-x">
            <?php $nextRange = get_field('dynamic_range', $next_post->ID);  ?>
            <div class="spec"><?php echo $nextRange; ?></div>
            <div class="name">High Dynamic Range</div>
          </div>  
        </div>
      </div>

      <div class="product-price">
        <div class="price">
          <div class="inner1">
            <?php $nextPrice = get_field('price', $next_post->ID);  ?>
            <div class="value"><?php echo $nextPrice; ?></div>
            <div class="value"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></div>
          </div>
          <div class="inner2">99</div>
        </div>
        <div class="cta">
          <a class="desk" href="#">Lets get started</a>
          <a class="mob" href="#">Add to Cart</a>
        </div>
      </div>

      <?php
        } wp_reset_query();
      ?>

    </div>

      
<?php get_footer(); ?>