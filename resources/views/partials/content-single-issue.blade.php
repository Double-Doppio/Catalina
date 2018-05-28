<?php

  $orderArray = get_field("order", 11);

  $orderNumber = array_search(get_the_ID(), $orderArray);

    $orderNumber++;

    $colorArray = array('red','blue','green');

    $color = $colorArray[($orderNumber%3)];
    
    if( $orderNumber%2 == 1 ) { ?>

    <div class="section-container">

    <div class="image-section">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
      </div>

    <div class="text-section box-<?php echo $color; ?>">
        <h1 class="text-top"><?php echo $orderNumber; ?></h1>
        <h1 class="text-title"><?php echo get_the_title();?></h1>
        <h1 class="text-mid"><?php echo get_field('issue_subtitle' ); ?></h1>
        <a class="learn-more" href="<?php echo get_permalink(); ?>"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
      </div>

    </div>
    
  <?php } else { ?>

  <div class="section-container">

    <div class="text-section box-<?php echo $color; ?>">
      <h1 class="text-top"><?php echo $orderNumber; ?></h1>
      <h1 class="text-title"><?php echo get_the_title();?></h1>
      <h1 class="text-mid"><?php echo get_field('issue_subtitle' ); ?></h1>
      <a class="learn-more" href="<?php echo get_permalink(); ?>"><i class="fa fa-arrow-right"></i>&nbsp;<p>Learn More</p></a>
    </div>

    <div class="image-section">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
    </div>
  </div>

  <?php } ?>

  <div class="text-body">
    <?php the_content(); ?>
  </div>